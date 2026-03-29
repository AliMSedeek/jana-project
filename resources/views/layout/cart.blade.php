@extends('app.app')
@section('content')
<div class="container mt-5">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        ✅ {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        ❌ {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
    <h2 class="mb-4  text-center text-danger">Shopping Cart 🛒</h2>
    <table class="table table-bordered align-middle text-center">
        <thead class="table-light text-center">
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                <tr>
                    
                    <td><img src="/img/{{ $details['image'] }}" width="70" class="rounded text-center"></td>
                    <td>*{{ $details['name'] }}*</td>
                    <td>{{ $details['description'] ?? 'No description' }}</td>
                    <td>${{ $details['price'] }}</td>
                    <td>

                        <form action="{{ route('cart.update') }}" method="POST" class="d-flex">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="form-control form-control-sm me-2" style="width: 70px;">
                            <button type="submit" class="btn btn-sm btn-outline-primary">Update</button>
                        </form>
                    </td>
                    
                    <td>${{ $details['price'] * $details['quantity'] }}</td>
                    
                    <td>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $id }}">
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">Your cart is empty!</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@if(session('cart'))
<div class="d-flex justify-content-end mt-3">
    <a href="{{ route('checkout.index') }}" class="btn btn-danger px-4">
        Proceed to Checkout →
    </a>
</div>
@endif
@endsection