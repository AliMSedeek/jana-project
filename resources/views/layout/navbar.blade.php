<style>
    .nav-link.active {
        border-bottom: 2px solid red;
        color: red !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="/img/logo.png" alt="Logo" width="40" height="40" class="me-2">
        <span class="fw-bold">CAKE</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
      <li class="nav-item"><a class="nav-link {{ request()->routeIs('cakes.menu') ? 'active' : '' }}" href="{{ route('cakes.menu') }}">Menu</a></li>
      <li class="nav-item"><a class="nav-link {{ request()->routeIs('cart.index') ? 'active' : '' }}" href="{{ route('cart.index') }}">Cart</a></li>
      <li class="nav-item"><a class="nav-link {{ request()->routeIs('cakes.contact') ? 'active' : '' }}" href="{{ route('cakes.contact') }}">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>