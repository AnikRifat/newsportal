<header class="header-area-one">
    <div class="container">
        <div class="header-top-one desktop-version">
            <div class="row padding-tb">
                <div class="col-xl-3 col-md-3 col-6">
                    <div class="logo-area-one">
                        <!-- <h1>WP News <br/> <span>Wordpress news template</span></h1> -->
                        <a href="{{ route('index') }}">
                            <h1> <img src="{{ $content->logo }}" alt="mpnews" /><br /> </h1>
                        </a>
                        <h5> {{ bangla_date(time(), "en") }}</h5>
                    </div>
                    <!--/.logo-->
                </div>
                <!--/.end col md 6-->
                <div class="col-xl-8 col-md-7 col-2">
                    <div class="main-menu-one">
                        <ul>
                            @foreach ($slicedCat as $item)
                            <li><a href="{{ route('category',$item->id) }}">{{ $item->name }}</a></li>
                            @endforeach


                        </ul>
                    </div>
                    <!--/.main menu-->
                </div>
                <!--/.end col md 8-->

                <div class="col-xl-1 col-md-2 col-4 header-top-right-side text-right">
                    <span class="flymenu-icon"><i class="fa fa-bars"></i></span>
                    {{-- <span class="top-search-icon"><i class="fa fa-search"></i></span> --}}
                </div>
                <!--/.end col md 1-->
            </div>
            <!--/.row-->

        </div>
        <!--/.header top one-->


    </div>

    <!--/.fly-menu-->
    <div class="fly-menu">
        <div class="fly-menu-wrapper">
            <div class="container">

                <div class="row padding-tb">
                    <div class="col-xl-3 col-md-3 col-6">
                        <div class="logo-area-one">
                            <!-- <h1>WP News <br/> <h5>Wordpress news template</h5></h1> -->
                            <a href="#">
                                <h1> <img src="{{ $content->logo }}" alt="mpnews" /><br /> </h1>
                            </a>
                            <h5> {{ bangla_date(time(), "en") }}</h5>
                        </div>
                        <!--/.logo-->
                    </div>
                    <!--/.end col md 6-->
                    <div class="col-xl-8 col-md-7 col-1">
                    </div>
                    <!--/.end col md 8-->
                    <div class="col-xl-1 col-md-2 col-5 header-top-right-side text-right">
                        <span class="close-fly-menu flymenu-icon"><i class="fa fa-times"></i></span>
                        {{-- <span class="top-search-icon"><i class="fa fa-search"></i></span> --}}
                    </div>
                    <!--/.end col md 1-->
                </div>
                <!--/.row-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="fly-menu-top">

                            <div class="row">
                                @foreach ($category as $item)
                                <div class="col-md-2 col-6">
                                    <a href="{{ route('category',$item->id) }}">{{ $item->name }}</a>
                                </div>
                                @endforeach


                            </div>

                        </div>
                        <!--fly-menu-top-->
                    </div>
                    <div class="col-md-12">
                        <div class="row fly-menu-bottom">
                            <div class="col-xl-8 col-md-12 col-12">
                                <div class="row">


                                    <div class="col-xl-3 col-md-4 col-6 p-0">
                                        <a href="#">
                                            <span><i class="fas fa-images"></i></span>ছবিু
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-6 p-0">
                                        <a href="#">
                                            <span><i class="fas fa-video"></i></span>ভিডিও
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4"> </div>
                        </div>
                    </div>
                </div>
                <!--/.flying-header-top-one-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="fly-menu-buttom">
                        </div>
                        <!--/.fly-menu-buttom-->
                    </div>
                </div>

            </div>
        </div>
        <!--/.fly-menu-wrapper-->
    </div>
    <!--/.fly-menu-->
    <div class="container">
        <div class="header-top-one mobile-menu">
            <div class="row padding-tb">
                <div class="col-xl-3 col-md-3 col-6">
                    <div class="logo-area-one">
                        <!-- <h1>WP News <br/> <span>Wordpress news template</span></h1> -->
                        <a href="#">
                            <h1> <img src="{{ $content->logo }}" alt="mpnews" /><br /> </h1>
                        </a>
                        <h5> {{ bangla_date(time(), "en") }}</h5>
                    </div>
                    <!--/.logo-->
                </div>
                <!--/.end col md 6-->
                <div class="col-xl-8 col-md-7 col-2">
                </div>
                <!--/.end col md 8-->

                <div class="col-xl-1 col-md-2 col-4 header-top-right-side text-right">
                    <span class="flymenu-icon"><i class="fa fa-bars"></i></span>
                    {{-- <span class="top-search-icon"><i class="fa fa-search"></i></span> --}}
                </div>
                <!--/.end col md 1-->
            </div>
            <!--/.row-->


        </div>
        <!--/.header top one-->

    </div>
    <!--/.flying-header-top-one-->

    </div>
    </div>

    <div class="container">
        <div class="news-ticker">
            <div class="row">

                <div class="col-xl-1 col-md-2 col-3 pr-0">
                    <h3 class="news-ticker-title">সর্বশেষ</h3>
                </div>

                <div class="col-xl-11 col-md-10 col-9 pl-0">
                    <div id="ticker-box">
                        <ul>
                            @foreach ($leatestNews as $item)
                            <li><a href="{{ route('news',$item->id) }}">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.news-ticker-->



    <div class="header-bottom-one margin-tb">
        <div class="container">
            <div class="row">

                <div class="col-md-12 ">
                    <div class="horizontal-ad-section my-2">

                        <img src="{{ $sponsor->top }}" alt="mpnews">
                    </div>
                </div>

            </div>
            <!--/.row-->
        </div>
        <!--/.end col md 6-->
    </div>
    </div>
    <!--/.header bottom area one-->
</header>
