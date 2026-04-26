<!DOCTYPE html>
<html>
<head>
    <title>Cake Shop</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<body>

@include('layout.navbar')

<div class="container mb-5 pb-5">
    @yield('content')
</div>

@include('layout.footer')

