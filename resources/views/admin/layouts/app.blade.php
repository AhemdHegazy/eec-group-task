<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
    <!--head-->
</head>

<body class="">
<div class="wrapper ">
    @include('admin.layouts.side')
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        @include('admin.layouts.header')
        <!-- End Navbar -->
        <div class="content" style="min-height: 680px">
            <div class="clear-fix" style="min-height: 150px"></div>
            @yield('content')
        </div>
        @include('admin.layouts.footer')
    </div>
</div>
@include('admin.layouts.scripts')
</body>

</html>
