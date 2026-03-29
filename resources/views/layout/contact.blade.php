@extends('app.app')
@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-5"><span class="text-danger">Contact</span> Us</h2>
        <div class="row">
        <div class="col-md-5 mb-4">
            <h3 class="fw-bold text-danger">Contact Us</h3>
            <p class="text-muted">We are committed to processing the information in order to contact you and talk about your project.</p>

            <ul class="list-unstyled mt-4">
                <li class="mb-3">
                    <i class="bi bi-envelope text-danger me-2"></i>
                    example@cakeshop.com
                </li>
                <li class="mb-3">
                    <i class="bi bi-geo-alt text-danger me-2"></i>
                    123 Cake Street, Sweet City
                </li>
                <li class="mb-3">
                    <i class="bi bi-telephone text-danger me-2"></i>
                    +201143017846
                </li>
            </ul>

            <div class="mt-4">
                <a href="https://www.instagram.com/_janju0n_?igsh=MWJzeGZmaTRycGZpeg==" class="me-3 text-dark fs-5"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/jana-hassan-9072872bb?utm_source=share_via&utm_content=profile&utm_medium=member_android" class="me-3 text-dark fs-5"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.facebook.com/share/1GWV5wDVBY/" class="me-3 text-dark fs-5"><i class="bi bi-facebook"></i></a>
                
            </div>
        </div>

        <div class="col-md-7">
            <form>
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name*" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email*" required>
                </div>
                <div class="mb-3">
                    <input type="url" class="form-control" placeholder="Website*">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn w-100 text-white btn-danger" 
                    >
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>

@endsection