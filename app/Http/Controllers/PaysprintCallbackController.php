<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PaysprintCallback;

class PaysprintCallbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $operator = $request['param']['operator'];
        $operator = $request['param'];
        $json = json_encode($operator);
        $formData = new PaysprintCallback;
        $formData->callback_status =   $request['event'];
        $formData->callback_data =  $json;
        $formData->save();
       // echo "Data Inserted Thank You!";
       return response()->json([
        'status' => 200,
        'message' => 'Transaction completed successfully'
    ]);
    }

    public function next()
    {

        $data = file_get_contents('php://input');
        $decode_data = json_decode($data);

         $decode_data;
        return response()->json([
            'status' => 200,
            'message' => 'Transaction completed successfully'
        ]);
    }


}
