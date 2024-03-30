@extends('layouts.app')
@section('title', 'Recharge Prepaid')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h5 class="card-title">DTH Mobile Recharge</h5>
                            </div>
                        </div>
                        <div class="card-body">

                            <form class="recharge_form"  method="POST"
                                action="{{ route('dth-form') }}">
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Operator:</label>
                                    <select class="form-select mb-3 shadow-none" name="operator">
                                        <option selected="" value="">Select Your Operator</option>
                                        @foreach ($operators as $operator)
                                           
                                                <option value="{{ $operator->operator_code }}">{{ $operator->operator_name }}</option>
                                          
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Circle:</label>
                                    <select class="form-select mb-3 shadow-none" name="Circle" id="circle">

                                           
                                    <option selected="" value="">Select Your circle</option>
                                        - @foreach ($circles as $circle)
                                            
                                                <option value="{{ $circle->circle_code }}">{{ $circle->circle_state	}}</option>
                                            
                                        @endforeach
                                       
                                    

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="customer_id">Customer ID:</label>
                                    <input type="text" class="form-control" id="customer_id" name="customer_id">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Recharge Amount:</label>
                                    <input type="number" class="form-control" id="amount" name="amount">
                                </div>
                                <button type="submit" class="btn btn-outline-primary rounded-pill btn-sbmit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h5 class="card-title">DTH Recharge Plans</h5>
                            </div>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('status'))
    @if (session('status')->response_code == 1)

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Success</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="hide()"></button>
            </div>
            <div class="modal-body" id="divToPrint">
                <div class="alerts">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')->message }}
                    </div>

                @endif
                </div>
                <div class="table-responsive">
                    <table id="rechage-data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="re_td_head">Reference Id</th>
                                <th class="re_td_head">Ackno </th>
                                <th class="re_td_head">operatorid </th>
                            </tr>
                        </thead>
                        <tbody>
                           <td>{{ session('status')->refid }}</td>
                           <td>{{ session('status')->ackno }}</td>
                           <td>{{ session('status')->operatorid }}</td>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="PrintDiv();">Print</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

              </div>

          </div>
        </div>
      </div>

      <!-- Button trigger modal -->
<button type="button" id="btnclick" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display: none;">
    Launch demo modal
  </button>

  <script>
    $(document).ready(function(){

        $("#btnclick").click();

    });
    </script>

    @endif
    @endif



    <script type="text/javascript">
        function PrintDiv() {
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'height=400,width=800');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
@endsection
