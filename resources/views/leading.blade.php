

@section('title', 'Get Debt Relief Help')

@section('content')

<header  class="header py-12 mb:py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-20">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        <div class="mb-4 md:mb-16 lg:mt-20 xl:mt-30 xl:mr-12">
            <h1 class="h1-large mb-5">Be debt-free and take back control of your life.</h1>
            <p class="p-large mb-4">We at Debt Relief are prepared to assist. Regardless of your debt level, financial freedom is possible!</p>
            <ul class="list-none mb-8">
                <li><i class="fa-solid fa-circle-check text-green-600"></i> Credit Counseling</li>
                <li><i class="fa-solid fa-circle-check text-green-600"></i> Debt Consolidation</li>
                <li><i class="fa-solid fa-circle-check text-green-600"></i> Debt Relief</li>
                <li><i class="fa-solid fa-circle-check text-green-600"></i> Student Loan Consolidation</li>
            </ul>
        </div>
        <div class="">
            <style>
                .step { display: none; }
                .step.active { display: block; }
            </style>
        
            <div class="mx-auto mt-10 p-5 bg-white shadow-md rounded-lg">
                <h1 class="text-2xl font-bold  text-center mb-5">Get Debt Relief Help</h1>
                <form id="multiStepForm">
                    <!-- Step 1 -->
                    <div class="step active">
                        <span class="text-xl text-center text-blue-900 font-bold mb-3">Step 1: What has caused or contributed to your financial difficulty?</span>
                        <div class="space-y-4 mt-8 mx-4 mb-8">
                           
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Overwhelming Debt Payments" id="debtPayments"/>
                                <label for="debtPayments" class="text-lg cursor-pointer">Overwhelming Debt Payments</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Credit Card Interest Rates" id="interestRates">
                                <label for="interestRates" class="text-lg cursor-pointer">Credit Card Interest Rates</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Income Reduction or Work situation" id="incomeReduction">
                                <label for="incomeReduction" class="text-lg cursor-pointer">Income Reduction or Work situation</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Personal or Family Difficulties" id="familyDifficulties">
                                <label for="familyDifficulties" class="text-lg cursor-pointer">Personal or Family Difficulties</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Medical Bills and Expenses" id="medicalBills">
                                <label for="medicalBills" class="text-lg cursor-pointer">Medical Bills and Expenses</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Other" id="otherDifficulty">
                                <label for="otherDifficulty" class="text-lg cursor-pointer">Other</label>
                            </div>
                        </div>
                        <div class="mt-5 w-1/2 mx-auto">
                            <button type="button" class="btn btn-primary rounded-3xl next w-full">Continue</button>
                        </div>
                    </div>
        
                    <!-- Step 2 -->
                    <div class="step">
                        <span class="text-xl text-center text-blue-900 font-bold mb-3">Step 2: Do you need help with any of the following debts?</span>
                        <div class="space-y-4 mt-8 mx-4 mb-8">
                            <div  class="gap-2 items-center flex">
                                <input class="checkbox checkbox-primary" type="checkbox" name="debts[]" value="Credit Card" id="creditCard">
                                <label for="creditCard">Credit Card</label>
                            </div>
                            <div  class="gap-2 items-center flex">
                                <input class="checkbox checkbox-primary" type="checkbox" name="debts[]" value="Student Loans" id="studentLoans">
                                <label for="studentLoans">Student Loans</label>
                            </div>
                            <div  class="gap-2 items-center flex">
                                <input class="checkbox checkbox-primary" type="checkbox" name="debts[]" value="Tax Debts" id="taxDebts">
                                <label for="taxDebts">Tax Debts</label>
                            </div>
                            <div  class="gap-2 items-center flex">
                                <input class="checkbox checkbox-primary" type="checkbox" name="debts[]" value="Other Debts" id="otherDebts">
                                <label for="otherDebts">Other Debts</label>
                            </div>
                        </div>
                        <div class="mt-5 w-1/2 mx-auto">
                            <button type="button" class="btn btn-primary rounded-3xl next w-full">Continue</button>
                        </div>
                    </div>
        
                    <!-- Step 3 -->
                    <div class="step">
                        <span class="text-xl text-center text-blue-900 font-bold mb-3">Step 3: Do you own or rent your home?</span>
                        <div class="space-y-2 flex flex-row gap-8  mt-8 mx-4 mb-8 justify-around">
                            <div class="text-xl text-blue-900 font-bold mb-3">
                                <input class="checkbox checkbox-primary" type="radio" name="home_status" value="Own" id="own">
                                <label for="own">Own</label>
                            </div>
                            <div class="text-xl text-blue-900 font-bold mb-3">
                                <input class="checkbox checkbox-primary" type="radio" name="home_status" value="Rent" id="rent">
                                <label for="rent">Rent</label>
                            </div>
                            <div class="text-xl text-blue-900 font-bold mb-3">
                                <input class="checkbox checkbox-primary" type="radio" name="home_status" value="Other" id="otherHome">
                                <label for="otherHome">Other</label>
                            </div>
                        </div>
                        <div class="mt-5 w-1/2 mx-auto">
                            <button type="button" class="btn btn-primary rounded-3xl next w-full">Continue</button>
                        </div>
                    </div>
        
                    <!-- Step 4 -->
                    <div class="step">
                        <span class="text-xl text-center text-blue-900 font-bold mb-3">Step 4: Provide your details</h3>
                        <div class="space-y-2 mt-8 mx-4 mb-8">
                            <div>
                                <fieldset class="fieldset w-full">
                                    <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">How much debt do you have?</legend>
                                    <input type="range" required  min="0" max="150000" value="20000" class="range w-full" id="debtRange" name="debt_range" />
                                    <span class="font-black text-center justify-self-center text-lg text-cyan-700 border border-cyan-600 p-2 px-6 w-fit rounded-3xl">$20,000</span>
                                </fieldset>
                            </div>
                            <div>
                                <fieldset class="fieldset">
                                    <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">First Name</legend>
                                    <input type="text" required  class="input w-full text-lg" id="firstName" name="first_name" />
                                  </fieldset>
                            </div>
                            <div>
                                <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">Last Name</legend>
                                <input type="text" required  class="input w-full text-lg" id="lastName" name="last_name">
                            </div>
                            <div class="flex flex-row gap-2">
                                <div class="w-2/3">
                                    <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">Phone</legend>
                                    <input type="text" required  class="input w-full text-lg" id="phoneNumber" name="phone_number">
                                </div>
                                <div class="w-1/3">
                                    <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">Zip</legend>
                                    <input type="text" required  class="input w-full text-lg" id="zip" name="zip">
                                </div>
                            </div>
                            <div>
                                <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">Email</legend>
                                <input type="email"  required class="input w-full text-lg" id="email" name="email">
                            </div>
                           
                        </div>
                        <div class="mt-5 w-1/2 mx-auto">
                            <button type="submit" class="btn btn-primary rounded-3xl w-full">Submit</button>
                        </div>
                        <div  class="gap-2 items-center flex mt-12">
                            {{-- <input class="checkbox checkbox-primary checkbox-sm" type="checkbox" name="debts[]" value="Other Debts" id="confirm"> --}}
                            <label for="confirm" class="text-sm font-normal text-gray-500">By clicking “Submit”, you agree that the phone number and email address you are providing may be used to contact you by Debt Cure (including auto-dialed/auto-selected and prerecorded calls, as well as text/SMS messages). Msg. and data rates apply, and your consent to such contact/marketing is not required for purchase. We may also e-mail you and you may let us know at any time if you are no longer interested in hearing from us via a particular communication platform.</label>
                        </div>
                    </div>
                </form>
            </div>
        
        </div>
    </div> 
</header> 

@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
@endsection


@include('layout.landing-page')