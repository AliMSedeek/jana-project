<!DOCTYPE html>
<html>
<head>
    <title>Cake Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>

@include('layout.navbar')

<div class="container mb-5 pb-5">
    @yield('content')
</div>

@include('layout.footer')

