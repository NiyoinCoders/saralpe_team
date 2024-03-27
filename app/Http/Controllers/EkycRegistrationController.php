<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use App\Exports\ExportEkyc;
use DB;
use DataTables;
use URL;

class EkycRegistrationController extends Controller
{
    //

    public function index(){
        $id= Auth::id();
        $user = User::where('id', $id)->first(); 

        return view('userkyc.ekyc',compact('user'));
    }
    public function ekycpost(Request $request){
        
        $request->validate([
            'firm_name'=>'required',
            'pannumber'=>'required',
            'pincode'=>'required',
            'dob'=>'required',
            
            'pan_image'=>'mimes:jpeg,jpg,png|required|max:10000',
            'voter_front'=>'mimes:jpeg,jpg,png|required|max:10000',
            'voter_back'=>'mimes:jpeg,jpg,png|required|max:10000',
            'driving_front'=>'mimes:jpeg,jpg,png|required|max:10000',
            'driving_back'=>'mimes:jpeg,jpg,png|required|max:10000',
            'shopaddress'=>'required',
         ]);

         

        
          //$path = public_path().'/assets/images/';

          if ($request->hasFile('pan_image')) {
            $pancardImg = $request->file('pan_image');
            $pancardImgName = date('YmdHis') . '_' . uniqid() . '.' . $pancardImg->getClientOriginalExtension();
            $pancardImg->move(public_path('upload'), $pancardImgName);
             $pancardImg = URL::to("/upload/$pancardImgName");
        }

        if ($request->hasFile('driving_front')) {
            $drivingFimg = $request->file('driving_front');
            $drivingFimgName = date('YmdHis') . '_' . uniqid() . '.' . $drivingFimg->getClientOriginalExtension();
            $drivingFimg->move(public_path('upload'), $drivingFimgName);
            $drivingFimg = URL::to("/upload/$drivingFimgName");
        }

        if ($request->hasFile('driving_back')) {
            $drivingBimg = $request->file('driving_back');
            $drivingBimgName = date('YmdHis') . '_' . uniqid() . '.' . $drivingBimg->getClientOriginalExtension();
            $drivingBimg->move(public_path('upload'), $drivingBimgName);
             $drivingBimg = URL::to("/upload/$drivingBimgName");
        }

        if ($request->hasFile('voter_front')) {
            $voterIDFimg = $request->file('voter_front');
            $voterIDFimgName = date('YmdHis') . '_' . uniqid() . '.' . $voterIDFimg->getClientOriginalExtension();
            $voterIDFimg->move(public_path('upload'), $voterIDFimgName);
            $voterFimg= URL::to("/upload/$voterIDFimgName");
        }

        if ($request->hasFile('voter_back')) {
            $voterIDBimg = $request->file('voter_back');
            $voterIDBimgName = date('YmdHis') . '_' . uniqid() . '.' . $voterIDBimg->getClientOriginalExtension();
            $voterIDBimg->move(public_path('upload'), $voterIDBimgName);
             $voterBimg = URL::to("/upload/$voterIDBimgName");
        }

          
        $request->firm_name;
       //exit();
         $id= Auth::id();
        $post = User::where('id', $id)->first();      
        $post->firm_name = $request->firm_name;
        $post->pan = $request->pannumber;
        $post->pincode = $request->pincode;
        $post->dob = $request->dob;
        $post->state = $request->state;
        $post->pan_image = $pancardImg;
        $post->voter_front = $voterFimg;
        $post->voter_back = $voterBimg;
        $post->driving_front = $drivingFimg;
        $post->driving_back = $drivingBimg;
        $post->shopaddress = $request->shopaddress;
        $post->save();
        return redirect('/index')->with('success', 'Form data submitted successfully!');
    }

    public function export(){
        return Excel::download(new ExportEkyc, 'ekyc.xlsx');
    }

    public function showarray(Request $request){
          
          
      
        

    }

    public function ekycdata(){
        $data = Ekyc::all();
        return view("ekycexport", ['data'=>$data]);
    }

    public function getdata(Request $request)
    {
        if ($request->ajax()) {
            $data = Ekyc::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }
}
