<!DOCTYPE html>
<html lang="en">
    @include('front.inc.head')
    @include('front.inc.header')
    <!--/============ End Header ===========  -->
    <section>
        <div class="container " style="padding-top: 9rem;padding-bottom: .5rem;">
            <div class="news-ticker">
                <div class="row">

                    <div class="col-xl-1 col-md-2 col-3 pr-0">
                        <h3 class="news-ticker-title">সর্বশেষ</h3>
                    </div>

                    <div class="col-xl-11 col-md-10 col-9 pl-0">
                        <marquee>
                            @foreach ($leatestNews as $item)
                            <span class="mx-2"><a href="{{ route('news',$item->id) }}">{{ $item->title }}</a></span>
                            @endforeach
                        </marquee>
                        {{-- <div id="ticker-box">
                            <ul>

                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="main-body">

            @yield('content')
        </div>
        <div class="horizontal-ad-section">
            <a href="{{ $sponsor->bottom_link }}">
                <img src="{{ $sponsor->bottom }}" alt="mpnews">
            </a>
        </div>

    </section>

    </div>

    </div>
    <!--./row-->

    </div>

    </section>
    <!--/============ categories-sec ===========  -->





    @include('front.inc.footer')
    @include('front.inc.script')

    </body>

</html>
