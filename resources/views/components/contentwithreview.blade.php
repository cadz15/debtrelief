<div class="bg-gray py-16">
    <div class="container flex">
        <div class="hidden md:w-4/12 md:block" data-aos="fade-up-right">
            <div class="xl:text-right md:block hidden">
                <img class="inline" src="{{ route('getFile', $howItWorksFeatured->section_image) }}" alt="alternative" />
            </div>
        </div>
        <div class="w-full md:w-8/12 md:pl-14" data-aos="fade-up-left">
            <div class="text-center md:text-left ">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-5xl">
                    {{ $howItWorksFeatured->section_title ?? ''}}
                </h2>
                <p class="mt-12 md:px-0 px-4 text-lg text-justify">
                    {{ $howItWorksFeatured->section_description ?? '' }}                   
                </p>
            </div>
            <div class="px-4 pt-4 pb-2 border-indigo-500 border-l-4 ml-4 my-12">
                <p>
                    {{ $howItWorksFeatured->featured_review ?? '' }}
                </p>

                <div class="flex items-center mt-6">
                    <img class="inline-block size-10 rounded-full ring-2 ring-white" src="{{ route('getFile', $howItWorksFeatured->reviewer_image ?? '') }}" alt="">
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900">Patick Smith</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>