<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Jobs\UserOTPMailJob;
use App\Mail\UserOTPMail;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class NewregisterController extends Controller
{
    //

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

  public function singup(Request $request){
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'mobile' => ['required', 'unique:users'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
    ]);

    $data = $request->all();


    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'firm_name'=>$data['firm_name'],
        'role'=>$data['role'],
        'gender'=>$data['gender'],
        'mobile'=>$data['mobile'],
        'state'=>$data['state'],
        'city'=>$data['city'],
        'pincode'=>$data['pincode'],
        'address'=>$data['address'],
        'aadhar'=>$data['aadhar'],
        'pan'=>$data['pan'],
        'gst'=>$data['gst'],
        "status"=>0,
        'password' => Hash::make($data['password']),
    ]);



    if ($user) {
        // Email and password are correct
        $otp = mt_rand(1000, 9999);
        $dat = new \stdClass();
        $dat->name = $user->name;
        $dat->otp = $otp;
        $user->update([
            'otp' => $otp,
        ]);
        \Mail::to($user->email)->send(new UserOTPMail($dat));


        // whats app api
        $client = new Client();

        $response = $client->post('https://niyochat.com/api/send', [
            'headers' => [
                'Cookie' => 'stackpost_session=n007uvlf4bfgtkj5jidoa5es4c9i4p7j',
            ],
            'form_params' => [
                'number' => '91'.$user->mobile,
                'type' => 'text',
                'message' => $otp,
                'instance_id' => '64E7032C1BF11',
                'access_token' => '64d1ec90e58f3',
            ],
        ]);

        if (!$response) {
            $user->update([
                'otp' => $otp,
            ]);
        }


      return redirect()->back()->with('success', 'Registertion success');

  }

  }


  public function optverify(Request $request){
    $input = $request->all();
    $this->validate($request, [
        'otp' => 'required',

    ]);
    $otp = User::where('otp',$input['otp'])->first();
    if ($otp){
        if ($otp->role == 1) {
            return redirect()->route('admin.dashboard');
        } elseif ($otp->role == 2) {
            return redirect()->route('retailer.dashboard');
        } elseif ($otp->role == 3) {
            return redirect()->route('employee.dashboard');
        } elseif ($otp->role == 4) {
            return redirect()->route('distributor.dashboard');
        } elseif ($otp->role == 5) {
            return redirect()->route('superdistributor.dashboard');
        } elseif ($otp->role == 6) {
            return redirect()->route('b2c.dashboard');
        } elseif ($otp->role == 7) {
            return redirect()->route('apiuser.dashboard');
        }
    }
  }
}
