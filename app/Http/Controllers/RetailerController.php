<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

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
        $services = Service::all();
        return view('b2b.tickets.tech_support')->with('services', $services);
    }
    public function commision_issue()
    {
        return view('b2b.tickets.commision_issue');
    }
    public function other()
    {
        return view('b2b.tickets.other');
    }

    public function ticket_add(Request $request)
    {
        $rules = [
            'file' => 'required|image|mimes:jpeg,jpg|max:100',
            'subject' => 'required|string',
            'email' => 'required|email',
            'description' => 'required|string',
            'product_type' => 'required|string',
            'support_issue' => 'required|string',
            'request_logs' => 'required|string',
            'response_logs' => 'required|string',
            'remark' => 'required|string',
            'mobile' => 'required|integer',
        ];
        $dynamicRules = [];
        foreach ($rules as $field => $rule) {
            if ($request->has($field)) {
                $dynamicRules[$field] = $rule;
            }
        }
        $validator = Validator::make($request->all(), $dynamicRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $ticket = new Ticket();
        $ticket->user_id = Auth::id();
        foreach ($rules as $rule => $type) {
            if ($request->has($rule) && $request->filled($rule)) {
                $ticket->$rule = $request->input($rule);
            }
        }
        $ticket->ticket_type = $request->input('ticket_type');
        $ticket->complaint_id = $this->generateRandomCode('SP-TICKET');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'uploads/complaint_ticket/' . $fileName;
            $file->move(public_path('uploads/complaint_ticket'), $fileName);
            $ticket->file = $filePath;
        }
        $ticket->save();
        return redirect()->back()->with('success', 'Ticket submitted successfully!');
    }
    public function generateRandomCode($prefix = '', $length = 8)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';

        $randomString = '';
        $randomString .= $prefix;
        for ($i = 0; $i < ($length - strlen($prefix)); $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        $randomString .= '-';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $numbers[rand(0, strlen($numbers) - 1)];
        }
        return $randomString;
    }
    public function fetchList()
    {
        $tickets = Ticket::all();
        $services = Service::whereIn('id', $tickets->pluck('product_type'))->get();
        return response()->json(['tickets' => $tickets, 'services' => $services]);
    }
}
