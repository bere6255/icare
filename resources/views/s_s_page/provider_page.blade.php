<!-- ============================================================== -->
<!-- Doctors Cards  -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Welcome to iCare</h4>

       </div>
   </div>
</div>

<div class="container-fluid">
<div class="page-header">
  <h1 class="page-title">
    Providers
  </h1>
</div>

<div class="row el-element-overlay">
                  @if(count($providers)>0)
                  {{$providers->links()}}
                  @foreach($providers->all() as $provid)
                  <div class="col-lg-3 col-md-6">
                     <div class="card">
                         <div class="el-card-item">
                             <div class="el-card-avatar el-overlay-1"><a href="/view_provider?id={{$provid->users_id}}" > <img src="../../assets/images/big/img1.jpg" alt="user" /></a>

                             </div>
                             <div class="el-card-content">
                                 <h4 class="m-b-0"><a href="/view_provider?id={{$provid->users_id}}">{{$provid->title}} {{$provid->first_name}} {{$provid->last_name}}</a></h4>
                                 <span class="text-muted">{{$provid->about}}</span>
                             </div>
                         </div>
                     </div>
                 </div>
                 @endforeach
                 @endif


</div>
<!-- ============================================================== -->
<!-- Doctors Cards ends -->
<!-- ============================================================== -->
</div>
