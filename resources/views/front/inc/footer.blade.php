

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

    </footer>