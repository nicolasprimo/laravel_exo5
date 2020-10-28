<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Coding School</title>
</head>
<body>
    @include('partials.header')
    
    <div class="container mt-4">
    @include('partials.breadcrumbs')
    @yield('content')
    </div>
    
    @include('partials.footer')
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>