<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h2 class="page-title">Compose Message</h2>

       </div>
   </div>
</div>

<div class="container-fluid">

  <div class="col-lg-12 col-md-12">
      <!-- Card -->

                                <h4 class="card-title">Compose Mail</h4>
                                <!-- Create the editor container -->
                              <form method="post" enctype="multipart/form-data" action="/api/pro_mgs">
                                @csrf
                                <div class="card">
                                  <div class="card-body">
                                    <div class="row">

                                      <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <label for="subject" class="form-label">Subject</label>
                                          <input id="subject" name="subject" type="text" class="form-control" placeholder="subject" required="true">
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('subject'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('subject') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group ">
                                          <label for="reciever" class="form-label">Send To</label>

                                            <div class="input-group">
                                              <select id="reciever" name="reciever" class="form-control" required="true">
                                                <option value="">please select reciever</option>
                                                @if(count($reciever)>0)
                                                    @foreach($reciever->all() as $reciever)
                                                      <option value="{{$reciever->request_ID}}">{{$reciever->	name}}</option>
                                                    @endforeach
                                                @endif
                                              </select>
                                            </div>
                                            <div class="input-group">
                                              @if ($errors->has('reciever'))
                                                  <span class="btn table-danger">
                                                      <strong>{{ $errors->first('reciever') }}</strong>
                                                  </span>
                                              @endif
                                            </div>

                                        </div>
                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group mb-0">
                                          <textarea id="msg" name="msg" class="form-control"></textarea>
                                        </div>
                                        <div class="input-group">
                                          @if ($errors->has('msg'))
                                              <span class="btn table-danger">
                                                  <strong>{{ $errors->first('msg') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                      </div>

                                      <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Send Mail</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                </div>



    </div>


</div>
