<!-- Testimonials -->
<div class="slider-1 py-32 pt-24 bg-gray" id="testimonials">
    <div class="container px-4 sm:px-8">
        <div class="text-center mb-20">
            <span class="sm:text-xl text-xl font-medium title-font text-gray-900">CLIENT FEEDBACK</span>
            <div class="flex justify-center">
                <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
            </div>
    
            <h2 class="my-12 mb-20 text-center lg:max-w-xl lg:mx-auto">Read success stories from our happy clients</h2>
            
        </div>
        

        <!-- Card Slider -->
        <div class="slider-container">
            <div class="swiper-container card-slider">
                <div class="swiper-wrapper">
                    
                    @foreach($testimonials as $testimonial)
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ route('getFile', $testimonial->image) }}" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">{{ $testimonial->review }}</p>
                                    <p class="testimonial-author">{{ $testimonial->name }} @if($testimonial->sub_details) , {{ $testimonial->sub_details }} @endif</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
                    @endforeach

                </div> <!-- end of swiper-wrapper -->

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- end of add arrows -->

            </div> <!-- end of swiper-container -->
        </div> <!-- end of slider-container -->
        <!-- end of card slider -->

    </div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of testimonials -->