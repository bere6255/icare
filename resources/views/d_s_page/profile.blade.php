<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h2 class="page-title">My Profile</h2>

       </div>
   </div>
</div>

<div class="container-fluid">

  <div class="row">
    @if($provider[0]->first_name=="" && $provider[0]->last_name=="")
    <div class="col-lg-12">
      <form class="card" method="post" enctype="multipart/form-data" action="/provider_request">
        @csrf
        <div class="card-body">
          <h3 class="card-title">Doctors Profile Update/ Request</h3>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                  <label for="title" class="form-label">Title</label>
                  <input id="title" name="title" type="text" class="form-control" placeholder="Specialization" required="true">
                </div>
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
                <div class="form-group">
                  <label for="spec" class="form-label">Specialty</label>
                  <input id="spec" name="spec" type="text" class="form-control" placeholder="Specialization" required="true">
                </div>

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
            <div class="col-md-6">
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
              <div class="form-group">
                <label for="MDCN" class="form-label">MDCN Number</label>
                <input id="MDCN" name="MDCN" type="text" class="form-control" placeholder="MDCN Folio Number" required="true">
              </div>
              <div class="input-group">
                @if ($errors->has('MDCN'))
                    <span class="btn table-danger">
                        <strong>{{ $errors->first('MDCN') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }} ">
                <label for="country" class="form-label">Country</label>

                  <div class="input-group">
                    <select id="country" name="country" onchange="ajax_call();" class="form-control" required="true">
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

            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for="last" class="form-label">Profile Picture</label>
                <input id="img" name="img" type="file" class="form-control" required="true">
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for="last" class="form-label">MDCN License</label>
                <input id="MDCN_L" name="MDCN_L" type="file" class="form-control" required="true">
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
    @else

    <div class="col-md-4">
        <div class="card">

            <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="e4071a77-bce3-4f39-a292-a58fd85225f1">
              <div class="text-center"><img src="{{Storage::url($provider[0]->img)}}" alt="user" width="75%" class="rounded-circle"></div>
                <h3 class="font-medium text-center">{{$provider[0]->title}} {{$provider[0]->first_name}} {{$provider[0]->last_name}}</h3>
            </div>
        </div>

    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Profile Details</h5>
                <a href="/update_dprofile" class="btn btn-cyan btn-sm float-right">Edit</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Specialization</td>
                        <td>{{$provider[0]->specialty}}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{$provider[0]->phone}}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{$provider[0]->address}}</td>
                    </tr>
                    <tr>
                        <td>MDCN</td>
                        <td>{{$provider[0]->mdcn}}</td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td>{{$provider[0]->country}}</td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td>{{$provider[0]->state}}</td>
                    </tr>
                    <tr>
                        <td>About</td>
                        <td>{{$provider[0]->about}}</td>
                    </tr>

                </tbody>
            </table>
        </div>


    </div>

    @endif

  </div>
