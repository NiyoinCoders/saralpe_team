@extends("layouts.app")
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
                       @php 
                       $users=DB::table('users')->where('name' , Auth::user()->name)->get();
                       @endphp
                       @foreach($users as $user)
                       <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                          <h4 class="me-2 h4">{{$user->name}}</h4>
                          <span> - Retailer</span>
                       </div>
                       @endforeach
                    </div>
                    <ul class="d-flex nav nav-pills mb-0 text-center profile-tab nav-slider" data-toggle="slider-tab" id="profile-pills-tab" role="tablist">
                       
                       <li class="nav-item" role="presentation">
                          <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab" aria-selected="false" tabindex="-1" style="color: white;">Profile</a>
                       </li>
                 </div>
              </div>
         </div>
      </div>
       
        <div class="card">
           <div class="card-header">
              <div class="header-title">
                 <h4 class="card-title">About User</h4>
              </div>
           </div>
           @foreach($users as $user)
           <div class="card-body">
              <div class="user-bio">
                 <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.</p>
              </div>
              <div class="mt-2">
              <h6 class="mb-1">Joined:</h6>
              <p>{{$user->created_at}}</p>
              </div>
              <div class="mt-2">
              <h6 class="mb-1">Lives:</h6>
              <p>{{$user->address}}</p>
              </div>
              <div class="mt-2">
              <h6 class="mb-1">Email:</h6>
              <p><a href="#" class="text-body"> {{$user->email}}</a></p>
              </div>
              
              <div class="mt-2">
              <h6 class="mb-1">Contact:</h6>
              <p><a href="#" class="text-body">{{$user->mobile}}</a></p>
              </div>
           </div>
           @endforeach
        </div>
     </div>
</div>
@endsection