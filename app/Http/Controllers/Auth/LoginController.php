<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserOtpVerifyRequest;
use App\Jobs\UserOTPMailJob;
use App\Mail\UserOTPMail;
use App\Models\LoginHistory;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if (Auth()->user()->role == 1) {
            return route('admin.dashboard');
        } elseif (Auth()->user()->role == 2) {
            return route('retailer.dashboard');
        } elseif (Auth()->user()->role == 3) {
            return route('employee.dashboard');
        } elseif (Auth()->user()->role == 4) {
            return route('distributor.dashboard');
        } elseif (Auth()->user()->role == 5) {
            return route('superdistributor.dashboard');
        } elseif (Auth()->user()->role == 6) {
            return route('b2c.dashboard');
        } elseif (Auth()->user()->role == 7) {
            return route('apiuser.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']]) || auth()->attempt(['mobile' => $input['email'], 'password' => $input['password']])) {
            $ip = $_SERVER['REMOTE_ADDR'];
            $userid = AUth::id();
            $date = date('Y-m-d');
            $time = date('H:i:s');
            LoginHistory::insert([
                'ip_address' => $ip,
                'login_date' => $date,
                'login_time' => $time,
                'user_id' => $userid,
            ]);
            if (Auth()->user()->role == 1) {
                return redirect()->route('admin.dashboard');
            } elseif (Auth()->user()->role == 2) {
                return redirect()->route('retailer.dashboard');
            } elseif (Auth()->user()->role == 3) {
                return redirect()->route('employee.dashboard');
            } elseif (Auth()->user()->role == 4) {
                return redirect()->route('distributor.dashboard');
            } elseif (Auth()->user()->role == 5) {
                return redirect()->route('superdistributor.dashboard');
            } elseif (Auth()->user()->role == 6) {
                return redirect()->route('b2c.dashboard');
            } elseif (Auth()->user()->role == 7) {
                return redirect()->route('apiuser.dashboard');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email and Password Are Wrong!');
        }
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|string',
        ]);

        $login = request()->email;

        if (is_numeric($login)) {
            $user = User::where('mobile', $request->email)->first();
            $number = $request->email;
        } elseif (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $request->email)->first();
            $number = $user->mobile;
        } else {
            // $user = false;
            $user = User::where('email', $request->email)->first();
            $number = $user->mobile;
        }

        if ($user && Hash::check($request->password, $user->password)) {
            // Email and password are correct
            $otp = mt_rand(1000, 9999);
            $data = new \stdClass();
            $data->name = $user->name;
            $data->otp = $otp;
            $user->update([
                'otp' => $otp,
            ]);

            // dispatch(new UserOTPMailJob($user->email, $data));
            \Mail::to($user->email)->send(new UserOTPMail($data));

            // $result = \DB::table('whatsappapitokens')->where('status', 'primary')->first();
            // // whats app api
            // $client = new Client();

            // $response = $client->post('https://niyochat.com/api/send', [
            //     'headers' => [
            //         'Cookie' => 'stackpost_session=n007uvlf4bfgtkj5jidoa5es4c9i4p7j',
            //     ],
            //     'form_params' => [
            //         'number' => '91'.$number,
            //         'type' => 'text',
            //         'message' => $otp,
            //         'instance_id' => $result->instant_id ?? null,
            //         'access_token' => $result->tokens ?? null,
            //     ],
            // ]);

            // if (!$response) {
            //     $user->update([
            //         'otp' => $otp,
            //     ]);
            // }else{
                $user->update([
                    'otp' => $otp,
                ]);
            // }

            return response()->json(['success' => true, 'message' => 'OTP Send to your email and phone, kindly verfity it.'], 200);
        }

        // Email or password is incorrect
        return response()->json(['success' => false, 'message' => 'Invalid email or password.'], 401);
    }

    public function verifyOTP(UserOtpVerifyRequest $request)
    {
        try {
            $login = request()->email;

            if (is_numeric($login)) {
                $user = User::where('mobile', $request->email)->where('otp', $request->otp)->first();
            } elseif (filter_var($login, FILTER_VALIDATE_EMAIL)) {
                $user = User::where('email', $request->email)->where('otp', $request->otp)->first();
            } else {
                $user = false;
            }
            if ($user) {
                $user->update([
                    'otp' => null,
                ]);

                return response()->json(['success' => true, 'message' => 'OTP verified successfull.'], 200);
            }

            return response()->json(['success' => false, 'message' => 'OTP not found'], 401);
        } catch (\Exception $ex) {
            return response()->json(['success' => false, 'message' => $ex->getMessage()], 401);
        }
        // Email or password is incorrect
    }
}
