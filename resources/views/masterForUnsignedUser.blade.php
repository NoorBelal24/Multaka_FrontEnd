@include('Admin.layout.head')


<link href="{{ asset('AdminAssets/css/custom.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('AdminAssets/css/homeCSS.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('AdminAssets/css/customPoster.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('AdminAssets/css/navBar.css') }}" rel="stylesheet" type="text/css" />
@yield('css')
</head>


<body class="layout-boxed">

    <!-- BEGIN LOADER -->
    @include('layout.loading')
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->

    @include('layout.navBarForUnsigned')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="content-div">
        @yield('content')
    </div>
    <!--  END MAIN CONTAINER  -->


    <!--  Footer  -->
    @include('layout.footer')

    <!--  Script  -->
    @include('Admin.layout.scripts')
    @yield('script')

</body>

</html>
