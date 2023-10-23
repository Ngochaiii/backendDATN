<?php

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Serverinfor;
use App\Models\Sidebar;
use App\Models\SRO\Account\TbUser;
use App\Models\SRO\Shard\SiegeFortress;

if (!function_exists('adAsset')) {
    function adAsset($path, $secure = null)
    {
        return asset("/templates/ad/$path", $secure);
    }
}
if (!function_exists('panelAsset')) {
    function panelAsset($path, $secure = null)
    {
        return asset("/templates/cpanel/$path", $secure);
    }
}

if (!function_exists('authAdmin')) {
    function authAdmin()
    {
        return auth()->guard('admin');
    }
}

if (!function_exists('convertTimeToSecond')) {
    function convertTimeToSecond(string $time)
    {
        $datetime = Carbon::parse($time);
        $_time = $datetime->toTimeString();
        $arrTime = explode(':', $_time);
        return ($arrTime[0] * 60 + $arrTime[1]) * 60 + $arrTime[2];
    }
}

if (!function_exists('formatDateTime')) {
    function formatDateTime(int $time)
    {
        $datetime = Carbon::parse($time, env("TIMEZONE"))->setTimezone(env("TIMEZONE"));
        return $datetime->format("d/m/Y H:i:s");
    }
}

if (!function_exists('convertSecondToTime')) {
    function convertSecondToTime($_time)
    {
        if (is_null($_time)) {
            return Carbon::now()->format('H:i');
        } //end if

        $_m = 0;
        $_s = 0;
        $_h = (int) ($_time / 3600);
        $_m = (int) (($_time - $_h * 3600) / 60);
        if (($_time - $_m * 60) > 0) {
            $_s = (int) (($_time - $_h * 3600) / ($_time - $_m * 60) / 60);
        }
        $text = $_h > 9 ? "$_h" : "0$_h";
        $text .= $_m > 9 ? ":$_m" : ":0$_m";
        $text .= $_s > 9 ? ":$_s" : ":0$_s";
        return $text;
    }
}


if (!function_exists('convertDatetimeToSecond')) {
    function convertDatetimeToSecond(string $datetime)
    {
        return Carbon::parse($datetime)->setTimezone('Asia/Ho_Chi_Minh')->timestamp;
    }
}

if (!function_exists('renderArrayOptions')) {
    function renderArrayOptions(array $options, $default = null, $isNumber = true)
    {
        $html = '';
        if (!is_null($default) && $isNumber) {
            $default = (int) $default;
        } //end if

        foreach ($options as $key => $val) {
            if ($isNumber) {
                $selected = ($key === $default) ? 'selected' : '';
            } else {
                $selected = ($key == $default) ? 'selected' : '';
            }

            $html .= "<option value='$key' $selected>$val</option>";
        } //end foreach

        return $html;
    }
}

function randomString($length = 4)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateBgConfig($key)
{
    if (!isset(config('settings')[$key])) {
        return;
    } //end if

    $url = asset(config('settings')[$key]);
    return " style='background-image: url($url)' ";
}

function getSetting($key, $default = null)
{
    if (!isset(config('settings')[$key])) {
        return $default;
    } //end if

    return config('settings')[$key];
}

function getAssetSetting($key, $default = null)
{
    if (!isset(config('settings')[$key])) {
        return $default;
    } //end if

    return asset(config('settings')[$key]);
}

function storeFile($source, $folder = null, $prefix = null)
{
    if ($source && is_file($source)) {
        $extension = $source->getClientOriginalExtension();
        $fileName = $prefix . time() . '_' . randomString() . '.' . $extension;
        $source->storeAs('public/' . $folder, $fileName);
        $source = 'storage/' . $folder . '/' . $fileName;
    }

    return htmlspecialchars($source, ENT_QUOTES, 'UTF-8');
}


function getLSideBar()
{
    return Sidebar::active()
        ->sidebar()
        ->posLeft()
        ->posAsc()
        ->get();
}

function getRSideBar()
{
    return Sidebar::active()
        ->sidebar()
        ->posRight()
        ->posAsc()
        ->get();
}

function getLeftSideBar()
{
    $sidebars = null;
    try {
        $sidebars = cache()->remember(Sidebar::CACHE_LEFT, 60, function () use ($sidebars) {
            return getLSideBar();
        });

        return $sidebars;
    } catch (Exception $e) {
        return getLSideBar();
    }
}

function getRightSideBar()
{
    try {
        $sidebars = cache()->remember(Sidebar::CACHE_RIGHT, 60, function () {
            return getRSideBar();
        });

        return $sidebars;
    } catch (Exception $e) {
        return getRSideBar();
    }
}

function getUserCount()
{
    return TbUser::count('JID');
}

function getServerInfo()
{
    return Serverinfor::get();
}

function preHtmlData($data, $default = null)
{
    return $data;
}

function authSilk()
{
    if (auth()->check()) {
        return auth()->user()->sksilk->silk_own ?? 0;
    } //end if

    return 0;
}

function getStaticEvents()
{
    $time = convertTimeToSecond(Carbon::now()->format('H:i'));
    $startOfToday = Carbon::now()->startOfDay()->timestamp;
    $endOfToday = Carbon::now()->endOfDay()->timestamp;
    $dayOfTheWeek = Carbon::now()->dayOfWeek;

    $events = Event::where('time', '>=', $time)
        ->where(
            function ($q) use ($dayOfTheWeek, $startOfToday, $endOfToday) {
                $q->where('type', Event::TYPE_DAILY)
                    ->orWhere(function ($qq) use ($startOfToday, $endOfToday) {
                        $qq->where('type', Event::TYPE_SPECIFICATION)
                            ->where('date', '>=', $startOfToday)
                            ->where('date', '<=', $endOfToday);
                    })
                    ->orWhere(function ($qq) use ($dayOfTheWeek) {
                        $qq->where('type', Event::TYPE_WEEKLY)
                            ->where('day_of_week', $dayOfTheWeek);
                    });
            }
        )->orderBy('time', 'asc')->get();

    return $events;
}

function getServerTime()
{
    return Carbon::now()->format('Y-m-d H:i:s');
}

function getSiegeFortress()
{
    return SiegeFortress::with('getGuildName')->get();
}

function hiddenText($text)
{
    $start = substr($text, 0, 3) ?? null;
    $end = substr($text, -3) ?? null;
    return $start . '***' . $end;
}

function preParseCharName($charName, string $default = '[Đang đổi tên]')
{
    return ($charName == '@') ? $default : $charName;

}
if (!function_exists('adAsset')) {
    function adAsset($path, $secure = null)
    {
        return asset("/templates/ad/$path", $secure);
    }
}

if (!function_exists('authAdmin')) {
    function authAdmin()
    {
        return auth()->guard('admin');
    }
}

if (!function_exists('convertTimeToSecond')) {
    function convertTimeToSecond(string $time)
    {
        $datetime = Carbon::parse($time);
        $_time = $datetime->toTimeString();
        $arrTime = explode(':', $_time);
        return ($arrTime[0] * 60 + $arrTime[1]) * 60 + $arrTime[2];
    }
}

if (!function_exists('convertSecondToTime')) {
    function convertSecondToTime($_time)
    {
        if (is_null($_time)) {
            return Carbon::now()->format('H:m');
        } //end if

        $_m = 0;
        $_s = 0;
        $_h = (int) ($_time / 3600);
        $_m = (int) (($_time - $_h * 3600) / 60);
        if (($_time - $_m * 60) > 0) {
            $_s = (int) (($_time - $_h * 3600) / ($_time - $_m * 60) / 60);
        }
        $text = $_h > 9 ? "$_h" : "0$_h";
        $text .= $_m > 9 ? ":$_m" : ":0$_m";
        $text .= $_s > 9 ? ":$_s" : ":0$_s";
        return $text;
    }
}


if (!function_exists('convertDatetimeToSecond')) {
    function convertDatetimeToSecond(string $datetime)
    {
        return Carbon::parse($datetime)->timestamp;
    }
}

if (!function_exists('renderArrayOptions')) {
    function renderArrayOptions(array $options, $default = null, $isNumber = true)
    {
        $html = '';
        if (!is_null($default) && $isNumber) {
            $default = (int) $default;
        } //end if

        foreach ($options as $key => $val) {
            if ($isNumber) {
                $selected = ($key === $default) ? 'selected' : '';
            } else {
                $selected = ($key == $default) ? 'selected' : '';
            }

            $html .= "<option value='$key' $selected>$val</option>";
        } //end foreach

        return $html;
    }
}
