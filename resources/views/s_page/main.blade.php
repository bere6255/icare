<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Hello there,welcome to Ecare.</h4>

       </div>
   </div>
</div>

<div class="container-fluid">
@if(Auth::user()->activation=="activated")
@if(Auth::user()->subscribtion=="noo")
  <div class="row row-cards row-deck">
    <div class="col-sm-6 col-xl-6">
      <div class="card">
        <a href="#"><img class="card-img-top" src="/img/seeker.jpg"></a>
        <div class="card-body d-flex flex-column">
          <h4>Seekers</h4><a href="/seekers_create" class="btn btn-primary">Click here for Seeker</a>
          <div class="text-muted"></div>
          <div class="d-flex align-items-center pt-5 mt-auto">
            <div>
              <small class="d-block text-muted">Looking to consult with a medical professional privately,at your convenience and at anytime? Then signup here.</small>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-6 col-xl-6">
      <div class="card">
        <img class="card-img-top" src="/img/Provider.jpg" >
        <div class="card-body d-flex flex-column">
          <h4>Providers</h4><a class="btn btn-warning" href="/provider_create">Click here to become a Provider</a>
          <div class="text-muted"></div>
          <div class="d-flex align-items-center pt-5 mt-auto">
            <div>
              <small class="d-block text-muted">You can reach more patients beyond the hospital walls.The world needs you, join us and do more good'</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@else
<div class="row">
    <!-- Column -->
    @if(count($sub)>0)
        @foreach($sub->all() as $sub)
    <div class="col-md-6 col-lg-6 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i> {{$sub->unit}}</i></h1>
                <h6 class="text-white">Available Unit</h6>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-6 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i>STANDARD</i></h1>
                <h6 class="text-white">Subscription</h6>
            </div>
        </div>
    </div>
@endforeach
@endif
    <!-- Column -->


    <div class="col-md-4 col-lg-4 col-xlg-3">
      <div class="card">
            <div class="card-body">
              <a href="/s_transec_hys">  <h5 class="card-title m-b-0">Subcribtion History</h5></a>
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
                  <a href="/seeker_viewbook"><h5 class="card-title m-b-0">My Bookings</h5></a>
              </div>
              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Reason</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(count($booking)>0)
                      @foreach($booking->all() as $bookings)
                      <tr>
                        <td>{{$bookings->request_ID}}</td>
                        <td>{{$bookings->name}}</td>
                        <td>{{$bookings->reason}}</td>
                        @if($bookings->status=="successful")
                        <td class="text-success">successful</td>
                        @elseif($bookings->status=="processing")
                        <td class="text-primary">processing</td>
                        @elseif($bookings->status=="accepted")
                        <td class="text-info">accepted</td>
                        @else
                        <td class="text-danger">Cancled</td>
                        @endif
                        <td>
                          @if($bookings->status !="processing")
                            @if($bookings->status !="rejected")
                          <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                        <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -204px, 0px);">
                          <a class="dropdown-item text-primary" href="s_prescribtions?booking_id={{$bookings->request_ID}}">Prescribtion</a>
                          <a class="dropdown-item text-success" href="#">complated</a>
                        </div>
                          </div>
                          @endif
                          @endif
                        </td>
                      </tr>

                      @endforeach
                      @endif
                    </tbody>
              </table>
          </div>
        </div>



</div>

@endif




@else

  <div class="col-sm-12 col-xl-12 text-center">
    <div class="card">
          <div class="card-body">
<div role="alert">
    <h4 class="alert-heading">Hello there,welcome to Ecare.</h4>
    <p> Get the best medical advice at your convenience-anywhere you are, anytime you want.</p>
    <hr>

    <p class="mb-0">Activation link has been sent to your email</p>

    <form method="post" enctype="form-data" action="/resend_activate" >
      {{ csrf_field() }}
      <button class="btn badge-pill btn-primary">CLICK HERE TO RESEND</button>
    </form>
</div>
</div>
</div>
</div>
@endif
