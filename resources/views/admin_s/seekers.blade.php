<div id="content">
<section class="tables-section">

                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Seekers Table</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col"></th>


                                </tr>
                            </thead>
                            @if(count($seekers)>0)
                            {{$seekers->links()}}
                            <tbody>

                              @foreach($seekers->all() as $seekers)
                                <tr>
                                    <td>{{$seekers->email}}</td>
                                    <td>{{$seekers->title}}</td>
                                    <td>{{$seekers->first_name}}</td>
                                    <td>{{$seekers->last_name}}</td>
                                    <td>{{$seekers->gender}}</td>
                                    <td>{{$seekers->phone}}</td>
                                    <td>
                                      <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                    <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -204px, 0px);">

                                      <form method="post" enctype="form-data" action="#">
                                        @csrf
                                        <input type="hidden" name="booking_id" value=""/>
                                      <button class="dropdown-item text-warning">Flag</button>
                                      </form>

                                      <a class="dropdown-item text-primary" href="#">View Transactions</a>
                                      <a class="dropdown-item text-secondry" href="#">View details</a>
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
</div>
