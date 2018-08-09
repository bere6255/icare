<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h2 class="page-title">Acount History</h2>

       </div>
   </div>
</div>

<div class="container-fluid">

  <div class="col-lg-12 col-md-12">
      <!-- Card -->

                          <div class="card">
                              <div class="card-body">
                                  <h4 class="card-title m-b-0">Transaction History</h4>
                              </div>
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th scope="col">ID</th>
                                          <th scope="col">E-Mail</th>
                                          <th scope="col">Job_ID</th>
                                          <th scope="col">Amount</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Date</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @if(count($acc_hys)>0)
                                    {{$acc_hys->links()}}
                                    @foreach($acc_hys->all() as $acc_hys)
                                    <tr>
                                      <td>{{$acc_hys->transaction_ID}}</td>
                                      <td>{{$acc_hys->email}}</td>
                                      <td>{{$acc_hys->job_id}}</td>
                                      <td>{{$acc_hys->amount}}</td>
                                      @if($acc_hys->status=="successful")
                                      <td class="text-success">successful</td>
                                      @elseif($acc_hys->status=="processing")
                                      <td class="text-warning">processing</td>
                                      @else
                                      <td class="text-danger">Cancled</td>
                                      @endif
                                      <td>{{$acc_hys->created_at}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                  </tbody>
                              </table>

      </div>
    </div>
