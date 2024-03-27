<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportEkyc;
use DB;
use DataTables;

class EkycRegistrationController extends Controller
{
    //

    public function index(){
        return view('userkyc.ekyc');
    }
    public function ekycpost(Request $request){
        
        $request->validate([
            'firmname'=>'required',
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

         

        
          $path = public_path().'/assets/images/';

        

          //upload new file
          $pan_image = $request->pan_image;
          $pan_image_name = $pan_image->getClientOriginalName();
          $pan_image->move($path, $pan_image_name);

          $voter_front = $request->voter_front;
          $voter_front_name = $voter_front->getClientOriginalName();
          $voter_front->move($path, $voter_front_name);

          $voter_back = $request->voter_back;
          $voter_back_name = $voter_back->getClientOriginalName();
          $voter_back->move($path, $voter_back_name);

          $driving_front = $request->driving_front;
          $driving_front_name = $driving_front->getClientOriginalName();
          $driving_front->move($path, $driving_front_name);

          $driving_back = $request->driving_back;
          $driving_back_name = $driving_back->getClientOriginalName();
          $driving_back->move($path, $driving_back_name);


         
    
    
           
        $post = new User;
        $post->firmname = $request->firmname;
        $post->pannumber = $request->pannumber;
        $post->pincode = $request->pincode;
        $post->dob = $request->dob;
        $post->state = $request->state;
        $post->pan_image = $pan_image_name;
        $post->voter_front = $voter_front_name;
        $post->voter_back = $voter_back_name;
        $post->driving_front = $driving_front_name;
        $post->driving_back = $driving_back_name;
        $post->shopaddress = $request->shopaddress;
        $post->save();
        return back();
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
