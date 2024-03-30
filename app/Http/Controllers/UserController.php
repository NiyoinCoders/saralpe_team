<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Events\DataInserted;
use App\Notifications\YourNotification;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        if (Auth::user()->role == 1) {
            $users = DB::table("users")
                ->where("users.id", "!=", Auth::id())
                ->join("roles", "users.role", "roles.id")
                ->select("users.*", "roles.name as role_name")
                ->get();
        } else {
            $users = DB::table("users")
                ->where("users.id", "!=", Auth::id())
                ->join("roles", "users.role", "roles.id")
                ->select("users.*", "roles.name")
                ->get();
        }
        $userTable = User::where('id', '!=', Auth::id())->get();
        return view("admin.user.index", compact("users"))->with(['userTables' => $userTable]);
        //return view("admin.user.index"); 
    }

    /* public function add_Users(){
        $roles=\DB::table('roles')->get();
        $services=\DB::table('dc_services')->get();
        return view("admin.user.createOrUpdate",compact('roles','services')); 
    }  */
    public function pending_user()
    {
        $users = DB::table("users")
            ->where("role", "==", 0)
            ->get();
        $roles = DB::table("roles")
            ->where("id", "!=", 1)
            ->get();
        return view("b2b.user.pending", compact("users", "roles"));
    }
    public function userFilter(Request $request)
    {
        $userType = $request->input('user_type');
        $userStatus = $request->input('user_status');
        $kycStatus = $request->input('kyc_status');
        $query = User::query();
        $query->where('id', '!=', Auth::id());
        if ($userType !== 'all') {
            $query->where('role', $userType);
        }
        if ($userStatus !== 'all') {
            $query->where('status', $userStatus);
        }
        if ($kycStatus !== 'all') {
            $query->where('kyc_status', $kycStatus);
        }
        $users = $query->get();
        return response()->json($users);
    }
    public function pending_user_update(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'role' => 'required'
        ]);
        $user = User::find($request->user_id);
        $user->update([
            "role" => $request->role,
            "status" => $request->status
        ]);
        return redirect()->route("all-user.index")->with('status', 'User Role Updated!');
    }
    public function complete_user()
    {

        return view("b2b.user.complete");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request): View
    {
        //
        $roles = \DB::table('roles')->get();
        $services = \DB::table('services')->get();
        return view("admin.user.createOrUpdate", compact('roles', 'services'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*  public function Update(Request $request, $id)
    {

//        dd($request->all());

        // $request->validate([
        //     'fullName' => 'required',
        //     'role' => 'required',
        //     'mobilenumber' => 'required',
        //     'firmname' => 'required',
        //     'fathername' => 'required',
        //     'dob' => 'required',
        //     'pan' => 'required',
        //     'andhar' => 'required',
        //     'email' => 'required'
        // ]);

        $formattedDob = date('Y-m-d', strtotime($request->dob));

        $user = User::find($id);
        $user->update([
            "role" => $request->role,
            'name' => $request->fullName,
            'mobile' => $request->mobilenumber,
            'firm_name' => $request->firmname,
            'father_name' => $request->fathername,
            'pan' => $request->pan,
            'aadhar' => $request->andhar,
            'email' => $request->email,
            'dob' => $formattedDob,
            'updated_at' => now()
        ]);


        return redirect('/admin/users')->with('message', 'User updated successfully!');
    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id): View
    {
        $user = User::find($id);
        $roles = \DB::table('roles')->get();
        $services = \DB::table('services')->get();
        return view("admin.user.createOrUpdate", compact('roles', 'services', 'user'));


        //return view('admin.user.createOrUpdate',compact('User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $User = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();

        $User->update($input);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('message', 'Deteted successfully!');
    }
    public function card($id)
    {
        $User = User::find($id);
        return view('admin.user.card', compact('User'));
    }



    public function userchangeStatus(Request $request)
    {
        $user = User::findOrFail($request->id);
        $data['status'] = $request->value;
        $user->update($data);
        return response()->json(['success' => 'User Status Updated Successfully!'], 200);
    }
}
