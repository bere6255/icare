<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Transaction History</h4>

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
                                        <th scope="col">Unit</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @if(count($sub_hys)>0)
                                  {{$sub_hys->links()}}
                                  @foreach($sub_hys->all() as $sub_hys)
                                  <tr>
                                    <td>{{$sub_hys->sub_id}}</td>
                                    <td>{{$sub_hys->unit}}</td>
                                    <td>{{$sub_hys->amount}}</td>
                                    @if($sub_hys->status=="successful")
                                    <td class="text-success">successful</td>
                                    @elseif($sub_hys->status=="processing")
                                    <td class="text-warning">processing</td>
                                    @else
                                    <td class="text-danger">Cancled</td>
                                    @endif
                                    <td>{{$sub_hys->created_at}}</td>
                                  </tr>
                                  @endforeach
                                  @endif
                                </tbody>
                            </table>

    </div>
  </div>
