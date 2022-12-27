<!-- jquery latest  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- bootstrap js file -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/front/javascript/mango-ticker-1.0.0.js"></script>
<script src="{{ asset('/') }}assets/front/javascript/main.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        autoHeight: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        dots:false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
</script>
<script>
    startTicker('ticker-box', { speed: 15, delay: 100 });
</script>
