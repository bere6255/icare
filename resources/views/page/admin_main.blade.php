<div class="container">
    <div class="d-flex">

<div class="col-lg-4">
    <div class="card">
                <div class="card-header">
                  <h3 class="card-title">invioce not working foe now</h3>
                </div>
                <div class="card-body">
                  @if (session('post_info'))
                      <span class="btn btn-success">
                          <strong>{{ session('post_info') }}</strong>
                      </span>
                  @endif
                  <form name="aticle_form" role="form" method="post" action="" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="writer_name" class="form-label">Writers Full Name</label>
                          <input type="text" id="writer_name" name="writer_name" class="form-control" placeholder="Enter writers full Name">
                        </div>
                        <div class="input-group">
                          @if ($errors->has('writer_name'))
                              <span class="btn table-danger">
                                  <strong>{{ $errors->first('writer_name') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="post_title" class="form-label">Post Title</label>
                          <input type="text" id="post_title" name="post_title" class="form-control" placeholder="Enter post title">
                        </div>
                        <div class="input-group">
                          @if ($errors->has('post_title'))
                              <span class="btn table-danger">
                                  <strong>{{ $errors->first('post_title') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="post_body" class="form-label">Post Body</label>
                      <textarea id="post_body" name="post_body" class="form-control" rows="5" placeholder="Type the content of the post... not more than 255 characters"></textarea>
                    </div>
                    <div class="input-group">
                      @if ($errors->has('post_body'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('post_body') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="image" class="form-label">Image</label>
                      <input type="file" name="image" class="form-control" placeholder="select an image file place">
                    </div>
                    <div class="input-group">
                      @if ($errors->has('image'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('image') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-footer">
                      <button class="btn btn-primary btn-block">Post Article</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>



            <div class="col-8">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Booking</h3>
                  </div>
                  @if (session('booking_don'))
                      <span class="btn btn-success">
                          <strong>{{ session('booking_don') }}</strong>
                      </span>
                  @endif
                  @if(count($booking)>0)
                  {{ $booking->links() }}
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">Full Name</th>
                          <th>Phone Number</th>
                          <th>Manufacturers</th>
                          <th>Model</th>
                          <th>Year</th>
                          <th>Describtion</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($booking->all() as $booking)
                        <tr>
                          <td><span class="text-muted">{{$booking -> full_name}}</span></td>
                          <td>{{$booking -> phone_number}}</td>
                          <td>
                            {{$booking -> manufacturer}}
                          </td>
                          <td>
                            {{$booking -> model_number}}
                          </td>
                          <td>
                            {{$booking -> year}}
                          </td>
                          <td >
                            {{$booking -> describtion}}
                          </td>
                          @if($booking->Status =="pending")
                          <td>
                            <a class="btn btn-primary btn-sm">Pending</a>
                          </td>
                          @else
                          <td>
                            <a class="btn btn-success btn-sm">Pending</a>
                          </td>
                          @endif
                          <td class="text-right">
                            <a href="" class="btn btn-warning btn-sm">Called</a>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                  @endif
                </div>
              </div>

            </div>
          </div>
