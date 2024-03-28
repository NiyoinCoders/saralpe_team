<?php

namespace App\Http\Controllers;
use App\models\User;
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

    public function wallet(){
        $user = User::first();
    // echo  $user->balanceInt; // 0

    /* $user->deposit(10);
$user->balance; // 10
echo $user->balanceInt; */
/* $user->withdraw(1);
echo $user->balance; // 9 */

/* $user->forceWithdraw(200, ['description' => 'payment of taxes']);
$user->balance; // -191 */

    }
}
