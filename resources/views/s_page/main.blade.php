<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Welcome to iCare</h4>

       </div>
   </div>
</div>

<div class="container-fluid">
@if(Auth::user()->activation=="activated")
@if(Auth::user()->subscribtion=="noo")
  <div class="row row-cards row-deck">
    <div class="col-sm-6 col-xl-6">
      <div class="card">
        <a href="#"><img class="card-img-top" src="/img/01.jpg" ></a>
        <div class="card-body d-flex flex-column">
          <h4>Seekers</h4><a href="/seekers_create" class="btn btn-primary">Click here for Seekers</a>
          <div class="text-muted"></div>
          <div class="d-flex align-items-center pt-5 mt-auto">
            <div>
              <small class="d-block text-muted">Are you looking for a medical profertional to talk to then this is the best place to go, with our
                best and qualify medical expert to give you the bast service expirences</small>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-6 col-xl-6">
      <div class="card">
        <img class="card-img-top" src="/img/14.jpg" >
        <div class="card-body d-flex flex-column">
          <h4>Providers</h4><a class="btn btn-warning" href="/provider_create">Click here to become a Provider</a>
          <div class="text-muted"></div>
          <div class="d-flex align-items-center pt-5 mt-auto">
            <div>
              <small class="d-block text-muted">Are you a medical expert enroll to become a provider
                as we take you true oue world class medical examination and physical, prictical qulification process</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endif
@else
  <div class="col-sm-6 col-xl-6 text-center">
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">You are almost done!</h4>
    <p> Welcome to Icare your number one online medical center where we link you with the best doctors and persent all over the world</p>
    <hr>
    <p class="mb-0">An E-mail have been sent to your mail to activate your account.</p>
    <form method="post" enctype="form-data" action="/resend_activate" >
      <button class="btn btn-block badge-pill btn-warning">click here to resend the mail</button>
    </form>
</div>
</div>
@endif
