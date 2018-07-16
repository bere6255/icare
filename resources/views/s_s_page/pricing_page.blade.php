<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title">Choose a plan</h4>

       </div>
   </div>
</div>

<!-- ============================================================== -->
<!-- pricing Cards  -->
<!-- ============================================================== -->
<div class="container-fluid">

<div class="row row-cards row-deck">
  <div class="col-sm-3 col-xl-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">1 Unit Standard Plan</div>
        <div class="display-6 my-4">₦ 1,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-danger mr-2" aria-hidden="true"></i> 1 Booking Request</li>
        </ul>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-danger mr-2" aria-hidden="true"></i> 0% Off </li>
        </ul>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-danger mr-2" aria-hidden="true"></i> Save ₦ 0.00 </li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="100000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="1">
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <button class="btn btn-block badge-pill btn-danger">Choose Plan</button>

          </form>
          </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xl-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">20 Unit Standard Plan</div>
        <div class="display-6 my-4">₦ 17,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-warning mr-2" aria-hidden="true"></i> 20 Booking Request</li>
        </ul>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-warning mr-2" aria-hidden="true"></i> 15% Off </li>
        </ul>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-warning mr-2" aria-hidden="true"></i> Save ₦ 3000 </li>
        </ul>

        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="1700000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="20">
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <button class="btn btn-block badge-pill btn-warning">Choose Plan</button>

          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xl-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">60 Unit Standard Plan</div>
        <div class="display-6 my-4">₦ 45,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-primary mr-2" aria-hidden="true"></i> 15 Booking Request</li>
        </ul>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-primary mr-2" aria-hidden="true"></i> 25% Off </li>
        </ul>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-primary mr-2" aria-hidden="true"></i> Save ₦ 15,000 </li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="4500000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="60">
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <button class="btn btn-block badge-pill btn-primary">Choose Plan</button>

          </form>

        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xl-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">120 Unit Standard Plan</div>
        <div class="display-6 my-4">₦ 72,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-success mr-2" aria-hidden="true"></i> 120 Booking Request</li>
        </ul>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-success mr-2" aria-hidden="true"></i> 40% Off </li>
        </ul>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-success mr-2" aria-hidden="true"></i> Save ₦ 48,000 </li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="7200000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="120">
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <button class="btn btn-block badge-pill btn-success">Choose Plan</button>

          </form>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- ============================================================== -->
<!-- pricing Cards ends -->
<!-- ============================================================== -->
