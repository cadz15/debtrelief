<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ $_siteSettings['site_description'] }}" />
    <meta name="author" content="Debt Relief" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="{{ $_siteSettings['site_name'] }}" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="{{ $_siteSettings['site_name'] }}" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="{{ $_siteSettings['site_description'] }}" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="{{ route('getFile', $_siteSettings['logo']) }}" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FCA Student Loan Forgiveness </title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        outfit: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .modal {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        
        .modal-enter {
            opacity: 0;
            transform: scale(0.95);
        }
        
        .modal-enter-active {
            opacity: 1;
            transform: scale(1);
        }
        
        .modal-exit {
            opacity: 1;
            transform: scale(1);
        }
        
        .modal-exit-active {
            opacity: 0;
            transform: scale(0.95);
        }
        
        input, select {
            border-radius: 0 !important;
        }
        
        .card {
            border-radius: 4px;
        }
        
        .btn {
            border-radius: 4px;
        }
        
        .faq-item {
            transition: all 0.3s ease;
        }
        
        .faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .faq-item.active .faq-content {
            max-height: 500px;
        }
    </style>
</head>
<body class="font-outfit">
    <!-- Header -->
    <header class="bg-white shadow-sm py-4 sticky top-0 z-50">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="{{ route('getFile', $_siteSettings['logo']) }}" alt="{{ $_siteSettings['site_name'] }}" class="h-16" />
                <div class="text-3xl font-bold ">FCA Student Loan Forgiveness</div>
            </div>
            <a href="tel:{{ $_siteSettings['phone'] }}" target="_blank" class="bg-blue-600 hover:bg-blue-900 text-white px-8 py-4 btn transition-colors duration-300">
                {{ $_siteSettings['phone'] }}
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12 ">
                <div class="lg:w-1/2">
                    <h1 class="text-lg md:text-xl font-bold text-blue-600 uppercase mb-8">Get Relief From Student Loan Debt</h1>
                    <p class="text-6xl md:text-7xl font-semibold mb-8"><span class="text-blue-600">UNDO</span> your student debt stress.</p>
                    <p class="text-2xl md:text-3xl font-light text-gray-900 leading-[1.5] mb-8">Millions struggle with student loan debt, but you don’t have to face it alone. Imagine a solution that brings real relief and a brighter financial future.</p>
                </div>
                <div class="lg:w-1/2 w-full">
                    <div class="bg-white shadow-md p-8">
                        <h3 class="text-2xl text-gray-800 mb-6"><span class="text-blue-600">Overwhelmed</span> with student loans?</h3>
                        <form id="leadForm" method="post" action="{{ route('sub.cta')  }}" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1  gap-4">
                                <div>
                                    <label for="first_name" class="block text-gray-800 mb-1">First Name *</label>
                                    <input type="text" id="first_name" name="first_name" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                    value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="last_name" class="block text-gray-800 mb-1">Last Name *</label>
                                    <input type="text" id="last_name" name="last_name" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                    value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-gray-800 mb-1">Email *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="mobile" class="block text-gray-800 mb-1">Mobile *</label>
                                <input type="tel" id="mobile" name="mobile" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                value="{{ old('mobile') }}">
                                @error('mobile')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="state" class="block text-gray-800 mb-1">State *</label>
                                <select id="state" name="state" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                >
                                    <option value="">Select State</option>
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                    <option value="Louisiana">Louisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota</option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">North Carolina</option>
                                    <option value="North Dakota">North Dakota</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Oklahoma">Oklahoma</option>
                                    <option value="Oregon">Oregon</option>
                                    <option value="Pennsylvania">Pennsylvania</option>
                                    <option value="Rhode Island">Rhode Island</option>
                                    <option value="South Carolina">South Carolina</option>
                                    <option value="South Dakota">South Dakota</option>
                                    <option value="Tennessee">Tennessee</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Utah">Utah</option>
                                    <option value="Vermont">Vermont</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Washington">Washington</option>
                                    <option value="West">West Virginia</option>
                                    <option value="Wisconsin">Wisconsin</option>
                                    <option value="Wyoming">Wyoming</option>
                                </select>
                                @error('state')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="consent" name="consent" type="checkbox" required class="focus:ring-primary-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="consent" class="font-medium text-gray-700">By entering your information above and clicking the "Submit" button, you are providing express consent to be contacted by SMS and email, possibly using automated technology to the number you provided. Submission of this form does not authorize the purchase of goods, services, or products. See the Privacy Policy/Terms and Conditions on the webpage.</label>
                                </div>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 hover:bg-primary-700 text-white px-6 py-3 btn transition-colors duration-300">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 py-12">
            <div class="text-center mb-12 flex gap-4 flex-col items-center">
                <h3 class="text-xl uppercase font-semibold text-blue-600 mb-2">Welcome to FCA Student Loan Forgiveness</h3>
                <h2 class="text-6xl mt-6 font-normal text-gray-900">Student loan consolidation expertise.</h2>
                <p class="text-xl leading-[1.8] mt-6">Our team of experienced coaches specialize in student loan consolidation. We analyze your current loans with you, explore consolidation options, and tailor a plan that suits your financial situation. Our goal is to simplify the process, reduce your monthly payments, and improve your overall financial health.</p>
            </div>
            <div class="flex justify-center gap-6">
                <a href="fcanationalservice.org" class="bg-blue-600 hover:bg-primary-700 text-white px-6 py-3 btn transition-colors duration-300">
                    Learn More →
                </a>
                <button onclick="openModal()" class="bg-white hover:bg-gray-100 text-blue-600 border border-blue-600 px-6 py-3 btn transition-colors duration-300">
                    Get Started Today!
                </button>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-16 bg-gray-50 parallax" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.9)), url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQH78aqoTZbopAiKdLJM-LUCjg8_ZOW4VtbA&s');">
        <div class="container mx-auto px-4 flex flex-col py-12 pb-20">
            <div class="flex justify-between items-center">
                <h2 class="text-6xl w-1/3 text-white mb-12">Personalized coaching sessions.</h2>
                <a href="fcanationalservice.org" class="hidden md:block w-fit h-fit border-2 border-gray-300 hover:bg-primary-700 text-white px-6 py-3 btn transition-colors duration-300">
                        Learn More →
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white shadow-md p-8 card">
                    <div class="flex items-center flex-col gap-4">
                        <img src="{{ route('getFile', $_siteSettings['logo']) }}" class="w-1/6" alt="">
                        <h3 class="text-2xl text-gray-900 mb-4">$50,000 in Debt</h3>
                        <h3 class="text-4xl  line-through text-blue-700 mb-4">without FCA </h3>
                    </div>
                    <div class="border-t my-8 border-gray-300 my-4"></div>
                    <ul class="space-y-6 mb-6">
                        <li class="flex items-start gap-2">
                            <svg class="h-14 w-14 md:h-6 md:w-6 " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#1ccef2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#0a72c2" stroke-width="1.5"></circle> <path d="M12 6V18" stroke="#0a72c2" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 9.5C15 8.11929 13.6569 7 12 7C10.3431 7 9 8.11929 9 9.5C9 10.8807 10.3431 12 12 12C13.6569 12 15 13.1193 15 14.5C15 15.8807 13.6569 17 12 17C10.3431 17 9 15.8807 9 14.5" stroke="#0a72c2" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            <div>
                                <h5 class="font-bold text-lg">$530 per month in Standard Repayment</h5>
                                <p class="text-lg">High monthly payments can strain your budget, making it harder to manage other financial goals.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-14 w-14 md:h-6 md:w-6" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 3V22" stroke="#0a72c2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 10.31V22" stroke="#0a72c2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 7.40997V22" stroke="#0a72c2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 22V15.84" stroke="#0a72c2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <div>
                                <h5 class="font-bold text-lg">$0 estimated forgiveness amount</h5>
                                <p class="text-lg">Without expert guidance, you may miss out on potential loan forgiveness opportunities.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-14 w-14 md:h-6 md:w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#0076d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <div>
                                <h5 class="font-bold text-lg">Missed forgiveness opportunities</h5>
                                <p class="text-lg">You could do it alone, but not seeking the advice of an expert may cost you in the end.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="border-t my-8 border-gray-300 my-4"></div>
                    <button onclick="openModal()" class="w-full bg-blue-600 hover:bg-primary-700 text-white px-6 py-3 btn transition-colors duration-300">
                        Get Started Today!
                    </button>
                </div>
                <div class="bg-white shadow-md p-8 card">
                    <div class="flex items-center flex-col gap-4">
                        <img src="{{ route('getFile', $_siteSettings['logo']) }}" class="w-1/6" alt="">
                        <h3 class="text-2xl text-gray-900 mb-4">$50,000 in Debt</h3>
                        <h3 class="text-4xl text-blue-700 mb-4">without FCA </h3>
                    </div>
                    <div class="border-t my-8 border-gray-300 my-4"></div>
                    <ul class="space-y-6 mb-6">
                        <li class="flex items-start gap-2">
                            <svg class="h-14 w-14 md:h-6 md:w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#1ccef2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#0a72c2" stroke-width="1.5"></circle> <path d="M12 6V18" stroke="#0a72c2" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 9.5C15 8.11929 13.6569 7 12 7C10.3431 7 9 8.11929 9 9.5C9 10.8807 10.3431 12 12 12C13.6569 12 15 13.1193 15 14.5C15 15.8807 13.6569 17 12 17C10.3431 17 9 15.8807 9 14.5" stroke="#0a72c2" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            <div>
                                <h5 class="font-bold text-lg">As low as $143 per month in SAVE</h5>
                                <p class="text-lg">Lower your monthly payments and free up funds for what matters most.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-14 w-14 md:h-6 md:w-6" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 3V22" stroke="#0a72c2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 10.31V22" stroke="#0a72c2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 7.40997V22" stroke="#0a72c2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 22V15.84" stroke="#0a72c2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <div>
                                <h5 class="font-bold text-lg">$46,425 potential forgiveness amount</h5>
                                <p class="text-lg">Maximize savings with expert assistance in navigating loan forgiveness programs.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-14 w-14 md:h-6 md:w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#0076d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <div>
                                <h5 class="font-bold text-lg">Expert guidance, real savings.</h5>
                                <p class="text-lg">With our one-on-one coaching sessions and ongoing support, you can be confident you’re on the right path.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="border-t my-8 border-gray-300 my-4"></div>
                    <button onclick="openModal()" class="w-full bg-blue-600 hover:bg-primary-700 text-white px-6 py-3 btn transition-colors duration-300">
                        Get Started Today!
                    </button>
                </div>
            </div>

            <div class="flex md:flex-row flex-col gap-4 justify-between mt-16">
                <div class=" flex items-center flex-col">
                    <h1 class="text-gray-100 text-5xl">$387</h1>
                    <p class="text-white text-xl md:text-2xl font-light">Saved on monthly payments</p>
                </div>
                <div class=" flex items-center flex-col">
                    <h1 class="text-gray-100 text-5xl">16.5 yrs</h1>
                    <p class="text-white text-xl md:text-2xl font-light">Saved on total payoff duration</p>
                </div>
                <div class=" flex items-center flex-col">
                    <h1 class="text-gray-100 text-5xl">$46,425</h1>
                    <p class="text-white text-xl md:text-2xl font-light">Potential forgiveness amount</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Review -->
    <section class="py-16 parallax" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0,0.7)), url('https://www.jacquelineconnors.com/wp-content/uploads/Life-coaching-1.jpg');">
        <div class="container mx-auto px-4">
            <div class="flex flex-col h-screen lg:flex-row items-end gap-12">
                <div class="lg:w-1/2">
                    <div class="p-8">
                        <h3 class="text-7xl  text-white mb-4">Hey there, I'm Mike Johnson 👋</h3>
                        <p class="text-white font-light text-xl mb-4">"I was drowning in $85,000 of student loan debt with payments I could barely afford. FCA helped me consolidate my loans and get on an income-driven repayment plan. My monthly payment went from $950 to just $320, and I'm on track for loan forgiveness in 7 more years!"</p>
                        
                    </div>
                </div>
                <div class="lg:w-1/2 text-center">
                    <a href="https://www.google.com/search?q=FCA+student+loans+forgiveness+reviews" target="_blank" class="inline-flex items-center bg-white hover:bg-gray-100 text-blue-600 border border-blue-600 px-6 py-3 btn transition-colors duration-300">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.441 16.892c-2.102.144-6.784.144-8.883 0-2.276-.156-2.541-1.27-2.558-4.892.017-3.629.285-4.736 2.558-4.892 2.104-.144 6.782-.144 8.883 0 2.277.156 2.541 1.27 2.559 4.892-.018 3.629-.285 4.736-2.559 4.892zm-6.441-7.234l4.917 2.338-4.917 2.346v-4.684z"/>
                        </svg>
                        Read Our Google Reviews
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-primary-700 text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="flex justify-center mb-4">
                        <svg class="h-12 w-12 text-primary-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Speak to an Expert at No Cost</h3>
                    <p class="text-primary-100">Our initial consultation is completely free. We'll review your loans and explain your options with no obligation.</p>
                </div>
                <div class="text-center p-6">
                    <div class="flex justify-center mb-4">
                        <svg class="h-12 w-12 text-primary-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Comprehensive Loan Analysis</h3>
                    <p class="text-primary-100">We analyze all your loans to identify the best consolidation and repayment strategies tailored to your situation.</p>
                </div>
                <div class="text-center p-6">
                    <div class="flex justify-center mb-4">
                        <svg class="h-12 w-12 text-primary-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Personalized Strategies</h3>
                    <p class="text-primary-100">We don't believe in one-size-fits-all solutions. Your plan is customized based on your income, career, and goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-1/3">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Real relief. Real results.</h2>
                    <p class="text-gray-600 mb-6">Don't just take our word for it. See what our clients have to say about their experience with FCA.</p>
                    <a href="https://www.google.com/search?q=FCA+student+loans+forgiveness+reviews" target="_blank" class="inline-flex items-center bg-blue-600 hover:bg-primary-700 text-white px-6 py-3 btn transition-colors duration-300">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.441 16.892c-2.102.144-6.784.144-8.883 0-2.276-.156-2.541-1.27-2.558-4.892.017-3.629.285-4.736 2.558-4.892 2.104-.144 6.782-.144 8.883 0 2.277.156 2.541 1.27 2.559 4.892-.018 3.629-.285 4.736-2.559 4.892zm-6.441-7.234l4.917 2.338-4.917 2.346v-4.684z"/>
                        </svg>
                        Read Our Google Reviews
                    </a>
                </div>
                <div class="lg:w-2/3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-6 card">
                            <div class="flex items-center mb-4">
                                <div class="flex -space-x-2">
                                    <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Thompson">
                                </div>
                                <div class="ml-4">
                                    <div class="font-medium text-gray-900">Michael Thompson</div>
                                    <div class="text-sm text-gray-500">Software Engineer, Seattle</div>
                                </div>
                            </div>
                            <p class="text-gray-700">"FCA saved me over $200/month on my student loans. Their expert helped me navigate the consolidation process and find a repayment plan that actually fits my budget."</p>
                        </div>
                        <div class="bg-gray-50 p-6 card">
                            <div class="flex items-center mb-4">
                                <div class="flex -space-x-2">
                                    <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/63.jpg" alt="Jessica Rodriguez">
                                </div>
                                <div class="ml-4">
                                    <div class="font-medium text-gray-900">Jessica Rodriguez</div>
                                    <div class="text-sm text-gray-500">Nurse, Miami</div>
                                </div>
                            </div>
                            <p class="text-gray-700">"As a single mom, my student loans were overwhelming. FCA got me into a forgiveness program I didn't even know existed. I can't thank them enough!"</p>
                        </div>
                        <div class="bg-gray-50 p-6 card">
                            <div class="flex items-center mb-4">
                                <div class="flex -space-x-2">
                                    <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/54.jpg" alt="David Kim">
                                </div>
                                <div class="ml-4">
                                    <div class="font-medium text-gray-900">David Kim</div>
                                    <div class="text-sm text-gray-500">Dentist, New York</div>
                                </div>
                            </div>
                            <p class="text-gray-700">"The personalized attention I received was incredible. My consultant took the time to understand my specific situation and found solutions I never would have discovered on my own."</p>
                        </div>
                        <div class="bg-gray-50 p-6 card">
                            <div class="flex items-center mb-4">
                                <div class="flex -space-x-2">
                                    <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/28.jpg" alt="Amanda Chen">
                                </div>
                                <div class="ml-4">
                                    <div class="font-medium text-gray-900">Amanda Chen</div>
                                    <div class="text-sm text-gray-500">Attorney, Los Angeles</div>
                                </div>
                            </div>
                            <p class="text-gray-700">"After law school, I had six figures of debt. FCA helped me consolidate and get on an income-driven plan. My payments are manageable now, and I'm on track for forgiveness."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-lg font-semibold text-blue-600 mb-2">Got a Question?</h3>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">FAQs</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Check out the resources below and be sure to let us know if we can answer anything else.</p>
            </div>
            <div class="max-w-3xl mx-auto">
                <div class="bg-white shadow-md p-6 card">
                    <div class="space-y-4">
                        <div class="faq-item">
                            <button onclick="toggleFAQ(0)" class="flex justify-between items-center w-full text-left font-medium text-gray-900 py-2">
                                <span>Does it cost money to find out what programs I qualify for?</span>
                                <svg class="h-5 w-5 text-blue-600 transform transition-transform duration-300" id="faq-icon-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content" id="faq-content-0">
                                <div class="text-gray-600 pb-2">
                                    No, our initial consultation is completely free. We'll review your loan situation and explain all the programs you may qualify for at no cost or obligation.
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200"></div>
                        <div class="faq-item">
                            <button onclick="toggleFAQ(1)" class="flex justify-between items-center w-full text-left font-medium text-gray-900 py-2">
                                <span>How do I know which programs are right for me?</span>
                                <svg class="h-5 w-5 text-blue-600 transform transition-transform duration-300" id="faq-icon-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content" id="faq-content-1">
                                <div class="text-gray-600 pb-2">
                                    Our experts will analyze your specific situation - including your loan types, amounts, income, career path, and financial goals - to recommend the best programs and strategies for your needs.
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200"></div>
                        <div class="faq-item">
                            <button onclick="toggleFAQ(2)" class="flex justify-between items-center w-full text-left font-medium text-gray-900 py-2">
                                <span>How long does it take?</span>
                                <svg class="h-5 w-5 text-blue-600 transform transition-transform duration-300" id="faq-icon-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content" id="faq-content-2">
                                <div class="text-gray-600 pb-2">
                                    The initial consultation typically takes about 30 minutes. If you decide to move forward with consolidation or enrollment in a repayment program, the processing time varies but usually takes 4-6 weeks from start to finish.
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200"></div>
                        <div class="faq-item">
                            <button onclick="toggleFAQ(3)" class="flex justify-between items-center w-full text-left font-medium text-gray-900 py-2">
                                <span>My loans are in default! Can you still help?</span>
                                <svg class="h-5 w-5 text-blue-600 transform transition-transform duration-300" id="faq-icon-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content" id="faq-content-3">
                                <div class="text-gray-600 pb-2">
                                    Absolutely. We specialize in helping borrowers get out of default through rehabilitation or consolidation programs. There are specific options available for defaulted loans that we can walk you through.
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200"></div>
                        <div class="faq-item">
                            <button onclick="toggleFAQ(4)" class="flex justify-between items-center w-full text-left font-medium text-gray-900 py-2">
                                <span>How do I know if I qualify for forgiveness?</span>
                                <svg class="h-5 w-5 text-blue-600 transform transition-transform duration-300" id="faq-icon-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content" id="faq-content-4">
                                <div class="text-gray-600 pb-2">
                                    Forgiveness programs have specific eligibility requirements based on factors like your career (teachers, government/nonprofit employees), loan type, and repayment plan. We'll review all your options during your free consultation.
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200"></div>
                        <div class="faq-item">
                            <button onclick="toggleFAQ(5)" class="flex justify-between items-center w-full text-left font-medium text-gray-900 py-2">
                                <span>I've consolidated in the past but I want to switch my plan. Is that possible?</span>
                                <svg class="h-5 w-5 text-blue-600 transform transition-transform duration-300" id="faq-icon-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content" id="faq-content-5">
                                <div class="text-gray-600 pb-2">
                                    Yes, in most cases you can change your repayment plan even if you've previously consolidated. Some restrictions apply depending on your loan type and current plan, which we can review with you.
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200"></div>
                        <div class="faq-item">
                            <button onclick="toggleFAQ(6)" class="flex justify-between items-center w-full text-left font-medium text-gray-900 py-2">
                                <span>Once I consolidate, will I have the same plan until my loans are paid off?</span>
                                <svg class="h-5 w-5 text-blue-600 transform transition-transform duration-300" id="faq-icon-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content" id="faq-content-6">
                                <div class="text-gray-600 pb-2">
                                    No, you can change repayment plans after consolidation if your situation changes (like if your income increases or decreases significantly). We'll help you understand when it might make sense to reevaluate your plan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to take control of your student loans?</h2>
            <button onclick="openModal()" class="bg-white hover:bg-gray-100 text-blue-600 px-8 py-4 text-lg font-semibold btn transition-colors duration-300">
                Get Started Today
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-gray-900 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center md:items-end">
                <div class="text-2xl font-bold text-white mb-4 flex items-center gap-4"><img src="{{ route('getFile', $_siteSettings['logo']) }}" alt="{{ $_siteSettings['site_name'] }}" class="h-16" />FCA</div>
                <div class="text-gray-400 text-sm">© {{ $_siteSettings['year']?? '' }} FCA. All rights reserved.</div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50 hidden">
        <div class="bg-white w-full max-w-md modal">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Overwhelmed with student loans?</h3>
                    <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form id="modalLeadForm" method="post" action="{{ route('sub.cta')  }}" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="modalFirstName" class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                            <input type="text" id="modalFirstName" name="first_name" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        <div>
                            <label for="modalLastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                            <input type="text" id="modalLastName" name="last_name" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500">
                        </div>
                    </div>
                    <div>
                        <label for="modalEmail" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                        <input type="email" id="modalEmail" name="email" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    <div>
                        <label for="modalMobile" class="block text-sm font-medium text-gray-700 mb-1">Mobile *</label>
                        <input type="tel" id="modalMobile" name="mobile" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    <div>
                        <label for="modalState" class="block text-sm font-medium text-gray-700 mb-1">State *</label>
                        <select id="modalState" name="state" required class="w-full px-4 py-2 border border-gray-300 focus:ring-primary-500 focus:border-primary-500">
                            <option value="">Select State</option>
                                <option value="Alabama">Alabama</option>
                                <option value="Alaska">Alaska</option>
                                <option value="Arizona">Arizona</option>
                                <option value="Arkansas">Arkansas</option>
                                <option value="California">California</option>
                                <option value="Colorado">Colorado</option>
                                <option value="Connecticut">Connecticut</option>
                                <option value="Delaware">Delaware</option>
                                <option value="Florida">Florida</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Idaho">Idaho</option>
                                <option value="Illinois">Illinois</option>
                                <option value="Indiana">Indiana</option>
                                <option value="Iowa">Iowa</option>
                                <option value="Kansas">Kansas</option>
                                <option value="Kentucky">Kentucky</option>
                                <option value="Louisiana">Louisiana</option>
                                <option value="Maine">Maine</option>
                                <option value="Maryland">Maryland</option>
                                <option value="Massachusetts">Massachusetts</option>
                                <option value="Michigan">Michigan</option>
                                <option value="Minnesota">Minnesota</option>
                                <option value="Mississippi">Mississippi</option>
                                <option value="Missouri">Missouri</option>
                                <option value="Montana">Montana</option>
                                <option value="Nebraska">Nebraska</option>
                                <option value="Nevada">Nevada</option>
                                <option value="New Hampshire">New Hampshire</option>
                                <option value="New Jersey">New Jersey</option>
                                <option value="New Mexico">New Mexico</option>
                                <option value="New York">New York</option>
                                <option value="North Carolina">North Carolina</option>
                                <option value="North Dakota">North Dakota</option>
                                <option value="Ohio">Ohio</option>
                                <option value="Oklahoma">Oklahoma</option>
                                <option value="Oregon">Oregon</option>
                                <option value="Pennsylvania">Pennsylvania</option>
                                <option value="Rhode Island">Rhode Island</option>
                                <option value="South Carolina">South Carolina</option>
                                <option value="South Dakota">South Dakota</option>
                                <option value="Tennessee">Tennessee</option>
                                <option value="Texas">Texas</option>
                                <option value="Utah">Utah</option>
                                <option value="Vermont">Vermont</option>
                                <option value="Virginia">Virginia</option>
                                <option value="Washington">Washington</option>
                                <option value="West">West Virginia</option>
                                <option value="Wisconsin">Wisconsin</option>
                                <option value="Wyoming">Wyoming</option>
                        </select>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="modalConsent" name="modalConsent" type="checkbox" required class="focus:ring-primary-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="modalConsent" class="font-medium text-gray-700">By entering your information above and clicking the "Submit" button, you are providing express consent to be contacted by SMS and email, possibly using automated technology to the number you provided. Submission of this form does not authorize the purchase of goods, services, or products. See the Privacy Policy/Terms and Conditions on the webpage.</label>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-primary-700 text-white px-6 py-3 btn transition-colors duration-300">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        // Close modal when clicking outside
        document.getElementById('modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        

        // FAQ functionality
        function toggleFAQ(index) {
            const faqItem = document.querySelectorAll('.faq-item')[index];
            const faqContent = document.getElementById(`faq-content-${index}`);
            const faqIcon = document.getElementById(`faq-icon-${index}`);

            if (faqItem.classList.contains('active')) {
                faqItem.classList.remove('active');
                faqIcon.classList.remove('rotate-180');
            } else {
                faqItem.classList.add('active');
                faqIcon.classList.add('rotate-180');
            }
        }
    </script>
</body>
</html>