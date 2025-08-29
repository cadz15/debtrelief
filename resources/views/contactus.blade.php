@section('title', 'Contact Us')

@section('content')

<!-- Header -->
<header class="header py-20 mb:py-28 md:pt-36 xl:pt-44 xl:pb-20"
    style="background-image: url({{ asset('images/bg-paralax.webp') }}); background-size: cover; background-attachment: fixed; ">
    <div class="container md:mt-1 px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        
        <!-- Content Section with Inline Blur BG -->
        <div class="mb-4 md:mb-16 mt-8 md:mt-0 p-4"
            data-aos="fade-right">
            <div class="flex flex-col gap-y-2" id="hero-left-container">
               <span class="text-white text-4xl leading-14 font-bold">Thank you for your interest in our Consulting Services. One of our consultants will reach out to you within on business day.</span>
               <span class="text-white text-xl ">FCA National Services is not a lender. We provide consultation and referral services only. Results may vary. No guarantees.</span>
            </div>
        </div>

        <!-- Video Section -->
        <div class="" data-aos="fade-left">
            <div class="mx-auto mt-10 p-5 px-8 bg-white shadow-md rounded">
                <form action="" method="post" class="flex flex-col gap-4 justify-start mt-8">
                    @csrf
                    <div class="flex flex-col">
                        <label for="first_name" class="text-sm">First Name *</label>
                        <input type="text" name="first_name" required id="first_name" placeholder="First Name" class="border border-gray-200 rounded p-2 text-sm">
                        @error('first_name')
                            <div class="text-red-700 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="last_name" class="text-sm">last Name *</label>
                        <input type="text" name="last_name" required id="last_name" placeholder="Last Name" class="border border-gray-200 rounded p-2 text-sm">
                         @error('last_name')
                            <div class="text-red-700 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="phone_number" class="text-sm">Phone Number *</label>
                        <input type="text" name="phone_number" required id="phone_number" placeholder="Phone Number" class="border border-gray-200 rounded p-2 text-sm">
                         @error('phone_number')
                            <div class="text-red-700 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="email"  class="text-sm">Email *</label>
                        <input type="email" name="email" required id="email" placeholder="E-mail address" class="border border-gray-200 rounded p-2 text-sm">
                         @error('email')
                            <div class="text-red-700 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex gap-2 justify-start items-start mt-1">
                        <input type="checkbox" required name="opt_1" id="opt_1" class="accent-blue-500 scale-125 items-start justify-self-start" />
                        <label for="opt_1" class="text-sm text-black">By checking this box, I consent to receive transactional messages related to my account, orders, or services I have requested from FCA National Services. These messages may include appointment reminders, order confirmations, and account notifications among others. Message frequency may vary. Message & Data rates may apply.Reply HELP for help or STOP to opt-out.</label>
                         @error('opt_1')
                            <div class="text-red-700 text-sm">Please check to continue!</div>
                        @enderror
                    </div>
                    <div class="flex gap-2 justify-start items-start mt-1">
                        <input type="checkbox" required name="opt_2" id="opt_2" class="accent-blue-500 scale-125 items-start justify-self-start" />
                        <label for="opt_2" class="text-sm text-black">By checking this box, I consent to receive marketing and promotional messages, including special offers, discounts, new product updates among others from FCA National Services. Message frequency may vary. Message & Data rates may apply. Reply HELP for help or STOP to opt-out.</label>
                         @error('opt_2')
                            <div class="text-red-700 text-sm">Please check to continue!</div>
                        @enderror
                    </div>

                    <button type="submit" class="bg-blue-800 text-white p-3 rounded-md mt-8">Submit</button>
                    <div class="text-center text-black text-sm">
                        <a href="{{ route('privacy.policy')}}">Privacy Policy</a> | <a href="{{ route('terms.use') }}">Terms Of Use</a>
                    </div>

                    <span class="text-black text-sm text-center mb-8">FCA National Services is not a lender. We provide consultation and referral services only. Results may vary. No guarantees.</span>
                </form>
            </div>
    </div> <!-- end of container -->
</header> <!-- end of header -->

@endsection


@section('disclaimer')
    <span class="text-center text-blue-900 text-sm">FCA National Services is not a lender, loan provider, or debt settlement company. We do not originate loans, extend credit, or provide debt settlement services. Our role is to provide educational resources and connect individuals with independent third-party providers who may offer debt consolidation or repayment options. Outcomes vary depending on individual circumstances, and no specific results are guaranteed. The information provided by FCA National Services is for general informational purposes only and should not be considered legal, tax, or financial advice. You may wish to consult with a licensed attorney, financial advisor, or credit counselor for advice specific to your situation..</span>
@endsection

@include('layout.landing-page')

