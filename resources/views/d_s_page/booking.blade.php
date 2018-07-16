<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h2 class="page-title">Bookings</h2>

       </div>
   </div>
</div>

<div class="container-fluid">

  <div class="col-lg-12 col-md-12">
      <!-- Card -->

                          <div class="card">
                              <div class="card-body">
                                  <h4 class="card-title m-b-0">Booking Request</h4>
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
                                      @if(count($booking)>0)
                                      {{$booking->links()}}
                                      @foreach($booking->all() as $bookings)
                                      <tr>
                                        <td>{{$bookings->request_ID}}</td>
                                        <td>{{$bookings->name}}</td>
                                        <td>{{$bookings->reason}}</td>
                                        <td>{{$bookings->note}}</td>
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
                                        <a class="dropdown-item text-primary" href="/doc_prescribtion">Prescrib</a>
                                        <a class="dropdown-item text-secondry" href="#">View details</a>
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
