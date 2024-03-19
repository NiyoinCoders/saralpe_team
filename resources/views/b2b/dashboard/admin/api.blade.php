@extends('layouts.app')
@section('content')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h5 class="card-title">Api Tokens</h5>
                        </div>
                    </div>
                    <div class="card-body">

                        @if (\Session::has('msg'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
@endif

                        <form class="recharge_form"  method="POST"
                            action="{{ route('admin.apistore') }}">
                            @csrf



                            <div class="form-group">
                                <label class="form-label" for="customer_id">Instant Id</label>
                                <input type="text" class="form-control" id="instant_id" name="instant_id">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Api Token</label>
                                <input type="number" class="form-control" id="amount" name="token">
                            </div>

                            <div class="form-group">
                                <label for="account-type">Select Status <span class="text-danger">*</span></label>
                                <select name="status" required id="account-type" class="form-control">
                                    <option value="">-- Choose --</option>
                                    <option value="primary">Primary</option>
                                    <option value="secondry">Secondry</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-primary rounded-pill btn-sbmit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-lg-7">
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Apis</h4>
                            <hr>
                        </div>
                    </div>

                    <table  id="example" class="display responsive nowrap border" style="width:100%">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>Instant Id.</th>
                              <th>Token.</th>
                              <th>Status.</th>
                              <th>Action.</th>


                           </tr>
                        </thead>
                        @foreach($result as $dat)
                        <tbody>

                           <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <h6>{{$dat->id}}</h6>
                                </div>
                             </td>
                             <td>
                                <div class="d-flex align-items-center">
                                    <h6>{{$dat->instant_id}}</h6>
                                </div>
                             </td>
                             <td>
                                <div class="d-flex align-items-center">
                                    <h6>{{$dat->tokens}}</h6>
                                </div>
                             </td>
                             <td>
                                <div class="d-flex align-items-center">
                                    <h6>{{$dat->status}}</h6>
                                </div>
                             </td>
                             <td>
                                <div class="d-flex align-items-center">
                                    <h6>                    <a href="{{ route('admin.apidestroy', ['id' => $dat->id]) }}">        <button type="submit" class="btn btn-outline-primary rounded-pill btn-sbmit">Delete</button></a>
                                    </h6>
                                </div>
                             </td>

                           </tr>

                        </tbody>
                        @endforeach
                     </table>

                </div>


        </div></div></div>

@endsection
