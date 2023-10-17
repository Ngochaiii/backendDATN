<?php

namespace App\Http\Controllers;

use App\Models\TicketComments;
use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = Tickets::with('user')->where('owner_id', auth()->id())->get();
        $siteTitle = "Tickets";
        $compacts = [
            'siteTitle' => $siteTitle,
            'tickets' => $tickets,
            "ticket_category" => Tickets::CATEGORIES,
            "ticket_status" => Tickets::STATUSES,
        ];
        return view('web.ticket.index', $compacts);
    }

    private static function findTicket(int $id)
    {
        return Tickets::with('comments')->find($id);
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
        return view('web.ticket.detail', $compacts);
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
        $ticketComment->admin_id = auth()->guard('admin')->id();
        $ticketComment->save();

        $ticket->status = Tickets::STATUS_ENABLE;
        $ticket->save();

        return redirect()->back();
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
}
