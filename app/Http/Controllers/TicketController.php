<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function fetchTicket()
    {
        $tickets = Ticket::all();
        $services = Service::whereIn('id', $tickets->pluck('product_type'))->get();
        return response()->json(['tickets' => $tickets, 'services' => $services]);
    }
    public function ticketDetails(Request $request)
    {
        $tickets = Ticket::where('id', $request->id)->get();
        $services = Service::whereIn('id', $tickets->pluck('product_type'))->get();
        return response()->json(['tickets' => $tickets, 'services' => $services]);
    }
    public function ticketApprove(Request $request)
    {
        $ticket = Ticket::findOrFail($request->id);
        $ticket->status = 2;
        $ticket->save();
        return response()->json(['success' => 'Ticket approved successfully']);
    }
    public function ticketPending(Request $request)
    {
        $ticket = Ticket::findOrFail($request->id);
        $ticket->status = 1;
        $ticket->save();
        return response()->json(['success' => 'Ticket is Pending']);
    }
}
