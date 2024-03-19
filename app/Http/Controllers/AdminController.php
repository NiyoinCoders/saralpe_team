<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('b2b.dashboard.admin.index');
    }

    public function api()
    {
        $result = \DB::table('whatsappapitokens')->get();

        return view('b2b.dashboard.admin.api', compact('result'));
    }

    public function apistore(Request $request)
    {
        \DB::table('whatsappapitokens')->insert(
            ['instant_id' => $request->instant_id, 'tokens' => $request->token, 'status' => $request->status]
        );

        return redirect()->back()->with('msg', 'Data Saved');
    }

    public function apidestroy($id)
    {
        \DB::table('whatsappapitokens')->delete($id);

        return redirect()->back()->with('success', 'Api deleted successfully');
    }
}
