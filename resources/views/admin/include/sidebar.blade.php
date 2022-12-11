<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">

            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap"></li>

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

                        <li>
                            <a href="{{ route('news.pending') }}">Pending News</a>
                        </li>

                    </ul>
                </li>
                @if(Auth::user()->type == 0)

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-align-left"></i>
                        <span class="hide-menu">Breaking News</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('breakingNews.create') }}">Create Breaking News</a>
                        </li>
                        <li>
                            <a href="{{ route('breakingNews.index') }}">View Breaking News</a>
                        </li>



                    </ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-align-left"></i>
                        <span class="hide-menu">author</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('author.create') }}">Create author</a>
                        </li>
                        <li>
                            <a href="{{ route('author.index') }}">View author</a>
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
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-align-left"></i>
                        <span class="hide-menu">Settings</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">

                        <li>
                            <a href="{{ route('website.index') }}">website</a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}">contact</a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-small-cap">--- SUPPORT</li>

                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger waves-effect waves-dark" type="submit" aria-expanded="false">
                            <i class="far fa-circle text-success"></i>
                            <span class="hide-menu">Log Out</span>
                        </button>
                    </form>

                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
