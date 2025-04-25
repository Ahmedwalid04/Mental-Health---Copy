<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>

    @yield('styles')
</head>
<body>

<link rel="stylesheet" href="{{ asset('css/partials/therapistnavbar.css') }}">
@include('partials.therapistnavbar') {{-- Reusable navbar --}}

<div class="main-content">
    @yield('content') {{-- Dynamic page content --}}
</div>

@include('partials.footer') {{-- Reusable footer --}}

</body>
</html>
