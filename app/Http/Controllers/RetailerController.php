<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class RetailerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {


        return view("b2b.dashboard.retailer.index");
    }
    public function ticket()
    {
        return view('b2b.tickets.ticket');
    }
    public function raise_ticket()
    {
        return view('b2b.tickets.raise_ticket');
    }
    public function account_configuration()
    {
        return view('b2b.tickets.account_configuration');
    }
    public function transaction_related()
    {
        return view('b2b.tickets.transaction_related');
    }
    public function tech_support()
    {
        return view('b2b.tickets.tech_support');
    }
    public function commision_issue()
    {
        return view('b2b.tickets.commision_issue');
    }
    public function other()
    {
        return view('b2b.tickets.other');
    }

    public function acconfi_add(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'subject' => 'required|string',
            'email' => 'required|email',
            'description' => 'required|string',
            'file' => 'required|image|mimes:jpeg,jpg|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $ticket = new Ticket();
        $ticket->user_id = Auth::id();
        $ticket->subject = $request->input('subject');
        $ticket->email = $request->input('email');
        $ticket->description = $request->input('description');
        $ticket->ticket_type = 'account_configuration';

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'uploads/' . $fileName;
            $file->move(public_path('uploads'), $fileName);
            $ticket->file = $filePath;
        }

        $ticket->save();

        return redirect()->back()->with('success', 'Ticket submitted successfully!');
    }
}
