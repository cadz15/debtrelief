<section class="text-gray-600 body-font" id="header">
    <div class="container px-5 py-20 mx-auto">
      <div class="text-center mb-20">
        <span class="sm:text-xl text-xl font-medium title-font text-gray-900">HOW IT WORKS</span>
        <div class="flex justify-center">
            <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>

        <h1 class=" text-9xlfont-bold title-font text-gray-900 mt-10 mb-4">{{ $howItWorksStepSection->section_title ?? '' }}</h1>
        
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div class="p-4 md:w-1/3 flex flex-col gap-y-6 text-center items-center" data-aos="zoom-in-up">
            <div class="w-52 h-52 md:w-36 md:h-36 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                <img src="{{ route('getFile', $howItWorksStepSection->step1_image ?? '') }}" />
              </div>
          <div class="flex-grow">
            <span class="text-gray-900 text-xl title-font font-bold mb-3">{{ $howItWorksStepSection->step1_title ?? '' }}</span>
            <p class="font-medium w-11/12">{{ $howItWorksStepSection->step1_description ?? '' }}</p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col gap-y-6 text-center items-center" data-aos="zoom-in-up">
          <div class="w-52 h-52 md:w-36 md:h-36 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <img src="{{ route('getFile', $howItWorksStepSection->step2_image ?? '') }}" />
          </div>
          <div class="flex-grow">
            <span class="text-gray-900 text-xl title-font font-bold mb-3">{{ $howItWorksStepSection->step2_title ?? '' }}</span>
            <p class="font-medium w-11/12">
              {{ $howItWorksStepSection->step2_description ?? '' }}
            </p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col gap-y-6 md:pt-4 pt-12 text-center items-center" data-aos="zoom-in-up">
            <div class="w-52 h-52 md:w-36 md:h-36 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                <img src="{{ route('getFile', $howItWorksStepSection->step3_image ?? '') }}" />
              </div>
          <div class="flex-grow">
            <span class="text-gray-900 text-xl title-font font-bold mb-3">{{ $howItWorksStepSection->step3_title ?? '' }}</span>
            <p class="font-medium w-11/12">
              {{ $howItWorksStepSection->step3_description ?? '' }}
            </p>
            
          </div>
        </div>
      </div>
      <div class="flex justify-center mt-30 md:mt-20">
          <a class="flex mx-auto btn-solid-lg" href="{{ route('cta') }}">Book A Free Consultation</a>
      </div>
    </div>
  </section>