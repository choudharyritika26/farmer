<!DOCTYPE html>
<html lang="en">

<head>
    <title>LawnCare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('frontend.layout.partials.style')

    @yield('styles')
    
</head>

<body>
{{-- MAIN NAVIGATION BAR --}}
@include('frontend.layout.partials.header')

{{-- MAIN CONTENT --}}
<div class="main">
    @yield('content')
</div>

{{-- FOOTER --}}
@include('frontend.layout.partials.footer')

@include('frontend.layout.partials.script')

@yield('script')


</body>

</html>
