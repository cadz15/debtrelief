 <!-- Header -->
 <header  class="header py-20 mb:py-28 md:pt-36 xl:pt-44 xl:pb-20">
    <div class="container md:mt-1 px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        <div class="mb-4 md:mb-16 mt-8 md:mt-0" data-aos="fade-right">
            <div class="flex flex-col gap-y-2">
                {!! $hero !!}
            </div>
            <div class="w-full flex mt-8 justify-center">
                <a class="btn-solid-lg justify-self-center" href="{{ route('cta') }}">Book A Free Consultation</a>
            </div>
        </div>
        <div class="xl:text-right" data-aos="fade-left">
            <video controls autoplay src="{{ route('getFile', $homeRightSection?->video?? '') }}" alt="video" class="inline w-full rounded">
        </div>
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->