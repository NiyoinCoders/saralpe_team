<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\CompanyBank;

class CompanyBankController extends Controller
{
    
        /**
         * Display a listing of the resource.
         *
         * @return response()
         */
        public function index(): View
        {
            $CompanyBanks = CompanyBank::latest()->paginate(5);
            
            return view('admin.CompanyBanks.index',compact('CompanyBanks'))
                        ->with('i', (request()->input('page', 1) - 1) * 5);
        }
      
        /**
         * Show the form for creating a new resource.
         */
        public function create(): View
        {
            return view('admin.CompanyBanks.createOrUpdate');
        }
      
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request): RedirectResponse
        {
            $request->validate([
                'bank_name' => 'required',
                'acc_no' => 'required',
                'ifsc_code'=>'required',
                'holder_name'=>'required',
                'branch_add' =>'required',
                 

            ]);
        
            $input = $request->all();
          
            CompanyBank::create($input);
           
            return redirect()->route('banks.index')
                            ->with('success','CompanyBank created successfully.');
        }
      
        /**
         * Show the form for editing the specified resource.
         */
        public function edit($id): View
        {
            $CompanyBank = CompanyBank::find($id);
            return view('admin.CompanyBanks.createOrUpdate',compact('CompanyBank'));
        }
      
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id): RedirectResponse
        {
            $CompanyBank = CompanyBank::find($id);
              
            $request->validate([
                'bank_name' => 'required',
                'acc_no' => 'required',
                'ifsc_code'=>'required',
                'holder_name'=>'required',
                'branch_add' =>'required',
                 

            ]);
        
            $input = $request->all();
                
            $CompanyBank->update($input);
          
            return redirect()->route('banks.index')
                            ->with('success','CompanyBank updated successfully');
        }
        public function changeStatus(Request $request)
    {
        $bank = CompanyBank::find($request->bank_id);
        
        $bank->status = $request->status;
        $bank->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function banklist(){
      
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://sit.paysprint.in/service-api/api/v1/service/aeps/banklist/index",// your preferred url
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
          
            CURLOPT_HTTPHEADER => array(
                // Set here requred headers
                "Token: 'UFMwMDg0NWRiNTdjOGI4NDhmM2VhMTIyMWJlZTM0ZGFkNjljM2U2'",
                "accept-language: en-US,en;q=0.8",
                "content-type: application/json",
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
          print_r(json_decode($response));
        }
    }
    
}
