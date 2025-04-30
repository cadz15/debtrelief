 <!-- Header -->
 <header  class="header py-8 mb:py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-20">
    <div class="container md:mt-1 px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        <div class="mb-4 md:mb-16 mt-8 md:mt-0" data-aos="fade-right">
            <h1 class="h1-large mb-5">{{ $heroSection?->section_title ?? '' }}</h1>
            <p class="p-large mb-4">{{ $heroSection?->section_description ?? '' }}</p>
            <ul class="list-none mb-8">
                @php
                    $bullets = $heroSection?->hero_bullets ?? [];
                @endphp
                @foreach ($bullets as $bullet)
                    <li><i class="fa-solid fa-circle-check text-green-600"></i> {{ $bullet }}</li>
                @endforeach
            </ul>
            <a class="btn-solid-lg" href="{{ route('cta') }}">Book A Free Consultation</a>
        </div>
        <div class="xl:text-right" data-aos="fade-left">
            <video controls autoplay src="{{ route('getFile', $homeRightSection?->video?? '') }}" alt="video" class="inline w-full rounded">
        </div>
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->