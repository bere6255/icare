<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h2 class="page-title">Provider Details</h2>

       </div>
   </div>
</div>

<div class="container-fluid">
  @if(count($details)>0)
  @foreach($details->all() as $details)
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-profile">
                  <div class="card-body text-center">
                    <img class="card-profile-img" src="{{Storage::url($details->img)}}">
                    <h3 class="mb-3">{{$details->title}} {{$details->first_name}} {{$details->last_name}}</h3>
                    <p class="mb-4">
                      {{$details->state}}
                    </p>

                  </div>
                </div>


              </div>
              <div class="col-lg-8">
                <div class="card">
                  <ul class="list-group card-list-group">
                    <li class="list-group-item py-5">
                      <div class="media">
                        <div class="media-body">
                          <div class="media-heading">
                            <h5>{{$details->title}} {{$details->first_name}} {{$details->last_name}}</h5>
                          </div>
                          <div>
                            {{$details->about}}
                          </div>

                        </div>
                      </div>
                    </li>
                  </ul>
                </div>

                <div class="card">
                            <form class="form-horizontal" enctype="form-data" method="post" action="/bookings">
                              @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Booking form</h4>
                                    @if (session('booking'))
                    												<h4 class="btn-success ">{{ session('booking') }}</h4>
                    								@endif
                                        <input type="hidden" name="id" value="{{$details->users_id}}">
                                        <input type="hidden" name="name" value="{{$details->first_name}} {{$details->last_name}}">
                                    <div class="form-group row">
                                        <label for="reason" class="col-sm-3 text-right control-label col-form-label">Reason</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="reason" class="form-control" id="reason" placeholder="State the reason for this booking" required="true">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="note" class="col-sm-3 text-right control-label col-form-label">Note</label>
                                        <div class="col-sm-9">
                                            <textarea id="note" name="note" class="form-control" placeholder="Tell about the condition" required="true"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button class="btn btn-primary badge-pill"><span class="fa fa-book"></span> Book Me</button>
                                    </div>
                                </div>
                            </form>
                        </div>

              </div>
            </div>
            @endforeach
          @endif
