<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $event = Events::paginate(3);
        // dd($event);
        $compacts = [
            "siteTitle" => "Event ",
            "events" => $event,
            "types" => Events::TYPES
        ];
        return view('web.front_end.event.index',$compacts);
    }
}
