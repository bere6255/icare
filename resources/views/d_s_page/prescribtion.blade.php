<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h2 class="page-title">Prescriptions</h2>

       </div>
   </div>
</div>

<div class="container-fluid">

  <div class="col-lg-12">
    <form class="card" method="post" enctype="multipart/form-data" action="/prescrib0547">
      @csrf
      <div class="card-body">
        <h3 class="card-title">Prescriptions</h3>
        @if (session('prescrib'))
                <h4 class="btn-success ">{{ session('prescrib') }}</h4>
        @endif
        <div class="row">
          <div class="col-sm-6 col-md-5">
            <div class="form-group">
              <label for="booking_id" class="form-label">Booking ID</label>
              <select id="booking_id" name="booking_id" class="form-control custom-select">
                <option value="{{$booking}}">{{$booking}}</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exam" class="form-label">Examination</label>
              <input id="exam" name="exam" type="text" class="form-control" placeholder="Examination" required="true">
            </div>
            <div class="input-group">
              @if ($errors->has('exam'))
                  <span class="btn table-danger">
                      <strong>{{ $errors->first('exam') }}</strong>
                  </span>
              @endif
            </div>
          </div>


            <div class="col-sm-6 col-md-4">
              <div class="form-group">
                  <input type="file" name="file_1" class="form-control" required>

                </div>
              <div class="input-group">
                @if ($errors->has('file_1'))
                    <span class="btn table-danger">
                        <strong>{{ $errors->first('file_1') }}</strong>
                    </span>
                @endif
              </div>
            </div>

          <div class="col-md-12">
            <div class="form-group mb-0">
              <label for="comment" class="form-label">providers Comment</label>
              <textarea id="comment" name="comment" rows="5" class="form-control" placeholder=" About your self" required="true"></textarea>
            </div>
            <div class="input-group">
              @if ($errors->has('comment'))
                  <span class="btn table-danger">
                      <strong>{{ $errors->first('comment') }}</strong>
                  </span>
              @endif
            </div>
          </div>

        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">prescrib</button>
      </div>
    </form>
  </div>
