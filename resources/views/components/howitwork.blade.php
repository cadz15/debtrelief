<section class="text-gray-600 body-font" id="header">
    <div class="container px-5 py-20 mx-auto">
      <div class="text-center mb-20">
        <h1 class="sm:text-xl text-xl font-medium title-font text-gray-900">HOW IT WORKS</h1>
        <div class="flex justify-center">
            <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>

        <h1 class=" text-9xlfont-bold title-font text-gray-900 mt-10 mb-4">It's easy to get started</h1>
        
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div class="p-4 md:w-1/3 flex flex-col gap-y-6 text-center items-center">
            <div class="w-52 h-52 md:w-36 md:h-36 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                <img src="{{ asset('images/man sit.png') }}" />
              </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-xl title-font font-bold mb-3">Submit your info</h2>
            <p class="font-medium w-11/12">When you contact Debt Cure, we start by understanding your current financial circumstances. This includes reviewing your debts, income, expenses, and financial goals.</p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col gap-y-6 text-center items-center">
          <div class="w-52 h-52 md:w-36 md:h-36 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <img src="{{ asset('images/lady sit.png') }}" />
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-xl title-font font-bold mb-3">We negotiate your debt</h2>
            <p class="font-medium w-11/12">
                Based on the information gathered during the consultation, our team of experts creates a personalized debt relief plan tailored to your specific needs.
            </p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col gap-y-6 md:pt-4 pt-12 text-center items-center">
            <div class="w-52 h-52 md:w-36 md:h-36 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                <img src="{{ asset('images/man happy.png') }}" />
              </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-xl title-font font-bold mb-3">Live debt free!</h2>
            <p class="font-medium w-11/12">
                Once you approve the debt relief plan, we take action on your behalf. Our skilled negotiators engage with your creditors to potentially lower interest rates,
                 reduce the overall amount.
            </p>
            
          </div>
        </div>
      </div>
      <div class="flex justify-center mt-30 md:mt-20">
          <a class="flex mx-auto btn-solid-lg" href="{{ route('cta') }}">Book A Free Consultation</a>
      </div>
    </div>
  </section>