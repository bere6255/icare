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
</div>



</div>
