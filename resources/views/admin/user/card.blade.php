@extends("layouts.app")
@section("content")
<main>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
      <div class="row">
        <div class="col-lg-12 rounded">
          <div class="card   rounded">
            <p class="bg-primary text-light p-3"
              style="color: white !important; font-size: 22px; border-radius: 10px 10px 0px 0px;"><b>View KYC
                Details</b></p>
            <div class="card-body">
              <div class="row">

                <hr class="colored-line">
              </div>
              <h4 class="text-center text-primary">KYC has been verfied successfully</h4>

              <!-- table kyc start -->
              <div class="table-responsive">
                <table class="table mt-4">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Information Type</th>
                      <th scope="col">Details</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>User Id</td>
                      <td>SMARToo1950</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Name</td>
                      <td>Rahul Raikwar</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Mobile</td>
                      <td>9301777615</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Firm Name</td>
                      <td>Rahul Raikwar</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Adhar No</td>
                      <td>690266307358</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Pan No</td>
                      <td>ESPPR0682J</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Adhar Front</td>
                      <td><button type="button" class="btn btn-light">View</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Adhar Back</td>
                      <td><button type="button" class="btn btn-light">View</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Pan Card</td>
                      <td><button type="button" class="btn btn-light">View</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td>Photo</td>
                      <td><button type="button" class="btn btn-light">View</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">11</th>
                      <td>Bank Passbook</td>
                      <td><button type="button" class="btn btn-light">View</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- tabel kyc end -->
            </div>
            <!-- table ends -->
          </div>
        </div>
      </div>
    </div>
    <!-- main content end here  -->


  </main>
@endsection