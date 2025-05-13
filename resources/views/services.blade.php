@section('title', 'Our Services')

@section('content')

 <div class="mt-12">
    <!-- Hero Section -->
    <section class="bg-primary py-20 px-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Our Practice Areas</h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">There is no set path or direction one must take.  Each person’s concerns represent a unique situation that demands focused individualized attention. Whether you require help with your debts, help to avoid foreclosure, help with bankruptcy or any other debt-related problem, FCA national service.org and our debt lawyers and certified debt specialists take the time to explain to you the important details of your situation and structure a course of action that will be most beneficial for you.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Practice Areas</h2>
                <div class="w-24 h-1 bg-primary mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-12 gap-8">
                <!-- Business Formation -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-regular fa-credit-card"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Consumer Debt Settlement</h3>
                    <p class="text-gray-600 mb-4">
                        <span >Experiencing a financial hardship and past due on your creditor payments? Our <strong>No Upfront Fee Debt Settlement service</strong> can reduce your outstanding balances to help <strong>get you out of debt in as quick as 1 to 60 months</strong>!&nbsp; Rather than lower your interest rates, we’ll actually <strong>reduce your total debt.<br></strong></span>
                    </p>
                    <a href="{{ route('services.business-debt') }}" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Contracts & Agreements -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-regular fa-building"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Business Debt Relief</h3>
                    <p class="text-gray-600 mb-4">
                        <span >With options from <strong>Debt Restructuring</strong>, <strong>Debt Settlement</strong>, <strong>Lawsuit Defense</strong>, and <strong>Bankruptcy</strong>.&nbsp; We offer every Debt Relief solution available to help your business in its time of need.&nbsp; With the <strong>lowest fees</strong> – there is no competition – as we help ensure that you get out of debt, not accumulate more!</span>
                    </p>
                    <a href="{{ route('services.business-debt') }}" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Intellectual Property -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Debt Collection Lawsuit Defense</h3>
                    <p class="text-gray-600 mb-4">
                        <span>Recently sued, sued in the past, or facing a bank levy, property lien, or wage garnishment as the result of an old judgment?&nbsp; We offer multiple options to help including <strong>lawsuit settlements &amp; payment plans</strong>,<strong> defense litigation</strong>,<strong> vacating default judgments</strong>, and <strong>bankruptcy</strong>.</span>
                    </p>
                    <a href="{{ route('services.debt-collection') }}" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Entertainment Law -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Timeshare Cancellation</h3>
                    <p class="text-gray-600 mb-4">
                        <span>If you <strong>bought a timeshare based on a salesperson’s lies</strong> and found nothing is working as you were told it would, or, if you <strong>can no longer afford to pay for your timeshare</strong> and have tried to sell it unsuccessfully, we can help. &nbsp; <strong>We cancel timeshares and can relieve you of your obligations</strong>.</span>
                    </p>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Compliance & Governance -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-solid fa-house-lock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Avoid Foreclosure</h3>
                    <p class="text-gray-600 mb-4">
                        <span>Offering various options to help you either stay in your home or, to exit your home as painlessly as possible.&nbsp;&nbsp; We offer <strong>Loan Modifications</strong>, <strong>Principal Reduction</strong>, <strong>Short Sale</strong>, and <strong>Deed in Lieu of Foreclosure</strong> negotiations.&nbsp; Our Law Firm has plenty of tools to help fix your home financial problems.</span>
                    </p>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Dispute Resolution -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-solid fa-suitcase"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Foreclosure Defense </h3>
                    <p class="text-gray-600 mb-4">
                        <span>If you are already facing foreclosure, one of our foreclosure defense lawyers can help you <strong>avoid foreclosure starting today</strong>. Our foreclosure defense attorneys can not only buy you time with the matter but can assist you to <strong>fight back against your lender to help you save your home</strong>.</span>
                    </p>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                <!-- Business Formation -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-regular fa-money-bill-1"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Fair Debt Collection Violation Lawsuits </h3>
                    <p class="text-gray-600 mb-4">
                        <span>The Fair Debt Collection Practices Act (FDCPA) governs how third-party debt collectors are allowed to communicate with you.&nbsp; When these debt collectors violate this law as they often do, we can make them pay – literally!&nbsp; <strong>You can get paid up to $1,000 and if we don’t win – we don’t charge you</strong>.</span>
                    </p>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Contracts & Agreements -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Student Loan Relief</h3>
                    <p class="text-gray-600 mb-4">
                        <span>If your grace period just ended, have just fallen behind on your loan payments, or are in default and dealing with collectors or lawsuits – we can help!&nbsp; <strong>WE OFFER IT ALL</strong>:&nbsp; <strong>Consolidation</strong>, <strong>Deferment</strong>, <strong>Forbearance</strong>, <strong>Debt Settlement</strong>, <strong>Forgiveness</strong>, <strong>Cancellation</strong>, <strong>Discharge</strong>,&nbsp; <strong>Bankruptcy</strong>.</span>
                    </p>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Intellectual Property -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-solid fa-business-time"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Small Business Debt Collection</h3>
                    <p class="text-gray-600 mb-4">
                        <span>Whether or not you need business debt relief, If your business isn’t being paid – we help collect.&nbsp; We offer <strong>Accounts Receivable Management</strong>, <strong>Pre-Lawsuit Debt Collection</strong>, <strong>Collection Lawsuits</strong>, &amp; <strong>Post Judgment Enforcement</strong>.&nbsp; You worked hard for your money – It’s time to get paid for it!</span>
                    </p>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Entertainment Law -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Debt Consolidation</h3>
                    <p class="text-gray-600 mb-4">
                        <span>If you’re on time with your debt payments, have good enough credit or, assets to use as collateral, you may be able to <strong>combine all your debts into one new loan at a lower interest rate</strong>.&nbsp; Through our network of lenders, we can try to help if you want to try to <strong>borrow your way out of debt</strong>.</span>
                    </p>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Compliance & Governance -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-regular fa-address-book"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Debt Management & Counseling</h3>
                    <p class="text-gray-600 mb-4">
                        <span>Experiencing a financial hardship and haven’t fallen too far behind on your payments?&nbsp; A Debt Management Plan, <em>also known as Consumer Credit Counseling</em>, can help by <strong>combining all your debts into one monthly payment at lower interest rates</strong> to have you out of debt in 4 to 7 years.</span>
                    </p>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
                
                <!-- Dispute Resolution -->
                <div class="bg-white p-8 rounded-lg custom-shadow service-card transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Bankruptcy </h3>
                    <p class="text-gray-600 mb-4">
                        <span>Bankruptcy is a last resort to help save you or your business from drowning in debt.&nbsp; For individuals, we offer <strong>Chapter 7 and Chapter 13 </strong>filings, and for businesses, we offer Chapter 7 and <strong>Chapter 11</strong>. We can help determine if you’re qualified and can get you the fresh start you’re looking for.</span>
                    </p>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="bg-primary py-16 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Process</h2>
                <div class="w-24 h-1 bg-primary mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-primary text-3xl mx-auto mb-6">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Initial Consultation</h3>
                    <p class="text-gray-600">We begin with a thorough discussion to understand your legal needs and business objectives.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-primary text-3xl mx-auto mb-6">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Legal Analysis</h3>
                    <p class="text-gray-600">We conduct a detailed review of your situation and develop a strategic approach.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-primary text-3xl mx-auto mb-6">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Implementation</h3>
                    <p class="text-gray-600">We execute the legal strategy while keeping you informed at every step.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-4 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Ready to Get Started?</h2>
            <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">Schedule a consultation to discuss your legal needs and discover how we can help your business thrive.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('cta') }}" class="btn-primary text-white px-8 py-3 rounded-full font-semibold hover:bg-primary-dark transition duration-300 inline-block">Get a Consultation</a>
            </div>
        </div>
    </section>
 </div>


@endsection


@section('styles')
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .bg-primary {
            background-color: #f1f9fc;
        }
        .btn-primary {
            background-color: #594cda;
        }
        .text-primary {
            color: #594cda;
        }
        .border-primary {
            border-color: #594cda;
        }
        .hover\:bg-primary-dark:hover {
            background-color: #4a3db7;
        }
        .custom-shadow {
            box-shadow: 0 4px 14px 0 rgba(0, 0, 0, 0.1);
        }
        .nav-link:hover {
            color: #594cda !important;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection

@section('scripts')

@endsection


@include('layout.landing-page')