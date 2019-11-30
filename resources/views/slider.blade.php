@section('slider')
    <div class="content">
        <div class="wrapper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="/img/slide-1.png" alt="slide-1.png"></div>
                    <div class="swiper-slide"><img src="/img/slide-2.png" alt="slide-2.png"></div>
                    <div class="swiper-slide"><img src="/img/slide-3.png" alt="slide-3.png"></div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
@show
