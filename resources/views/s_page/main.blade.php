<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Welcome to iCare</h4>

       </div>
   </div>
</div>

<div class="container-fluid">
@if(Auth::user()->activation=="activated")
@if(Auth::user()->subscribtion=="noo")
  <div class="row row-cards row-deck">
    <div class="col-sm-6 col-xl-6">
      <div class="card">
        <a href="#"><img class="card-img-top" src="/img/01.jpg" ></a>
        <div class="card-body d-flex flex-column">
          <h4>Seekers</h4><a href="/seekers_create" class="btn btn-primary">Click here for Seekers</a>
          <div class="text-muted"></div>
          <div class="d-flex align-items-center pt-5 mt-auto">
            <div>
              <small class="d-block text-muted">Are you looking for a medical profertional to talk to then this is the best place to go, with our
                best and qualify medical expert to give you the bast service expirences</small>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-6 col-xl-6">
      <div class="card">
        <img class="card-img-top" src="/img/14.jpg" >
        <div class="card-body d-flex flex-column">
          <h4>Providers</h4><a class="btn btn-warning" href="/provider_create">Click here to become a Provider</a>
          <div class="text-muted"></div>
          <div class="d-flex align-items-center pt-5 mt-auto">
            <div>
              <small class="d-block text-muted">Are you a medical expert enroll to become a provider
                as we take you true oue world class medical examination and physical, prictical qulification process</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@else
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i> 0</i></h1>
                <h6 class="text-white">Available Unit</h6>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-6 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i>STANDARD</i></h1>
                <h6 class="text-white">subscription</h6>
            </div>
        </div>
    </div>

    <!-- Column -->


    <div class="col-md-4 col-lg-4 col-xlg-3">
      <div class="card">
            <div class="card-body">
              <a href="/s_transec_hys">  <h5 class="card-title m-b-0">Subcribtion Hystry</h5></a>
            </div>
            <table class="table">
                  <thead>
                    <tr>
                      <th >Unit</th>
                      <th >Amount</th>
                      <th >Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($sub_hys)>0)
                    @foreach($sub_hys->all() as $sub_hys)
                    <tr>
                      <td>{{$sub_hys->unit}}</td>
                      <td>{{$sub_hys->amount}}</td>
                      @if($sub_hys->status=="successful")
                      <td class="text-success">successful</td>
                      @elseif($sub_hys->status=="processing")
                      <td class="text-warning">processing</td>
                      @else
                      <td class="text-danger">Cancled</td>
                      @endif
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
            </table>
        </div>
      </div>

      <div class="col-md-8 col-lg-8 col-xlg-3">
        <div class="card">
              <div class="card-body">
                  <h5 class="card-title m-b-0">My Bookings</h5>
              </div>
              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Reason</th>
                        <th scope="col">Note</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>

                    </tbody>
              </table>
          </div>
        </div>



</div>

@endif




@else

  <div class="col-sm-6 col-xl-6 text-center">
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">You are almost done!</h4>
    <p> Welcome to Icare your number one online medical center where we link you with the best doctors and persent all over the world</p>
    <hr>

    <p class="mb-0">An E-mail have been sent to your mail to activate your account.</p>

    <form method="post" enctype="form-data" action="/resend_activate" >
      {{ csrf_field() }}
      <button class="btn btn-block badge-pill btn-warning">click here to resend the mail</button>
    </form>
</div>
</div>
@endif
