<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h2 class="page-title">My Profile</h2>

       </div>
   </div>
</div>

<div class="container-fluid">

  <div class="row">
                  @if($seeker[0]->first_name=="noo" && $seeker[0]->last_name=="noo")
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="/update_sprofile">
                              @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 text-center control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" required>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('title'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('title') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-center control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('fname'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('fname') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-center control-label col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name " required>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('lname'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('lname') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 text-center control-label col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="phone" class="form-control" id="phone" placeholder="phone or mobile">
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('phone'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('phone') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bg" class="col-sm-3 text-center control-label col-form-label">Blood Group</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="bg" id="bg" placeholder="Enter Blood Group" required>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('bg'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('bg') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="genotype" class="col-sm-3 text-center control-label col-form-label">Genotype</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="genotype" id="genotype" placeholder="Enter Genotype" required>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('genotype'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('genotype') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="age" class="col-sm-3 text-center control-label col-form-label">Age</label>
                                        <div class="col-sm-5">
                                            <input type="number" class="form-control" name="age" id="age" placeholder="Enter Blood Group" required>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('age'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('age') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                        <label class="col-md-2 text-center">Gender</label>
                                        <div class="col-md-1">
                                            <div >
                                                <input type="radio"  name="gen" value="male" required>
                                                <label  >M</label>
                                            </div>
                                             <div >
                                                <input type="radio"  name="gen" value="female"  required>
                                                <label  >F</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('gen'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('gen') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="weigh" class="col-sm-3 text-center control-label col-form-label">Weigh Kg</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="weigh" id="weigh" placeholder="Enter Weigh" required>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('weigh'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('weigh') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="allergic" class="col-sm-3 text-center control-label col-form-label">Allergic</label>
                                        <div class="col-sm-9">
                                            <textarea id="allergic" name="allergic" class="form-control"></textarea>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('allergic'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('allergic') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-center">Asthmatic</label>
                                        <div class="col-md-1">
                                            <div >
                                                <input type="radio"  name="asthmatic" value="No" required>
                                                <label  >No</label>
                                            </div>
                                             <div >
                                                <input type="radio" name="asthmatic" value="Yes"  required>
                                                <label  >Yes</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('asthmatic'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('asthmatic') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                        <label class="col-md-2 text-center">Epileptic</label>
                                        <div class="col-md-1">
                                            <div >
                                                <input type="radio"  name="epileptic" value="No" required>
                                                <label  >No</label>
                                            </div>
                                             <div >
                                                <input type="radio"  name="epileptic" value="Yes"  required>
                                                <label  >Yes</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('epileptic'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('epileptic') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                        <label class="col-md-2 text-center">Operation</label>
                                        <div class="col-md-1">
                                            <div >
                                                <input type="radio" name="operation" value="No" required>
                                                <label  >No</label>
                                            </div>
                                             <div >
                                                <input type="radio" name="operation" value="Yes"  required>
                                                <label  >Yes</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('operation'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('operation') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="img" class="col-md-3 text-center">Profile Picture</label>
                                        <div class="col-md-9">
                                            <div>
                                                <input type="file" name="img"  class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>



                    </div>
                    @else
                    <div class="col-md-4">
                        <div class="card">

                            <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="e4071a77-bce3-4f39-a292-a58fd85225f1">
                              <div class="text-center"><img src="{{Storage::url($seeker[0]->img)}}" alt="user" width="75%" class="rounded-circle"></div>
                                <h3 class="font-medium text-center">{{$seeker[0]->title}} {{$seeker[0]->first_name}} {{$seeker[0]->last_name}}</h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Profile Details</h5>
                                <a href="/update_sprofile" class="btn btn-cyan btn-sm float-right">Edit</a>
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
                                        <td>Gender</td>
                                        <td>{{$seeker[0]->gender}}</td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>{{$seeker[0]->age}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>{{$seeker[0]->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Blood Group</td>
                                        <td>{{$seeker[0]->blood_group}}</td>
                                    </tr>
                                    <tr>
                                        <td>Genotype</td>
                                        <td>{{$seeker[0]->genotype}}</td>
                                    </tr>
                                    <tr>
                                        <td>Asthmatic</td>
                                        <td>{{$seeker[0]->asthmatic}}</td>
                                    </tr>
                                    <tr>
                                        <td>Epileptic</td>
                                        <td>{{$seeker[0]->epileptic}}</td>
                                    </tr>
                                    <tr>
                                        <td>Operation</td>
                                        <td>{{$seeker[0]->operation}}</td>
                                    </tr>
                                    <tr>
                                        <td>Allergic</td>
                                        <td>{{$seeker[0]->allergic}}</td>
                                    </tr>
                                    <tr>
                                        <td>Weigh</td>
                                        <td>{{$seeker[0]->weigh}}</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>


                    </div>

                    @endif

                </div>
