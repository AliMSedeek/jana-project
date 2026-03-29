@extends('app.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2 class="mb-4 text-center text-danger">Checkout 🛒</h2>

    <a href="{{ route('cart.index') }}" class="btn btn-outline-secondary btn-sm mb-4">← Back to Cart</a>

    @if(session('cart') && count(session('cart')) > 0)

    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf

        <div class="row g-4">
            <div class="col-lg-7">
                <div class="card border mb-4">
                    <div class="card-header bg-white fw-semibold text-danger">
                        📦 Shipping Information
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">First Name</label>
                                <input type="text" name="first_name"
                                    class="form-control @error('first_name') is-invalid @enderror"
                                    placeholder="Please Enter First name" required value="{{ old('first_name') }}">
                                @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="last_name"
                                    class="form-control @error('last_name') is-invalid @enderror"
                                    placeholder=" Please Enter Last name" required value="{{ old('last_name') }}">
                                @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="emailname@example.com" required
                                    value="{{ old('email', auth()->user()->email ?? '') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone" class="form-control"
                                    placeholder="+20 1xx xxx xxxx" value="{{ old('phone') }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Street Address</label>
                                <input type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    placeholder="123 Main St, Apt 4B" required value="{{ old('address') }}">
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-5">
                                <label class="form-label">City</label>
                                <input type="text" name="city" class="form-control"
                                    placeholder="Cairo" required value="{{ old('city') }}">
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label">State / Region</label>
                                <input type="text" name="state" class="form-control"
                                    placeholder="Giza" value="{{ old('state') }}">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">ZIP Code</label>
                                <input type="text" name="zip" class="form-control"
                                    placeholder="12345" value="{{ old('zip') }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Country</label>
                                <select name="country" class="form-select">
                                    <option value="EG" selected>Egypt 🇪🇬</option>
                                    <option value="SA">Saudi Arabia 🇸🇦</option>
                                    <option value="AE">UAE 🇦🇪</option>
                                    <option value="US">United States 🇺🇸</option>
                                    <option value="GB">United Kingdom 🇬🇧</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">
                                    Order Notes <span class="text-muted">(optional)</span>
                                </label>
                                <textarea name="notes" class="form-control" rows="2"
                                    placeholder="Any special instructions...">{{ old('notes') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

            
                <div class="card border">
                    <div class="card-header bg-white fw-semibold text-danger">
                        💳 Payment Method
                    </div>
                    <div class="card-body">

                        <div class="row g-2 mb-3">
                            <div class="col-4">
                                <input type="radio" class="btn-check" name="payment_method"
                                    id="pay_card" value="credit_card" checked>
                                <label class="btn btn-outline-danger w-100" for="pay_card">
                                    💳 Credit Card
                                </label>
                            </div>
                            <div class="col-4">
                                <input type="radio" class="btn-check" name="payment_method"
                                    id="pay_paypal" value="paypal">
                                <label class="btn btn-outline-danger w-100" for="pay_paypal">
                                    🅿️ PayPal
                                </label>
                            </div>
                            <div class="col-4">
                                <input type="radio" class="btn-check" name="payment_method"
                                    id="pay_cod" value="cash_on_delivery">
                                <label class="btn btn-outline-danger w-100" for="pay_cod">
                                    💵 Cash
                                </label>
                            </div>
                        </div>

                        <div id="card-details">
                            <hr>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Cardholder Name</label>
                                    <input type="text" name="card_name" class="form-control"
                                        placeholder="Jana Hassan ">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Card Number</label>
                                    <input type="text" name="card_number" id="cardNumberInput"
                                        class="form-control" placeholder="•••• •••• •••• ••••"
                                        maxlength="19">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Expiry Date</label>
                                    <input type="text" name="card_expiry" id="cardExpiry"
                                        class="form-control" placeholder="MM / YY" maxlength="7">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">CVV</label>
                                    <input type="password" name="card_cvv" class="form-control"
                                        placeholder="•••" maxlength="4">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-5">
                <div class="card border">
                    <div class="card-header bg-danger text-white fw-semibold">
                        🛒 Order Summary
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-bordered mb-0 align-middle text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $grandTotal = 0; @endphp
                                @foreach(session('cart') as $id => $details)
                                    @php
                                        $lineTotal = $details['price'] * $details['quantity'];
                                        $grandTotal += $lineTotal;
                                    @endphp
                                    <tr>
                                        <td class="text-start">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="/img/{{ $details['image'] }}" width="45" class="rounded">
                                                <span class="small fw-semibold">{{ $details['name'] }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary">× {{ $details['quantity'] }}</span>
                                        </td>
                                        <td>${{ number_format($lineTotal, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-between text-muted small mb-1">
                            <span>Subtotal</span>
                            <span>${{ number_format($grandTotal, 2) }}</span>
                        </div>
                        <div class="d-flex justify-content-between text-muted small mb-1">
                            <span>Shipping</span>
                            <span class="text-success">Free 🎁</span>
                        </div>
                        <div class="d-flex justify-content-between text-muted small mb-2">
                            <span>Tax</span>
                            <span>$0.00</span>
                        </div>
                        <hr class="my-2">
                        <div class="d-flex justify-content-between fw-bold fs-5 text-danger">
                            <span>Total</span>
                            <span>${{ number_format($grandTotal, 2) }}</span>
                        </div>

                        <button type="submit" class="btn btn-danger w-100 mt-3">
                            Place Order →
                        </button>

                        <p class="text-center text-muted small mt-2 mb-0">
                            🔒 Secure &amp; encrypted checkout
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </form>

    @else

        <div class="text-center py-5">
            <p class="fs-1">🛒</p>
            <h5 class="text-muted">Your cart is empty!</h5>
            <a href="{{ route('products.index') }}" class="btn btn-danger mt-3 px-4">Shop Now</a>
        </div>

    @endif

</div>

<script>

    document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
        radio.addEventListener('change', function () {
            document.getElementById('card-details').style.display =
                this.value === 'credit_card' ? 'block' : 'none';
        });
    });

    const cardInput = document.getElementById('cardNumberInput');
    if (cardInput) {
        cardInput.addEventListener('input', function () {
            let val = this.value.replace(/\D/g, '').slice(0, 16);
            this.value = val.match(/.{1,4}/g)?.join(' ') || val;
        });
    }

    // Format expiry: MM / YY
    const expiryInput = document.getElementById('cardExpiry');
    if (expiryInput) {
        expiryInput.addEventListener('input', function () {
            let val = this.value.replace(/\D/g, '').slice(0, 4);
            if (val.length >= 3) val = val.slice(0, 2) + ' / ' + val.slice(2);
            this.value = val;
        });
    }
</script>

@endsection