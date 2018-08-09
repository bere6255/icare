<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Prescriptions</h4>

       </div>
   </div>
</div>

<div class="container-fluid">
<div class="col-lg-12 col-md-12">
    <!-- Card -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title m-b-0">Bookings</h5>
        </div>
        <table class="table">
              <thead>
                <tr>
                  <th scope="col">Request Id</th>
                  <th scope="col">Examination</th>
                  <th scope="col">Comment</th>
                  <th scope="col">Date</th>
                  <th scope="col">Image</th>
                </tr>
              </thead>
              @if(count($prescrib)>0)
              {{$prescrib->links()}}
              <tbody>

                @foreach($prescrib->all() as $prescrib)
                <tr>
                  <th>{{$prescrib->booking_id}}</th>
                  <td>{{$prescrib->examination}}</td>
                  <td>{{$prescrib->comment}}</td>
                  <td>{{$prescrib->created_at}}</td>

                  <td>
                    <div class="col-lg-6 col-md-12 el-element-overlay">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{Storage::url($prescrib->file_1)}}" alt="user">
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{Storage::url($prescrib->file_1)}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
