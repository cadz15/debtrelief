<!-- Header -->
<header class="header py-20 mb:py-28 md:pt-36 xl:pt-44 xl:pb-20"
    style="background-image: url({{ asset('images/hero-bg.png') }}); background-size: cover; background-attachment: fixed; ">
    <div class="container md:mt-1 px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        
        <!-- Content Section with Inline Blur BG -->
        <div class="mb-4 md:mb-16 mt-8 md:mt-0 p-4 rounded-lg shadow-lg"
            style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);"
            data-aos="fade-right">
            <div class="flex flex-col gap-y-2" id="hero-left-container">
                {!! $hero !!}
            </div>
            <div class="w-full flex mt-8 justify-center">
                <a class="btn-solid-lg justify-self-center" href="{{ route('cta') }}">Book A Free Consultation</a>
            </div>
        </div>

        <!-- Video Section -->
        <div class="xl:text-right" data-aos="fade-left">
            <video controls autoplay src="{{ route('getFile', $homeRightSection?->video?? '') }}" alt="video" class="inline w-full rounded"></video>
        </div>
    </div> <!-- end of container -->
</header> <!-- end of header -->
