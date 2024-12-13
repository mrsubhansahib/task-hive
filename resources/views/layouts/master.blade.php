@include('layouts.header')

<body class="sidebar-expand">
    <!-- SIDEBAR -->
    @include('layouts.sidebar')

    <!-- Main Header -->
    <div class="main-header">
        <div class="d-flex">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <div class="main-title">
                Dashboard
            </div>
            @include('layouts.main-header')
        </div>

    </div>

    <div class="main">
        @yield('main content')
    </div>

    <div class="overlay"></div>

    @include('layouts.footer')

</body>
</html>
