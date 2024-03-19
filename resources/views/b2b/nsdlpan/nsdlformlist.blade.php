@extends("layouts.app")
@section("title","Dashboard")
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
                <div class="card-body">
                   <div class="d-flex flex-wrap align-items-center justify-content-between">
                      <div class="d-flex flex-wrap align-items-center">

                         <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                            <h4 class="me-2 h4">Online Pan List</h4>
                            <span> - Nsdl </span>
                         </div>
                      </div>
                   </div>
                </div>
           </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Nsdl Pan Card List</h4>
                  </div>
               </div>
               <div class="card-body p-0"> 
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                  <div class="table-responsive mt-4">
                     <table id="basic-table" class="table table-striped mb-0" role="grid">
                        <thead>
                           <tr>
                              <th>refid.</th>
                              <th>Name.</th>
                              <th>Mobile No.</th>
                              <th>Apply Date.</th>
                              <th>Nsdl.</th>
                              <th>Status.</th>
                              <th>Tran Status.</th>
                           </tr>
                        </thead>
                        <tbody>
                          @php
                            $count= 1;
                            @endphp
                            @foreach($nsdplpan as $nsdplpans)
                           <form method="post" action="{{$nsdplpans->redirect_url}}">
                           <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <h6>{{$nsdplpans->refid}}</h6>
                                </div>
                             </td>
                              <td>
                                 <div class="d-flex align-items-center">
                                     <h6>{{$nsdplpans->firstname .' '. $nsdplpans->middlename .' '. $nsdplpans->lastname}}</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <h6>+91 {{$nsdplpans->number}}</h6>
                                </div>
                              </td>

                              <td><h6>{{ $nsdplpans->created_at->format('d-m-Y') }}</h6></td>
                              <!--<td><a href="/retailer/nsdl/callapi/{{$nsdplpans->id}}" class="btn btn-outline-primary" value="{{$nsdplpans->id}}">Click Me</a>-->
                               
                              
                                  <textarea name="encdata" style="display:none">{{$nsdplpans->json_response}}</textarea>
                                 <td><input type="submit"  class="btn btn-outline-primary" value="Submit"></td> 
                              </td>
                              <td>
                                <a href="/retailer/nsdl/callapi/{{$nsdplpans->refid}}" value="{{$nsdplpans->refid}}"  class="btn btn-outline-primary">Status</a>
                              </td>
                              <td>
                                <a href="/retailer/nsdl/nsdplpanstransstatus/{{$nsdplpans->refid}}" value="{{$nsdplpans->refid}}"  class="btn btn-outline-primary">Status</a>
                              </td>
                               </form>
                           </tr>
                           
                         @php
                        $count++;
                        @endphp
                        @endforeach 
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>

    </div>



 </div>
<div class="btn-download">
    <script src="//code.tidio.co/x9hq0z58q9jmqff4qm3hnztgps6npbak.js" async></script>
</div>
@endsection
