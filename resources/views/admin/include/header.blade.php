<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ $content->logo }}" alt="homepage" class="dark-logo" style="
    height: 50px;
" />
                    <!-- Light Logo icon -->
                    <img src="{{ $content->logo }}" alt="homepage" class="light-logo" style="
    height: 50px;
" />
                </b>
                <!--End Logo icon -->

            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                      href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a
                      class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                      href="javascript:void(0)"><i class="icon-menu"></i></a> </li>

            </ul>

            <h2 class="text-center mx-3 text-white">{{ Auth::user()->name }}</h2>

        </div>
    </nav>
</header>
