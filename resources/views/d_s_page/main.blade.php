<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Welcome to iCare</h4>

       </div>
   </div>
</div>

<div class="container-fluid"><!-- ============================================================== -->
<!-- Sales Cards  -->
<!-- ============================================================== -->
<div class="row">
    <!-- Column -->
    @if(count($account)>0)
        @foreach($account->all() as $account)
    <div class="col-md-6 col-lg-6 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i>₦ {{$account->aver_balance}}</i></h1>
                <h6 class="text-white">Available Balance</h6>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-6 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i>₦ {{$account->poten_balance}}</i></h1>
                <h6 class="text-white">Potential Balance</h6>
            </div>
        </div>
    </div>
    @endforeach
@endif
    <!-- Column -->

                        <div class="col-md-8 col-lg-8 col-xlg-3">
                          <div class="card">
                                <div class="card-body">
                                  <a href="/seekers_request"  <h5 class="card-title m-b-0">Booking Request</h5></a>
                                </div>
                                <table class="table">
                                      <thead>
                                        <tr>
                                          <th scope="col">ID</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Reason</th>
                                          <th scope="col">Note</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Actions</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Jacob</td>
                                          <td>Thornton</td>
                                          <td>@fat</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Larry</td>
                                          <td>the Bird</td>
                                          <td>@twitter</td>
                                        </tr>
                                      </tbody>
                                </table>
                            </div>
                          </div>

                          <div class="col-md-4 col-lg-4 col-xlg-3">
                            <div class="card">
                                <div class="card-body">
                                <a href="/transaction_hys"    <h5 class="card-title m-b-0">Transaction Hystry</h5></a>
                                </div>
                                <table class="table">
                                      <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @if(count($acc_hys)>0)
                                        {{$acc_hys->links()}}
                                        @foreach($acc_hys->all() as $acc_hys)
                                        <tr>
                                          <td>{{$acc_hys->transaction_ID}}</td>
                                          <td>{{$acc_hys->amount}}</td>
                                          @if($acc_hys->status=="successful")
                                          <td class="text-success">successful</td>
                                          @elseif($acc_hys->status=="processing")
                                          <td class="text-warning">processing</td>
                                          @else
                                          <td class="text-danger">Cancled</td>
                                          @endif

                                        </tr>
                                        @endforeach
                                        @endif
                                      </tbody>
                                </table>
                            </div>
                          </div>



</div>




</div>
