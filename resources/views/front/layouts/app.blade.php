<!DOCTYPE html>
<html lang="en">
    @include('front.inc.head')
    @include('front.inc.header')
    <!--/============ End Header ===========  -->
    <section>
        @yield('content')
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
