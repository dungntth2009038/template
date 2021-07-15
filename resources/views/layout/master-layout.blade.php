<!doctype html>
<html class="no-/asset//asset/js/" lang="en">
@include('layout/head')
<body>
@include('layout/left-siderbar')
<div class="all-content-wrapper">
    @include('layout/header')
    <!---------------- Content ------------------->
        @yield('content')

    <!---------------- End content --------------->
    @include('layout/footer')
</div>
@include('layout/scrip')
</body>
</html>
