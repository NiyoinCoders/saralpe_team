<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use Illuminate\Support\Facades\File;

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
    public function get_services()
    {
        $data = Service::all();
        return response()->json($data);
    }
    public function edit_service(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_name' => 'required|string',
            'service_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $service = Service::findOrFail($request->service_id);

        $data = $request->only(['service_name']);

        if ($request->hasFile('service_image')) {

            if (File::exists(public_path($request->old_service_imagePath))) {
                File::delete(public_path($request->old_service_imagePath));
            }

            $serviceImage = $request->file('service_image');
            $serviceImageName = date('YmdHis') . '_' . uniqid() . '.' . $serviceImage->getClientOriginalExtension();
            $serviceImage->move(public_path('upload'), $serviceImageName);
            $data['service_image'] = 'upload/' . $serviceImageName;
        }

        $service->update($data);

        return response()->json(['success' => 'Service Updated Successfully!'], 200);
    }
    public function Fetch_serviceByID(Request $request)
    {
        $data = Service::findOrFail($request->id);
        return response($data);
    }
    public function Delete_serviceByID(Request $request)
    {
        $data = Service::findOrFail($request->id);
        if (File::exists(public_path($data->service_image))) {
            File::delete(public_path($data->service_image));
        }
        $data->delete();
        return response()->json(['success' => 'Service Deleted Successfully!'], 200);
    }
    public function serviceStatusChange(Request $request)
    {
        $service = Service::findOrFail($request->id);
        $data['status'] = $request->value;
        $service->update($data);
        return response()->json(['success' => 'Service Status Updated Successfully!'], 200);
    }
}
