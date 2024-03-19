<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = 'bus/ticket/source';
        $body = [];

        $res = json_decode(ApiController::post($service, $body));
        // dd($res->data->cities);
        if ($res->response_code == 1) {
            $cities = $res->data->cities;
        }

        return view('b2b.bus.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function availabletrips(Request $res)
    {
        $service = 'bus/ticket/availabletrips';
        $body = [
            'source_id' => $res->srcId,
            'destination_id' => $res->destId,
            'date_of_journey' => $res->date,
        ];

        $res = json_decode(ApiController::post($service, $body));
        // dd($res->data->availableTrips);
        if ($res->response_code == 1) {
            $availabletrips = $res->data->availableTrips;
        }

        return view('b2b.bus.availabletrips', compact('availabletrips'));
    }

    public function details($id)
    {
        $service = 'bus/ticket/tripdetails';
        $body = [
            'trip_id' => $id,
        ];

        $res = json_decode(ApiController::post($service, $body));
         dd($res->data);
        if ($res->response_code == 1) {
            $details = $res->data;
        }

        return view('b2b.bus.detail', compact('details'));
    }



    public function bus()
    {
        return view('b2b.bus.bus');
    }

    public function bus_search()
    {
        return view('b2b.bus.bus-search');
    }

    public function busurl()
    {
        $refid1 = $randomNumber = rand(1000000000, 999999999999);
        $myurl = 'https://saralpe.app/';

        // return  $data = [
        //     'refid' => $refid1,
        //     'redirect_url' => $myurl
        // ];

        $jsonData = '{"refid":"885885855585","redirect_url":"https://saralpe.app/"}';

        // Decode the JSON string into an associative array

        // $service = 'balance/balance/cashbalance';
        $service = 'bus/generateurl';

        $body = "$jsonData";
        $res = ApiController::post($service, $body);

        return $res;
    }

    public function bus_form()
    {
        return view('b2b.bus.form');
    }
}
