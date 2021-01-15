@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 60%">

    <!-- Heading -->
    <h1 class="my-5 h1 text-center">Checkout</h1>

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-8 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card content-->
          <form class="card-body" action="/purchase" method="post">
            @csrf
            <!--address-->
            <div class="md-form mb-5">
              <input type="text" id="address" name="address" class="form-control" required>
              <label for="address" class="">Address</label>
              @error('address')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4">

                <label for="country">Province</label>
                <select class="custom-select d-block w-100" id="province" name="province" required>
                  <option>Choose...</option>
                  <option value="hanoi">Ha Noi</option>
                  <option value="danang">Da Nang</option>
                  <option value="tphcm">Ho Chi Minh City</option>
                </select>
                @error('provine')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror

              </div>

              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">

                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr>

            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="atstore" name="atstore">
              <label class="custom-control-label" for="atstore">Buy at store</label>
            </div>

            <hr>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="card-number">Credit card number</label>
                <input type="text" class="form-control" id="cardnumber" name="cardnumber" required>
                @error('cardnumber')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Promo code" name="redeemcode" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

          </form>

        </div>
        <!--/.Card-->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-4">

        <!-- Heading -->
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span>Your cart</span>
          <span class="badge badge-secondary badge-pill">{{ $items }}</span>
        </h4>

        <!-- Cart -->
        <ul class="list-group mb-3 z-depth-1">
          @foreach ($cart as $c)
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">{{ $c->product->name }}</h6>
              <small class="text-muted">{{ $c->product->description }}</small>
            </div>
            <span class="text-muted">{{ $c->quantity }} * {{ $c->product->price }}</span>
          </li>
          @endforeach
          <li class="list-group-item d-flex justify-content-between">
            <div>
                <h6>Shipping</h6>
            </div>
            <span class="text-muted">$10</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>${{$total + 10}}</strong>
          </li>
        </ul>
        <!-- Cart -->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

</div>    
@endsection