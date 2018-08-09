<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h2 class="page-title">Seekers Details</h2>

       </div>
   </div>
</div>

<div class="container-fluid">

  <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Profile Details</h4>
                            </div>
                            <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="b38ce1a3-0fdc-8c7d-c452-0d162c27ec88">
                                <!-- Comment Row -->
                                @if(count($s_details)>0)
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Full Name</label>
                                    <div class="col-sm-8">
                                      {{$s_details[0]->title}} {{$s_details[0]->first_name}} {{$s_details[0]->last_name}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Gender</label>
                                    <div class="col-sm-2">
                                      {{$s_details[0]->gender}}
                                    </div>
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Blood Group</label>
                                    <div class="col-sm-3">
                                      {{$s_details[0]->blood_group}}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3  control-label col-form-label">Genotype</label>
                                    <div class="col-sm-3">
                                      {{$s_details[0]->genotype}}
                                    </div>
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Age</label>
                                    <div class="col-sm-2">
                                      {{$s_details[0]->age}}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label"> Allergic</label>
                                    <div class="col-sm-8">
                                      {{$s_details[0]->allergic}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Epileptic</label>
                                    <div class="col-sm-3">
                                      {{$s_details[0]->epileptic}}
                                    </div>

                                    <label for="fname" class="col-sm-3 control-label col-form-label">Operation</label>
                                    <div class="col-sm-2">
                                      {{$s_details[0]->operation}}
                                    </div>

                                    <label for="fname" class="col-sm-3 control-label col-form-label"> Asthmatic</label>
                                    <div class="col-sm-3">
                                      {{$s_details[0]->asthmatic}}
                                    </div>
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Weigh</label>
                                    <div class="col-sm-2">
                                      {{$s_details[0]->weigh}}
                                    </div>
                                </div>

                                @endif
                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                        </div>
                          <!-- accoridan part -->


                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Prescriptions</h5>
                            </div>
                            <table class="table">


                                <thead>
                                    <tr>
                                        <th scope="col">Examination</th>
                                        <th scope="col">Comment</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                @if(count($s_pres)>0)
                                {{$s_pres->links()}}
                                <tbody>
                                  @foreach($s_pres->all() as $s_pres)
                                    <tr>
                                        <td>{{$s_pres->examination}}</td>
                                        <td class="text-success">{{$s_pres->comment}}</td>
                                        <td>
                                            {{$s_pres->created_at}}
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                @endif
                            </table>
                        </div>
                         <!-- card new -->



                    </div>
                </div>

</div>
