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
                        <img src="{{ asset('/') }}assets/front/images/logo-footer.png" alt="wpnews" class="img-fluid" />
                    </div>
                    <!-- /.footer-logo -->
                </div>
                <div class="col-md-4 editor-area p-4">
                    <div class="footer-author-content">
                        <p class="editor-number">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>{{ $content->phone }}</span>
                        </p>
                        <a href="mailto:{{ $content->email }}" class="editor-email">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>{{ $content->email }}</span>
                        </a>
                    </div>
                    <!-- /.editor-area -->
                </div>
                <div class="col-md-4 footer-address  p-4">
                    <p class="footer-address-bn">

                        {{ $content->address }}
                    </p>

                </div>
            </div>
        </div>
    </div>

</footer>
