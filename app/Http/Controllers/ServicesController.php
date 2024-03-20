<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;

class ServicesController extends Controller
{
    public function add_service(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_name' => 'required|string',
            'service_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $data = $request->only(['service_name']); // Extract only allowed fields

        if ($request->hasFile('service_image')) {
            $serviceImage = $request->file('service_image');
            $serviceImageName = date('YmdHis') . '_' . uniqid() . '.' . $serviceImage->getClientOriginalExtension();
            $serviceImage->move(public_path('upload'), $serviceImageName);
            $data['service_image'] = 'upload/' . $serviceImageName;
        }

        $data['status'] = 1;

        Service::create($data);
        return response()->json(['success' => 'Service Added Successfully!']);
    }
    public function get_services(){
        $data = Service::all();
        return response()->json($data);
    }
}
