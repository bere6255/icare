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
        <div class="card-category">1 Day Standard Plan</div>
        <div class="display-6 my-4">₦ 1,500</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-danger mr-2" aria-hidden="true"></i> 1 Transection</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="150000"> {{-- required in kobo --}}
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
  <div class="col-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">1 Month Standard Plan</div>
        <div class="display-6 my-4">₦ 4,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-warning mr-2" aria-hidden="true"></i> 31 day</li>
        </ul>

        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="400000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="31">
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
        <div class="card-category">6 Months Standard Plan</div>
        <div class="display-6 my-4">₦ 24,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-primary mr-2" aria-hidden="true"></i> 186 day</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="2400000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="186">
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
        <div class="card-category">1 Year Standard Plan</div>
        <div class="display-6 my-4">₦ 36,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-success mr-2" aria-hidden="true"></i> 365 day</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="3600000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="372">
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

<div class="page-header">
  <h1 class="page-title">
    PREMIUM PLAN
  </h1>
</div>
<div class="row">
  <div class="col-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">1 Day Standard Plan</div>
        <div class="display-6 my-4">₦ 2,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-danger mr-2" aria-hidden="true"></i> 1 day</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="200000"> {{-- required in kobo --}}
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
  <div class="col-3">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-category">1 Month Standard Plan</div>
        <div class="display-6 my-4">₦ 5,500</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-warning mr-2" aria-hidden="true"></i> 31 day</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="550000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="31">
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
        <div class="card-category">6 Months Standard Plan</div>
        <div class="display-6 my-4">₦ 30,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-primary mr-2" aria-hidden="true"></i> 186 day</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="3000000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="186">
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
        <div class="card-category">1 Year Standard Plan</div>
        <div class="display-6 my-4">₦ 60,000</div>
        <ul class="list-unstyled leading-loose">
          <li><i class="fa fa-check text-success mr-2" aria-hidden="true"></i> 365 day</li>
        </ul>
        <div class="text-center mt-6">
          <form method="post" enctype="form-data" action="/pay">
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="amount" value="6000000"> {{-- required in kobo --}}
            <input type="hidden" name="unit" value="372">
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
