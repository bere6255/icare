<section class="tables-section">

                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Providers Table</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Specialty</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">MDCN</th>
                                    <th scope="col"></th>


                                </tr>
                            </thead>
                            @if(count($provider)>0)
                            {{$provider->links()}}
                            <tbody>

                              @foreach($provider->all() as $provider)
                                <tr>
                                    <td>{{$provider->email}}</td>
                                    <td>{{$provider->title}}</td>
                                    <td>{{$provider->first_name}}</td>
                                    <td>{{$provider->last_name}}</td>
                                    <td>{{$provider->specialty}}</td>
                                    <td>{{$provider->phone}}</td>
                                    <td>{{$provider->address}}</td>
                                    <td>{{$provider->mdcn}}</td>
                                    <td>
                                      <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                    <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -204px, 0px);">


                                      <form method="post" enctype="form-data" action="#">
                                        @csrf
                                        <input type="hidden" name="booking_id" value=""/>
                                      <button class="dropdown-item text-warning">Accept</button>
                                      </form>
                                      <form method="post" enctype="form-data" action="#">
                                        @csrf
                                        <input type="hidden" name="booking_id" value=""/>
                                      <button class="dropdown-item text-danger">Reject</button>
                                      </form>

                                      <a class="dropdown-item text-primary" href="#">Prescrib</a>
                                      <a class="dropdown-item text-secondry" href="#">View details</a>
                                      <a class="dropdown-item text-success" href="#">complated</a>


                                      </div>
                                      </div>
                                    </td>
                                </tr>
                                @endforeach



                            </tbody>
                            @endif
                        </table>
                    </div>
                </div>
                <!--// table7 -->

            </section>
