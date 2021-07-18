<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.head')
</head>
<body class="home-page home-01 ">
    @include('frontend.layouts.header')
    {{ $slot }}
    @include('frontend.layouts.footer')
</body>
</html>