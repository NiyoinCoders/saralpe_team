@extends("layouts.app")
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css"/>
@endsection
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div id="profile-profile" class="tab-pane fade active show" role="tabpanel">
      <div class="col-lg-12">
         <div class="card">
              <div class="card-body">
                 <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="d-flex flex-wrap align-items-center">
                       <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                          <img src="../../assets/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_1.png" alt="User-Profile" class="theme-color-purple-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_2.png" alt="User-Profile" class="theme-color-blue-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_4.png" alt="User-Profile" class="theme-color-green-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_5.png" alt="User-Profile" class="theme-color-yellow-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_3.png" alt="User-Profile" class="theme-color-pink-img img-fluid rounded-pill avatar-100">
                       </div>
                       
                      
                       <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                          <h4 class="me-2 h4">Ekyc Exel Export</h4>
                          <span> </span>
                       </div>
                       
                    </div>
                   
                 </div>
              </div>
         </div>
      </div>

      <div class="card">
         <div class="card-header d-flex justify-content-between">
             <div class="header-title">
                 <h4 class="card-title">Payout History</h4>
                 <hr>
             </div>
         </div>
         
         <table  id="example" class="display responsive nowrap" style="width:100%">
             <thead>
                <tr>
                   <th>Firmname.</th>
                   <th>Pannumber.</th>
                   <th>Pincode.</th>
                   <th>Dob.</th>
                   <th>State Id</th>
                   <th>Pan Image.</th>
                   <th>Voter Front.</th>
                   <th>Voter Back.</th>
                   <th>Driving Front.</th>
                   <th>Driving Back.</th>
                   <th>Shopaddress.</th>
                   
                </tr>
             </thead>
             @foreach($data as $dat)
             <tbody>
   
                <tr>
                 <td>
                     <div class="d-flex align-items-center">
                         <h6>{{$dat->firmname}}</h6>
                     </div>
                  </td>
                  <td>
                     <div class="d-flex align-items-center">
                         <h6>{{$dat->pannumber}}</h6>
                     </div>
                  </td>
                  <td>
                     <div class="d-flex align-items-center">
                         <h6>{{$dat->pincode}}</h6>
                     </div>
                  </td>
                  <td>
                     <div class="d-flex align-items-center">
                         <h6>{{$dat->dob}}</h6>
                     </div>
                  </td>
                  <td>
                     <div class="d-flex align-items-center">
                         <h6>{{$dat->stateid}}</h6>
                     </div>
                  </td>
                  <td>
                     <div class="d-flex align-items-center">
                         <h6>{{$dat->pan_image}}</h6>
                     </div>
                  </td>
                   <td>
                      <div class="d-flex align-items-center">
                          <h6>{{$dat->voter_front}}</h6>
                      </div>
                   </td>
                   <td>
                      <div class="iq-media-group iq-media-group-1">
                         <h6>{{$dat->voter_back}}</h6>
                     </div>
                   </td>
   
                   <td><h6>{{$dat->driving_front}}</h6></td>
   
                   <td><h6>{{$dat->driving_back}}</h6></td>
                   
                   <td>
                       <h6>{{$dat->shopaddress}}</h6>                   </td>
                   
                </tr>
                
             </tbody>
             @endforeach
          </table>
          
     </div>
   
      
      <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-primary" href="{{route('exportexel')}}">Export</a>
      </div>
      
    </div>
    </div>
@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'colvis'
        ]
    } );
} );
 </script>
@endsection
    
      
      @endsection