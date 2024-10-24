@include('Admin.layout.head')

@yield('css')

<link href="{{ asset('AdminAssets/css/custom.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('AdminAssets/css/homeCSS.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('AdminAssets/css/navBar.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>


<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    @include('layout.loading')
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('Admin.layout.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">


        <!--  BEGIN SIDEBAR  -->
        @include('Admin.layout.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!--  BEGIN BREADCRUMBS  -->
                    @include('Admin.layout.breadcrums')
                    <!--  END BREADCRUMBS breadcrums -->

                    <div class="row layout-top-spacing">
                        @yield('content')
                    </div>

                </div>
            </div>

            @include('layout.footer')

        </div>
    </div>

    @include('Admin.layout.scripts')
    @yield('script')


    <script>
        if (document.querySelector('.sidebar')) {
            document.querySelector('.table-container').style.marginLeft = '190px';
        }
    </script>
</body>

</html>
