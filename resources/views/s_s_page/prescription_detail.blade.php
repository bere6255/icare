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
                  <th scope="col"></th>
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
                    <div class="btn-group">
                      <a class="btn btn-primary " href="/view_prescrib?id={{$prescrib->id}}"  >View Details</a>
                    </div>
                  </td>
                </tr>
                @endforeach

              </tbody>
              @endif
        </table>
    </div>
  </div>
