<section id="reviews" class="bg-[#f9f5ef] py-16">
    <div class="container mx-auto px-6 text-center">
        <h3 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-10">
            I help people like you realise their <i>full potential</i>…
        </h3>

        <!-- Swiper Container -->
        <div class="relative">
            <div class="swiper mySwiper pb-12">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide flex flex-col items-center text-center px-6">
                        <p  class="text-gray-700 text-lg mb-6 italic">
                            "My journey with Sherell is something I would hold near my heart forever."
                        </p>
                        <img
                            src="https://movetobemore.com/wp-content/uploads/mine-du-toit.jpg"
                            alt="Mine du Toit"
                            class="w-32 h-32 object-cover rounded-lg mx-auto mb-4"
                        />
                        <h4 class="font-semibold text-gray-800">Mine du Toit</h4>
                        <p class="text-gray-500 text-sm">Chiropractor</p>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide flex flex-col items-center text-center px-6">
                        <p class="text-gray-700 text-lg mb-6 italic">
                            "Coaching with Sherell created fundamental shifts for me personally and professionally."
                        </p>
                        <img
                            src="https://movetobemore.com/wp-content/uploads/sherell-diane-testimonial.jpg"
                            alt="Kgabo Hlaisi"
                            class="w-32 h-32 object-cover rounded-lg mx-auto mb-4"
                        />
                        <h4 class="font-semibold text-gray-800">Kgabo Hlaisi</h4>
                        <p class="text-gray-500 text-sm">HR Manager - SEF</p>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide flex flex-col items-center text-center px-6">
                        <p class="text-gray-700 text-lg mb-6 italic">
                            "She has helped me develop as an executive over a group of companies..."
                        </p>
                        <img
                            src="https://movetobemore.com/wp-content/uploads/Tasha-Bezuidenhout.jpg"
                            alt="Tasha Bezuidenhout"
                            class="w-32 h-32 object-cover rounded-lg mx-auto mb-4"
                        />
                        <h4 class="font-semibold text-gray-800">Tasha Bezuidenhout</h4>
                        <p class="text-gray-500 text-sm">Head of Legal (LLB)</p>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination mt-8"></div>
            </div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-next text-gray-700 after:text-3xl !right-0"></div>
            <div class="swiper-button-prev text-gray-700 after:text-3xl !left-0"></div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Only initialize if Swiper is available and the container exists
        if (typeof Swiper !== 'undefined' && document.querySelector('.mySwiper')) {
            new Swiper('.mySwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                },
            });
        }
    });
    </script>
