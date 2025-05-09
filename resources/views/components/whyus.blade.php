<!-- Features -->
<div id="whyus">
    <div class="container my-24 mb-24">

        <div class="text-center mb-20 mt-8" data-aos="fade-up-right">
            <span class="sm:text-xl text-xl font-medium title-font text-gray-900">OUR VALUES</span>
            <div class="flex justify-center">
                <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
    
            <h1 class=" text-9xlfont-bold title-font text-gray-900 mt-10 mb-4">{{ $cardData?->section_title ?? '' }}</h1>
            
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2  gap-4">
            <div class="w-full flex flex-col py-12 gap-y-4 text-center justify-center items-center bg-gray rounded-lg" data-aos="zoom-in-up">
                <img class="w-20 h-20" src="{{ route('getFile', $cardData?->card1_image ?? '') }}" alt="alternative" />
                <h5>{{ $cardData?->card1_title ?? '' }}</h5>
                <p class="px-8">
                    {{ $cardData?->card1_description ?? '' }}
                </p>
            </div>
            <div class="w-full flex flex-col py-12 gap-y-4 text-center justify-center items-center bg-gray rounded-lg" data-aos="zoom-in-up">
                <img class="w-20 h-20" src="{{ route('getFile', $cardData?->card2_image ?? '') }}" alt="alternative" />
                <h5>{{ $cardData?->card2_title ?? '' }}</h5>
                <p class="px-8">
                    {{ $cardData?->card2_description ?? '' }}
                </p>
            </div>
            <div class="w-full flex flex-col py-12 gap-y-4 text-center justify-center items-center bg-gray rounded-lg" data-aos="zoom-in-up">
                <img class="w-20 h-20" src="{{ route('getFile', $cardData?->card3_image ?? '') }}" alt="alternative" />
                <h5>{{ $cardData?->card3_title ?? '' }}</h5>
                <p class="px-8">
                   {{ $cardData?->card3_description ?? '' }}
                </p>
            </div>
            <div class="w-full flex flex-col py-12 gap-y-4 text-center justify-center items-center bg-gray rounded-lg" data-aos="zoom-in-up">
                <img class="w-20 h-20" src="{{ route('getFile', $cardData?->card4_image ?? '') }}" alt="alternative" />
                <h5>{{ $cardData?->card4_title ?? '' }}</h5>
                <p class="px-8">
                    {{ $cardData?->card4_description ?? '' }}
                </p>
            </div>
        </div>
        <div class="flex justify-center mt-30 md:mt-20">
            <a class="flex mx-auto btn-solid-lg" href="{{ route('cta') }}">Book A Free Consultation</a>
        </div>
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of features -->