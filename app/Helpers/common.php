<?php

use Carbon\Carbon;

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
