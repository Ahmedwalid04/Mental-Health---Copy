<!-- resources/views/layouts/client.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@include('partials.clientnavbar') {{-- Reusable navbar --}}

<div class="main-content">
    @yield('content') {{-- Dynamic page content --}}
</div>

@include('partials.footer') {{-- Reusable footer --}}

</body>
</html>
