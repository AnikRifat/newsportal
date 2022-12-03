<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    <img src="{{ asset('/assets') }}/images/users/2.jpg" alt="user-img" class="img-circle">
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                      data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item">
                            <i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item">
                            <i class="ti-wallet"></i> My Balance</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item">
                            <i class="ti-email"></i> Inbox</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item">
                            <i class="ti-settings"></i> Account Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="pages-login.html" class="dropdown-item">
                            <i class="fa fa-power-off"></i> Logout</a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">--- PERSONAL</li>

                {{-- <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-align-left"></i>
                        <span class="hide-menu">Multi level dd</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0)">item 1.1</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">item 1.2</a>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu
                                1.3</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="javascript:void(0)">item 1.3.1</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">item 1.3.2</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">item 1.3.3</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">item 1.3.4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">item 1.4</a>
                        </li>
                    </ul>
                </li>
                 --}}
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-align-left"></i>
                        <span class="hide-menu">News</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('news.create') }}">Create News</a>
                        </li>
                        <li>
                            <a href="{{ route('news.index') }}">View News</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-align-left"></i>
                        <span class="hide-menu">category</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('category.create') }}">Create category</a>
                        </li>
                        <li>
                            <a href="{{ route('category.index') }}">View category</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- SUPPORT</li>

                <li>
                    <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false">
                        <i class="far fa-circle text-success"></i>
                        <span class="hide-menu">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
