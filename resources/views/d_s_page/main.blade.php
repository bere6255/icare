<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Welcome to Ecare</h4>

       </div>
   </div>
</div>

<div class="container-fluid"><!-- ============================================================== -->
<!-- Sales Cards  -->
<!-- ============================================================== -->
<div class="row">
    <!-- Column -->
    @if(count($account)>0)
        @foreach($account->all() as $account)
    <div class="col-md-8 col-lg-8 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i>₦ {{$account->aver_balance}}</i></h1>
                <h6 class="text-white">Available Balance</h6>
            </div>
        </div>
    </div>


    <div class="col-md-4 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-primary text-center">
                <h1 class="font-light text-white"><i>₦ {{$account->poten_balance}}</i></h1>
                <h6 class="text-white">Potential Balance</h6>
            </div>
        </div>
    </div>
    @endforeach
@endif
    <!-- Column -->

                        <div class="col-md-8 col-lg-8 col-xlg-3">
                          <div class="card">
                                <div class="card-body">
                                  <a href="/doctors_booking"  <h5 class="card-title m-b-0">Booking Request</h5></a>
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
                                            @if($bookings->status != "rejected")
                                          <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                        <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -204px, 0px);">

                                          @if($bookings->status != "accepted")
                                          <form method="post" enctype="form-data" action="/booking_accept">
                                            @csrf
                                            <input type="hidden" name="booking_id" value="{{$bookings->request_ID}}"/>
                                          <button class="dropdown-item text-warning">Accept</button>
                                          </form>
                                          <form method="post" enctype="form-data" action="/booking_reject">
                                            @csrf
                                            <input type="hidden" name="booking_id" value="{{$bookings->request_ID}}"/>
                                          <button class="dropdown-item text-danger">Reject</button>
                                          </form>
                                          @else
                                          <a class="dropdown-item text-primary" href="d_prescribtions?booking_id={{$bookings->request_ID}}">Prescrib</a>
                                          <a class="dropdown-item text-secondry" href="/seekers_details?ID={{$bookings->request_ID}}">View details</a>
                                          <a class="dropdown-item text-success" href="#">complated</a>
                                          @endif

                                          </div>
                                          </div>
                                        @endif
                                        </td>
                                        </tr>

                                        @endforeach
                                        @endif
                                      </tbody>
                                </table>
                            </div>
                          </div>

                          <div class="col-md-4 col-lg-4 col-xlg-3">
                            <div class="card">
                                <div class="card-body">
                                <a href="/transaction_hys"    <h5 class="card-title m-b-0">Transaction History</h5></a>
                                </div>
                                <table class="table">
                                      <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @if(count($acc_hys)>0)
                                        @foreach($acc_hys->all() as $acc_hys)
                                        <tr>
                                          <td>{{$acc_hys->transaction_ID}}</td>
                                          <td>{{$acc_hys->amount}}</td>
                                          @if($acc_hys->status=="successful")
                                          <td class="text-success">successful</td>
                                          @elseif($acc_hys->status=="processing")
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



</div>
