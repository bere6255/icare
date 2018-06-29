<!-- ============================================================== -->
<!-- pricing Cards  -->
<!-- ============================================================== -->
<div class="container-fluid">
<div class="page-header">
  <h1 class="page-title">
    STANDARD PLAN
  </h1>
</div>

<div class="row">
  <div class="col-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">5 Unit Standard Plan</div>
        <div class="display-6 my-4">₦ 3,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-danger mr-2" aria-hidden="true"></i> 5 Booking Request</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="300000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="5">
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <button class="btn btn-block badge-pill btn-danger">Choose Plan</button>

          </form>
          </div>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">10 Unit Standard Plan</div>
        <div class="display-6 my-4">₦ 6,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-warning mr-2" aria-hidden="true"></i> 10 Booking Request</li>
        </ul>

        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="600000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="10">
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <button class="btn btn-block badge-pill btn-warning">Choose Plan</button>

          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">15 Unit Standard Plan</div>
        <div class="display-6 my-4">₦ 9,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-primary mr-2" aria-hidden="true"></i> 15 Booking Request</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="900000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="15">
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <button class="btn btn-block badge-pill btn-primary">Choose Plan</button>

          </form>

        </div>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">20 Unit Standard Plan</div>
        <div class="display-6 my-4">₦ 12,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-success mr-2" aria-hidden="true"></i> 20 Booking Request</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="1200000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="12">
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

</div>
<!-- ============================================================== -->
<!-- pricing Cards ends -->
<!-- ============================================================== -->
