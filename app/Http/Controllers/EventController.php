<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class EventController extends Controller
{
    public static function getFilters(array $request = [])
    {
        $accepts = [
            'title', 'status'
        ];
        $filters = [];
        foreach ($accepts as $col) {
            $filters[$col] = Arr::get($request, $col);

        } //end foreach

        return $filters;
    }

    private static function getEvents(array $filters = [], $limit = 10)
    {

        extract($filters);
        $data = Events::query();
        if (!is_null($title)) {
            $data->where('title', 'LIKE',  "%" . $title . "%");
        } //end if

        if (!is_null($status) && in_array($status, Events::STATUSES_ARR)) {
            $data->where('status', $filters['status']);
        } //end if

        return $data->orderBy('status', 'desc')->orderBy('id', 'desc')->paginate($limit);
    }

    private static function findEvent(int $id)
    {
        return Events::find($id);
    }

    public function index(Request $request)
    {
        $time = 65340;

        $filters = self::getFilters($request->toArray());
        $compacts = [
            'siteTitle' => 'Danh sách sự kiện',
            'breadcrumb' => [
                'Sự kiện' => '#',
            ],
            "events" => self::getEvents($filters),
            "filters" => $filters,
            "event_status" => Events::STATUSES,
        ];

        return view('web.events.index', $compacts);
    }

    public function create()
    {
        $compacts = [
            'siteTitle' => 'Thêm sự kiện',
            'breadcrumb' => [
                'Sự kiện' => route('events'),
                'Thêm sự kiện' => '#',
            ],
            "event_status" => Events::STATUSES,
            "event_types" => Events::TYPES,
            "day_of_weeks" => Events::DAY_OF_WEEK,
            'form_data' => new Events()
        ];

        return view('web.events.edit', $compacts);
    }

    public function store(Request $request)
    {
        $type = (int) $request->type;
        if (!$request->title ?? !in_array($type, Events::TYPES_ARR)) {
            return redirect()->back()->with('error', 'Err 0x1: Thao tác không hợp lệ');
        } //end if

        $time = convertTimeToSecond($request->time_started);
        $date = 0;
        $dayOfWeek = 0;
        $expiredAt = (int) $request->expired_at;
        $status = (int) $request->status;
        $duration = (int) $request->duration;
        switch ($type) {
            case Events::TYPE_WEEKLY:
                $dayOfWeek = (int) $request->day_of_week_started;
                if (!in_array($dayOfWeek, Events::DAY_OF_WEEK_ARR)) {
                    return redirect()->back()->with('error', 'Err 0x2: Thao tác không hợp lệ');
                } //end if

                break;
            case Events::TYPE_SPECIFICATION:
                $date = convertDatetimeToSecond($request->date_started);

                break;
            case Events::TYPE_DAILY:
            default:
                break;
        } //end switch

        $model = new Events();
        $model->title = $request->title;
        $model->date = $date;
        $model->time = $time;
        $model->day_of_week = $dayOfWeek;
        $model->type = $type;
        $model->duration = $duration;
        $model->expired_at = $expiredAt;
        $model->status = $status;
        $model->save();

        return redirect()->route('events')->with('success', 'Thành công');
    }

    public function edit(int $id)
    {
        $event = self::findEvent($id);
        if (!$event) {
            abort(404);
        } //end if

        $compacts = [
            'siteTitle' => "Sự kiện: " . $event->title,
            'breadcrumb' => [
                'Tài khoản' => route('events'),
                'Tạo tài khoản' => '#',
            ],
            "event_status" => Events::STATUSES,
            "event_types" => Events::TYPES,
            "day_of_weeks" => Events::DAY_OF_WEEK,
            'form_data' => $event
        ];

        return view('web.events.edit', $compacts);
    }

    public function update(int $id, Request $request)
    {
        $event = self::findEvent($id);
        if (!$event) {
            abort(404);
        } //end if

        $accepts = [
            'title',
            'role',
            'status',
        ];

        foreach ($accepts as $col) {
            if ($event->$col != $request->$col) {
                $event->$col = $request->$col;
            } //end if
        } //end foreach

        $event->save();
        return redirect()->back()->with('success', 'Thành công');
    }
}
