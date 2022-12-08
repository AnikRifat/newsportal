<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="favicon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/') }}assets/front/images/logo.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}assets/front/images/logo.png">
        @yield('meta')


        <!-- bootstrap css file -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <!-- fontawesome css -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- custom fonts -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/fonts/custom/custom-fonts.css">


        <!-- custom stylesheet -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/style.css">

    </head>
    <header class="header-area-one">
        <div class="container">
            <div class="header-top-one desktop-version">
                <div class="row padding-tb">
                    <div class="col-xl-3 col-md-3 col-6">
                        <div class="logo-area-one">
                            <!-- <h1>WP News <br/> <span>Wordpress news template</span></h1> -->
                            <a href="{{ route('index') }}">
                                <h1> <img src="{{ asset('/') }}assets/front/images/logo.png" alt="wpnews" /><br /> </h1>
                            </a>
                            <h5> The News Publisher For Everyone</h5>
                        </div>
                        <!--/.logo-->
                    </div>
                    <!--/.end col md 6-->
                    <div class="col-xl-8 col-md-7 col-2">
                        <div class="main-menu-one">
                            <ul>
                                @foreach ($category as $item)
                                <li><a href="{{ route('category',$item->id) }}">{{ $item->name }}</a></li>
                                @endforeach


                            </ul>
                        </div>
                        <!--/.main menu-->
                    </div>
                    <!--/.end col md 8-->

                    <div class="col-xl-1 col-md-2 col-4 header-top-right-side text-right">
                        {{-- <span class="flymenu-icon"><i class="fa fa-bars"></i></span> --}}
                        <span class="top-search-icon"><i class="fa fa-search"></i></span>
                    </div>
                    <!--/.end col md 1-->
                </div>
                <!--/.row-->

                <div class="wpnews-search-box">
                    <div class="container text-center">
                        <input type="search" class="nav-search-box" placeholder="কি খুঁজতে চান">
                        <span class="top-search-icon"><i class="fa fa-search"></i></span>
                        <span class="close-search-box"><i class="fa fa-times"></i></span>

                    </div>
                </div>
                <!--/.wpnews-search-boxp-->
            </div>
            <!--/.header top one-->
        </div>

        <!--/.fly-menu-->
        <div class="container">
            <div class="header-top-one mobile-menu">
                <div class="row padding-tb">
                    <div class="col-xl-3 col-md-3 col-6">
                        <div class="logo-area-one">
                            <!-- <h1>WP News <br/> <span>Wordpress news template</span></h1> -->
                            <a href="#">
                                <h1> <img src="{{ asset('/') }}assets/front/images/logo.png" alt="wpnews" /><br /> </h1>
                            </a>
                            <h5> The News Publisher For Everyone</h5>
                        </div>
                        <!--/.logo-->
                    </div>
                    <!--/.end col md 6-->
                    <div class="col-xl-8 col-md-7 col-2">
                    </div>
                    <!--/.end col md 8-->

                    <div class="col-xl-1 col-md-2 col-4 header-top-right-side text-right">
                        {{-- <span class="flymenu-icon"><i class="fa fa-bars"></i></span> --}}
                        <span class="top-search-icon"><i class="fa fa-search"></i></span>
                    </div>
                    <!--/.end col md 1-->
                </div>
                <!--/.row-->

                <div class="wpnews-search-box">
                    <div class="container text-center">
                        <input type="search" class="nav-search-box" placeholder="কি খুঁজতে চান">
                        <span class="top-search-icon"><i class="fa fa-search"></i></span>
                        <span class="close-search-box"><i class="fa fa-times"></i></span>
                    </div>
                </div>
                <!--/.wpnews-search-boxp-->
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
                                @foreach ($news as $item)
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
                    <div class="col-md-6 ">
                        <div class="date-area">
                            <p> {{ bangla_date(time(), "en") }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-1">
                        <div class="horizontal-ad-section">
                            <a href="http://sawdahmartbd.com/"></a>
                            <img class="img-thumbnail" src="{{ asset('/') }}assets/front/images/advertisement.jpg"
                              alt="wpnews" style="
                              height: 4rem;
                              width: auto;
                              float: right;
                          ">
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
    <!--/============ End Header ===========  -->
    <section>
        @yield('content')


    </section>

    </div>

    </div>
    <!--./row-->

    </div>

    </section>
    <!--/============ categories-sec ===========  -->





    <footer class="footer-area-one">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 footer-link-widget">
                        <ul class="footer-link">
                            @foreach ($category as $item)
                            <li><a href="{{ route('category',$item->id) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                        <!-- /.footer-link -->
                    </div>
                    <!-- /.footer-link-widget -->

                    <div class="v-line footer-v-line"></div>
                    <!-- /.vertical line -->
                </div>
            </div>
        </div>
        <!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="footer-logo">
                            <img src="{{ asset('/') }}assets/front/images/logo-footer.png" alt="wpnews"
                              class="img-fluid" />
                        </div>
                        <!-- /.footer-logo -->
                    </div>
                    <div class="col-md-4 editor-area">
                        <div class="footer-author-content">
                            <p class="main-editor">pradan shompadok: Babu</p>
                            <p class="sec-editor">shompadok: rony</p>
                            <p class="editor-number">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>+8801941222202</span>
                            </p>
                            <a href="mailto:info@yourdomain.com" class="editor-email">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>support@mpnews24bd.com</span>
                            </a>
                        </div>
                        <!-- /.editor-area -->
                    </div>
                    <div class="col-md-4 footer-address">
                        <p class="footer-address-bn">

                            দ্বিতিয় তলা, ৪২ নাম্বার বাসা , সড়ক ৩/এ , ধানমন্ডী, ঢাকা 
                        </p>
                        <p class="footer-address-en">
                            Second Floor, House No. 42, Road 3/A, Dhanmondi, Dhaka
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.footer-bottom -->
        <div class="footer-credit">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <p class="texts-right">
                            Design & Developed by <a href="#">Anik Rifat</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jquery latest  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- bootstrap js file -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}assets/front/javascript/mango-ticker-1.0.0.js"></script>
    <script src="{{ asset('/') }}assets/front/javascript/main.js"></script>

    <script>
        startTicker('ticker-box', { speed: 15, delay: 100 });
    </script>


    </body>

</html>
