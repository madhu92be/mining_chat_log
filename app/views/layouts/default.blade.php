<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','StayZilla')</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="custom">
    
    @include('layouts.partials.css')
</head>
<body>
    
    @yield('content')    
    
    @include('layouts.partials.script')
    @yield('include_js')
</body>
</html>