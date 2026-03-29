@extends('app.app')
@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert">
        ✅ {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show mx-3 mt-3" role="alert">
        ❌ {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
<h2 class="text-center mt-5"><span class="text-danger">Menu</span></h2>
<div class="row mt-4">
    @foreach ($cakes as $cake)
        <div class="col-md-4 mb-4">
            <div class="card text-center p-3 h-100 d-flex flex-column">
                <img src="/img/{{ $cake->image }}" class="rounded-circle mx-auto mt-2" width="120" height="120" style="object-fit: cover;">
                <h5 class="mt-3">{{ $cake->name }}</h5>
                <p class="flex-grow-1">{{ $cake->description }}</p>
                <p class="text-danger">${{ $cake->price }}</p>
                <form action="{{ route('cart.addToCart', $cake->id) }}" method="POST" class="mt-auto">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">🛒 Add to Cart</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection