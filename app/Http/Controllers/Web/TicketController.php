<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\TicketComments;
use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    private static function findTicket(int $id)
    {
        return Tickets::with('comments')->where('owner_id', auth()->id())->find($id);
    }
    public function index()
    {
        $tickets = Tickets::where('owner_id', auth()->id())->get();
        $siteTitle = "Tickets";
        $compacts = [
            'siteTitle' => $siteTitle,
            'tickets' => $tickets,
            "ticket_category" => Tickets::CATEGORIES,
            "ticket_status" => Tickets::STATUSES,
        ];
        return view('web.front_end.ticket.index', $compacts);
    }

    public function create()
    {
        $siteTitle = "Tạo Tickets";
        $compacts = [
            'siteTitle' => $siteTitle,
            "ticket_category" => Tickets::CATEGORIES,
            "ticket_status" => Tickets::STATUSES,
            'form_data' => new Tickets()
        ];
        return view('web.front_end.ticket.edit', $compacts);
    }
    public function store(Request $request)
    {

        $ticket = new Tickets();

        $ticket->subject = $request->subject;
        $ticket->categories = (int) $request->categories;
        $ticket->message = $request->message;
        $ticket->owner_id = auth()->id();
        $ticket->status = Tickets::STATUS_ENABLE;
        $ticket->code = $request->code;
        $ticket->save();
        //end if

        return redirect()->route('panel.ticket')->with('success', 'Thành công');
    }

    public function detail(int $id)
    {

        $ticket = self::findTicket($id);
        if (!$ticket) {
            abort(404);
        } //end if
        $siteTitle = $ticket->subject;
        $compacts = [
            'ticket' => $ticket,
            'comments' => $ticket->comments,
            'siteTitle' => $siteTitle,
            'owner_name' => auth()->user()->name,
            "ticket_category" => Tickets::CATEGORIES,
            "ticket_status" => Tickets::STATUSES,
            'form_data' => new Tickets()
        ];
        return view('web.front_end.ticket.detail', $compacts);
    }

    public function close(int $id)
    {
        $ticket = self::findTicket($id);
        if (!$ticket) {
            abort(404);
        } //end if

        $ticket->status = Tickets::STATUS_CLOSE;
        $ticket->save();

        return redirect()->back()->with('success', 'Thành công');
    }
    public function comment(int $id, Request $request)
    {

        $msg = $request->comment_content ?? null;
        if (!$msg) {
            return redirect()->back()->with('error', 'Vui lòng nhập nội dung');
        } //end if

        $ticket = self::findTicket($id);
        if (!$ticket || !$ticket->status) {
            abort(404);
        } //end if

        $ticketComment = new TicketComments();
        $ticketComment->ticket_id = $id;
        $ticketComment->message = preHtmlData($msg);
        $ticketComment->save();

        $ticket->status = Tickets::STATUS_DISABLE;
        $ticket->save();
        return redirect()->back();
    }
}
