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
                  <div class="table-responsive mt-4">
                     <table id="basic-table" class="table table-striped mb-0" role="grid">
                        <thead>
                           <tr>
                              <th>refid.</th>
                              <th>Name.</th>
                              <th>Mobile No.</th>
                              <th>Apply Date.</th>
                              
                              <th>Status.</th>
                              
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <h6>PW85648852</h6>
                                </div>
                             </td>
                              <td>
                                 <div class="d-flex align-items-center">
                                     <h6>Avnish Tiwari</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <h6>+91 7000802198</h6>
                                </div>
                              </td>

                              <td><h6>02/06/2023</h6></td>
                              
                              <td>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Status</button>
                              </td>
                              
                           </tr>
                           
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>

    </div>



 </div>

 <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-right: 625px;">
      <div class="modal-content" style="width: 155%;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table id="basic-table" class="table table-striped mb-0" role="grid">
                <thead>
                   <tr>
                      <th>refid.</th>
                      <th>Name.</th>
                      <th>Mobile No.</th>
                      <th>Apply Date.</th>
                      
                      <th>Status.</th>
                      
                   </tr>
                </thead>
                <tbody>

                   <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <h6>PW85648852</h6>
                        </div>
                     </td>
                      <td>
                         <div class="d-flex align-items-center">
                             <h6>Avnish Tiwari</h6>
                         </div>
                      </td>
                      <td>
                         <div class="iq-media-group iq-media-group-1">
                            <h6>+91 7000802198</h6>
                        </div>
                      </td>

                      <td><h6>02/06/2023</h6></td>
                      
                      <td>
                        gg
                      </td>
                      
                   </tr>
                   
                </tbody>
             </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
  
<div class="btn-download">
    <script src="//code.tidio.co/x9hq0z58q9jmqff4qm3hnztgps6npbak.js" async></script>
</div>
@endsection
