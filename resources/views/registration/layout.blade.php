<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.header')
</head>
<body>
<div class="wrapper">
    
        @include('registration.navbar')
        
            @yield('content')
    
</div>
@include('layout.footer-script')

@yield('custom-scripts')
</body>
</html>