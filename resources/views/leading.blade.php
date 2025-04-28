

@section('title', 'Get Debt Relief Help')

@section('content')

<header  class="header mt-12 md:mt-1 py-12 mb:py-28 text-center md:pt-36 lg:text-left xl:pb-20">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        <div class="mb-4 md:mb-16 lg:mt-20 xl:mr-12">
            <h1 class="h1-large mb-5">{{ $consultationData?->section_title ?? '' }}</h1>
            <p class="p-large mb-4">{{ $consultationData?->section_description ?? '' }}</p>
            <ul class="list-none mb-8">
                @php
                    $bullets = $consultationData?->hero_bullets ?? [];
                @endphp

                @foreach ($bullets as $index => $bullet)
                    <li><i class="fa-solid fa-circle-check text-green-600"></i> {{ $bullet }}</li>
                @endforeach
            </ul>
        </div>
        <div class="">
            <style>
                .step { display: none; }
                .step.active { display: block; }
            </style>
        
            <div class="mx-auto mt-10 p-5 px-8 bg-white shadow-md rounded-lg">
                <h1 class="text-2xl font-bold text-center mb-5">{{ $formData?->form_header ?? '' }}</h1>
                <form method="POST" action="{{ route('cta.store') }}">
                    @csrf
                    <!-- Step 1 -->
                    @if($errors->any() || Session::has('success'))
                        <div class="step transition-all" data-step="1">
                    @else
                        <div class="step active transition-all" data-step="1">
                    @endif                    
                        <span class="text-xl text-center text-blue-900 font-bold mb-3"> What has caused or contributed to your financial difficulty?</span>
                        <div class="space-y-4 mt-8 mx-4 mb-8">
                           
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Overwhelming Debt Payments" id="debtPayments"
                                {{ old('financial_difficulty') && in_array('Overwhelming Debt Payments', old('financial_difficulty')) ? 'checked' : '' }}/>
                                <label for="debtPayments" class="text-lg cursor-pointer">Overwhelming Debt Payments</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Credit Card Interest Rates" id="interestRates" 
                                {{ old('financial_difficulty') && in_array('Credit Card Interest Rates', old('financial_difficulty')) ? 'checked' : '' }}/>
                                <label for="interestRates" class="text-lg cursor-pointer">Credit Card Interest Rates</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Income Reduction or Work situation" id="incomeReduction" 
                                {{ old('financial_difficulty') && in_array('Income Reduction or Work situation', old('financial_difficulty')) ? 'checked' : '' }}/>
                                <label for="incomeReduction" class="text-lg cursor-pointer">Income Reduction or Work situation</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Personal or Family Difficulties" id="familyDifficulties" 
                                {{ old('financial_difficulty') && in_array('Personal or Family Difficulties', old('financial_difficulty')) ? 'checked' : '' }}/> 
                                
                                <label for="familyDifficulties" class="text-lg cursor-pointer">Personal or Family Difficulties</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Medical Bills and Expenses" id="medicalBills" 
                                {{ old('financial_difficulty') && in_array('Medical Bills and Expenses', old('financial_difficulty')) ? 'checked' : '' }}/>
                                <label for="medicalBills" class="text-lg cursor-pointer">Medical Bills and Expenses</label>
                            </div>
                            <div class="gap-2 items-center flex">
                                <input type="checkbox" class="checkbox checkbox-primary" name="financial_difficulty[]" value="Other" id="otherDifficulty" 
                                {{ old('financial_difficulty') && in_array('Other', old('financial_difficulty')) ? 'checked' : '' }}/>
                                <label for="otherDifficulty" class="text-lg cursor-pointer">Other</label>
                            </div>
                        </div>
                        <div class="mt-5 w-1/2 mx-auto">
                            <button type="button" class="btn btn-primary rounded-3xl next w-full">Continue</button>
                        </div>
                    </div>
        
                    <!-- Step 2 -->
                    <div class="step transition-all" data-step="2">
                        <span class="text-xl text-center text-blue-900 font-bold mb-3"> Do you need help with any of the following debts?</span>
                        <div class="space-y-4 mt-8 mx-4 mb-8">
                            <div  class="gap-2 items-center flex">
                                <input class="checkbox checkbox-primary " type="checkbox" name="debts[]" value="Credit Card" id="creditCard" 
                                {{ old('debts') && in_array('Credit Card', old('debts')) ? 'checked' : '' }}/>
                                <label for="creditCard" class="cursor-pointer">Credit Card</label>
                            </div>
                            <div  class="gap-2 items-center flex">
                                <input class="checkbox checkbox-primary " type="checkbox" name="debts[]" value="Student Loans" id="studentLoans" 
                                {{ old('debts') && in_array('Student Loans', old('debts')) ? 'checked' : '' }}/>
                                <label for="studentLoans" class="cursor-pointer">Student Loans</label>
                            </div>
                            <div  class="gap-2 items-center flex">
                                <input class="checkbox checkbox-primary " type="checkbox" name="debts[]" value="Tax Debts" id="taxDebts" 
                                {{ old('debts') && in_array('Tax Debts', old('debts')) ? 'checked' : '' }}/>
                                <label for="taxDebts" class="cursor-pointer">Tax Debts</label>
                            </div>
                            <div  class="gap-2 items-center flex">
                                <input class="checkbox checkbox-primary " type="checkbox" name="debts[]" value="Other Debts" id="otherDebts" 
                                {{ old('debts') && in_array('Other Debts', old('debts')) ? 'checked' : '' }}/>
                                <label for="otherDebts" class="cursor-pointer">Other Debts</label>
                            </div>
                        </div>
                        <div class="mt-5 w-1/2 mx-auto">
                            <button type="button" class="btn btn-primary rounded-3xl next w-full">Continue</button>
                        </div>
                    </div>
        
                    <!-- Step 3 -->
                    <div class="step transition-all" data-step="3">
                        <span class="text-xl text-center text-blue-900 font-bold mb-3"> Do you own or rent your home?</span>
                        <div class="space-y-2 flex flex-row gap-8  mt-8 mx-4 mb-8 justify-around">
                            <div class="text-xl text-blue-900 font-bold mb-3">
                                <input class="checkbox checkbox-primary " type="radio" name="home_status" value="Own" id="own" 
                                {{ old('home_status') == 'Own' ? 'checked' : '' }}/>
                                <label for="own" class="cursor-pointer">Own</label>
                            </div>
                            <div class="text-xl text-blue-900 font-bold mb-3">
                                <input class="checkbox checkbox-primary " type="radio" name="home_status" value="Rent" id="rent" 
                                {{ old('home_status') == 'Rent' ? 'checked' : '' }}/>
                                <label for="rent" class="cursor-pointer">Rent</label>
                            </div>
                            <div class="text-xl text-blue-900 font-bold mb-3">
                                <input class="checkbox checkbox-primary " type="radio" name="home_status" value="Other" id="otherHome" 
                                {{ old('home_status') == 'Other' ? 'checked' : '' }}/>
                                <label for="otherHome" class="cursor-pointer">Other</label>
                            </div>
                        </div>
                        <div class="mt-5 w-1/2 mx-auto">
                            <button type="button" class="btn btn-primary rounded-3xl next w-full">Continue</button>
                        </div>
                    </div>
        
                    <!-- Step 4 -->
                    @if($errors->any())
                        <div class="step active transition-all" data-step="4">
                    @else
                        <div class="step transition-all" data-step="4">
                    @endif  
                        <span class="text-xl text-center text-blue-900 font-bold mb-3"> Provide your details</h3>
                        <div class="space-y-2 mt-8 mx-4 mb-8">
                            <div>
                                <fieldset class="fieldset w-full">
                                    <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">How much debt do you have?</legend>
                                    <input type="range" required  min="1" max="150000" class="range w-full" id="debtRange" name="debt_amount"  value="{{ old('debt_amount', 20000) }}" />
                                    <span class="font-black text-center justify-self-center text-lg text-cyan-700 border border-cyan-600 p-2 px-6 w-fit rounded-3xl">$1</span>
                                </fieldset>
                                @error('debt_amount')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <fieldset class="fieldset">
                                    <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">First Name</legend>
                                    <input type="text" required  class="input w-full text-lg" id="firstName" name="first_name" 
                                    value="{{ old('first_name', '') }}"/>
                                  </fieldset>
                                @error('first_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">Last Name</legend>
                                <input type="text" required  class="input w-full text-lg" id="lastName" name="last_name" 
                                value="{{ old('last_name', '') }}"/>
                                @error('last_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-row gap-2">
                                <div class="w-2/3">
                                    <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">Phone</legend>
                                    <input type="text" required  class="input w-full text-lg" id="phoneNumber" name="phone_number" 
                                    value="{{ old('phone_number', '') }}"/>
                                    @error('phone_number')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-1/3">
                                    <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">Zip</legend>
                                    <input type="text" required  class="input w-full text-lg" id="zip" name="zip" 
                                    value="{{ old('zip', '') }}"/>
                                    @error('zip')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div>
                                <legend class="fieldset-legend text-lg text-gray-500 font-normal text-left">Email</legend>
                                <input type="email"  required class="input w-full text-lg" id="email" name="email" 
                                value="{{ old('email', '') }}"/>
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                           
                        </div>
                        <div class="mt-5 w-1/2 mx-auto">
                            <button type="submit" class="btn btn-primary rounded-3xl w-full">Submit</button>
                        </div>
                        <div  class="gap-2 items-center flex mt-12">
                            {{-- <input class="checkbox checkbox-primary checkbox-sm" type="checkbox" name="debts[]" value="Other Debts" id="confirm"> --}}
                            <label for="confirm" class="text-sm font-normal text-gray-500">{{ $formData?->term_disclaimer ?? ''  }}</label>
                        </div>
                    </div>

                    @if(Session::has('success'))
                        <div class="step active transition-all " data-step="5">
                            <div class="flex flex-col gap-y-2">

                                {!! $formData?->complete_message ?? '' !!}
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        
        </div>
    </div> 
</header> 

@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    <style>
        .validation-error {
            color: #f87171; /* Tailwind's red-400 */
            font-size: 0.875rem;
            margin-top: 0.5rem;
            text-align: center;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
@endsection


@include('layout.landing-page')