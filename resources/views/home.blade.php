@extends('app.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        ✅ {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        ❌ {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
<div class="hero-section row align-items-center py-5">
    <div class="col-md-6">
        <span class="badge bg-danger px-3 py-2 mb-3">🎂 Limited Offer</span>
        <h1 class="display-4 fw-bold">
            <span class="text-danger">40% Off</span><br>on Cakes
        </h1>
        <p class="text-muted fs-5 my-4">
            Handcrafted with love. Fresh ingredients. Delivered to your door.
        </p>
        <a href="{{ route('cakes.menu') }}" class="btn btn-danger btn-lg px-4 me-2">Order Now</a>
        <a href="{{ route('cakes.menu') }}" class="btn btn-outline-danger btn-lg px-4">View Menu</a>
    </div>
    <div class="col-md-6 text-center">
    <img src="/img/home.png" class="img-fluid" 
    style="max-height: 100%; object-fit: contain; width: 100%;" alt="Cake">
</div>
</div>

<div class="row text-center my-5 py-4 bg-light rounded-4">
    <div class="col-md-4">
        <h2 class="text-danger fw-bold">500+</h2>
        <p class="text-muted">Happy Customers</p>
    </div>
    <div class="col-md-4">
        <h2 class="text-danger fw-bold">50+</h2>
        <p class="text-muted">Cake Varieties</p>
    </div>
    <div class="col-md-4">
        <h2 class="text-danger fw-bold">5★</h2>
        <p class="text-muted">Average Rating</p>
    </div>
</div>


<h2 class="text-center mt-5">Popular <span class="text-danger">Cakes</span></h2>
<p class="text-center text-muted mb-4">Our most loved flavors, freshly baked daily</p>
<div class="row my-3">
    @foreach ($cakes->slice(0, 3) as $cake)
    <div class="col-md-4">
        <div class="card text-center p-3 my-3 shadow-sm border-0 rounded-4 h-100">
            <img src="/img/{{ $cake->image }}" class="rounded-circle mx-auto mt-2 shadow" width="120" height="120" style="object-fit: cover;">
            <div class="card-body">
                <h5 class="mt-2 fw-bold">{{ $cake->name }}</h5>
                <p class="text-muted small">{{ $cake->description }}</p>
                <p class="text-danger fw-bold fs-5">${{ $cake->price }}</p>
                <form action="{{ route('cart.addToCart', $cake->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">🛒 Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="text-center mt-5 mb-5">
    <a href="{{ route('cakes.menu') }}" class="btn btn-outline-danger px-4">See All Cakes →</a>
</div>


<div class="bg-danger text-white rounded-4 p-5 my-5 text-center">
    <h4 class="fw-bold mb-3">"The best cake I've ever tasted!"</h4>
    <p class="mb-1">⭐⭐⭐⭐⭐</p>
    <small>— Jana Hassan, Happy Customer</small>
</div>


<div class="container">
    <div>
        <img src="{{ asset('img/section3.png') }}" class="m-0 img-fluid w-100">
    </div>
    <div class="row align-items-center mt-4">
        <div class="col-6 text-center p-5">
            <span class="badge bg-danger px-3 py-2 mb-3">✨ Customize</span>
            <h2 class="fw-bold">What Would You Add to a Cake?</h2>
            <p class="text-muted">Choose your toppings and build your dream cake from scratch and Suggestion for the shop .</p>
            <a class="btn btn-danger btn-lg mt-2" href="{{ route('cakes.create') }}">🎨 Build Your Cake</a>
        </div>
        <div class="col-6">
            <img src="{{ asset('img/section3.2.jpeg') }}" class="img-fluid rounded-4 shadow">
        </div>
    </div>
</div>

@endsection