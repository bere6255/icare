<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Welcome to iCare</h4>

       </div>
   </div>
</div>

<div class="container-fluid">

<!-- ============================================================== -->
<!-- Doctors form Cards  -->
<!-- ============================================================== -->

<div class="col-lg-12">
  <form class="card" method="post" enctype="multipart/form-data" action="/provider_request">
    @csrf
    <div class="card-body">
      <h3 class="card-title">Doctors Profile Update/ Request</h3>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <select id="title" name="title" class="form-control custom-select">
              <option value="Dr">Dr</option>
              <option value="Pr">Pr</option>
            </select>
          </div>
          <div class="input-group">
            @if ($errors->has('title'))
                <span class="btn table-danger">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="spec" class="form-label">Specialty</label>
            <select id="spec" name="specialty" class="form-control custom-select">
              <option value="Dr">Dr</option>
              <option value="Pr">Pr</option>
            </select>

          </div>
          <div class="input-group">
            @if ($errors->has('specialty'))
                <span class="btn table-danger">
                    <strong>{{ $errors->first('specialty') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="col-sm-6 col-md-5">
          <div class="form-group">
            <label for="firt" class="form-label">First Name</label>
            <input id="firt" name="first_name" type="text" class="form-control" placeholder="Company" required="true">
          </div>
          <div class="input-group">
            @if ($errors->has('first_name'))
                <span class="btn table-danger">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
            <label for="last" class="form-label">Last Name</label>
            <input id="last" name="last_name" type="text" class="form-control" placeholder="Last Name" required="true">
          </div>
          <div class="input-group">
            @if ($errors->has('last_name'))
                <span class="btn table-danger">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
            <label for="phone" class="form-label">Phone</label>
            <input id="phone" name="phone" type="number" class="form-control" placeholder="phone" required="true">
          </div>
          <div class="input-group">
            @if ($errors->has('phone'))
                <span class="btn table-danger">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="add" class="form-label">Address</label>
            <input id="add" name="address" type="text" class="form-control" placeholder="Home Address" required="true">
          </div>
          <div class="input-group">
            @if ($errors->has('address'))
                <span class="btn table-danger">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }} ">
            <label for="country" class="form-label">Country</label>

              <div class="input-group">
                <select id="country" name="country" onchange="ajax_call();" name="country" class="form-control" required="true">
                  <option value="">please select catigory</option>
                  @if(count($country)>0)
                      @foreach($country->all() as $country)
                        <option value="{{$country->name}}">{{$country->	name}}</option>
                      @endforeach
                  @endif
                </select>
              </div>
              <div class="input-group">
                @if ($errors->has('country'))
                    <span class="btn table-danger">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                @endif
              </div>

          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }} ">
            <label for="state" class="form-label">State</label>

              <div class="input-group">
                <div id="retriv" class="input-group">
                <select id="state"  name="state" class="form-control" required="true">

                    <option value="">please select state</option>
                </select>

              </div>
              <div class="input-group">
                @if ($errors->has('state'))
                    <span class="btn table-danger">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group mb-0">
            <label for="about" class="form-label">About Me</label>
            <textarea id="about" name="about" rows="5" class="form-control" placeholder=" About your self" required="true"></textarea>
          </div>
          <div class="input-group">
            @if ($errors->has('about'))
                <span class="btn table-danger">
                    <strong>{{ $errors->first('about') }}</strong>
                </span>
            @endif
          </div>
        </div>

      </div>
    </div>
    <div class="card-footer text-right">
      <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
  </form>
</div>

<!-- ============================================================== -->
<!-- Doctors form Cards  -->
<!-- ============================================================== -->




</div>
