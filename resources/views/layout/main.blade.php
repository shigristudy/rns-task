<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.header')
</head>
<body>
<div class="wrapper">
    @include('layout.sidebar')
    <div class="main-panel">
        @include('layout.navbar')
        <div class="content">
            @yield('content')
        </div>
        @include('layout.footer')
    </div>
</div>
@include('layout.footer-script')

@yield('custom-scripts')
</body>
</html>