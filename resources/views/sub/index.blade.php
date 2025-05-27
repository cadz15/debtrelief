<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCA - Student Loan Relief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .modal {
            transition: opacity 0.3s ease, transform 0.3s ease;
            transform: translateY(-20px);
            opacity: 0;
        }
        
        .modal.active {
            transform: translateY(0);
            opacity: 1;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .faq-item {
            transition: all 0.3s ease;
        }
        
        .faq-item.active .faq-answer {
            max-height: 500px;
            opacity: 1;
            padding-top: 1rem;
        }
        
        .faq-item.active .faq-question svg {
            transform: rotate(180deg);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://via.placeholder.com/150x50?text=FCA+Logo" alt="FCA Logo" class="h-10">
            </div>
            <div>
                <a href="tel:+18005551234" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full font-medium transition duration-300">
                    <i class="fas fa-phone-alt mr-2"></i> (800) 555-1234
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-50 to-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Get Relief From Student Loan Debt</h1>
                    <p class="text-lg text-gray-600 mb-8">We help borrowers navigate the complex world of student loans to find the best repayment options, forgiveness programs, and consolidation solutions tailored to your unique situation.</p>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-medium transition duration-300">
                            Learn More
                        </button>
                        <button onclick="openModal()" class="bg-white hover:bg-gray-100 text-blue-600 border border-blue-600 px-8 py-3 rounded-full font-medium transition duration-300">
                            Get Started Today
                        </button>
                    </div>
                </div>
                <div class="lg:w-1/2 bg-white p-8 rounded-xl shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Overwhelmed with student loans?</h2>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                                <input type="text" required id="first-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                                <input type="text" required id="last-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                            <input type="email" required id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="mobile" class="block text-sm font-medium text-gray-700 mb-1">Mobile *</label>
                            <input type="tel" required id="mobile" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700 mb-1">State *</label>
                            <select id="state" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="" selected="selected">—Please choose an option—</option> 
                                <option value="Alabama">Alabama</option> 
                                <option value="Alaska">Alaska</option> 
                                <option value="Arizona">Arizona</option> 
                                <option value="Arkansas">Arkansas</option> 
                                <option value="California">California</option> 
                                <option value="Colorado">Colorado</option> 
                                <option value="Connecticut">Connecticut</option> 
                                <option value="Delaware">Delaware</option> 
                                <option value="District of Columbia">District of Columbia</option> 
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
                                <option value="West Virginia">West Virginia</option> 
                                <option value="Wisconsin">Wisconsin</option> 
                                <option value="Wyoming">Wyoming</option> 
                            </select>
                        </div>
                         <div class="flex items-start">
                            <input type="checkbox" id="consent" class="mt-1 mr-2">
                            <label for="consent" class="text-sm">
                                By entering your information above and clicking the “Submit” button, you are providing express consent to be contacted by SMS and email, possibly using automated technology to the number you provided. Submission of this form does not authorize the purchase of goods, services, or products. See the Privacy Policy/Terms and Conditions on the webpage.
                            </label>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                            Get Your Free Consultation
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-blue-600 font-semibold mb-2">Welcome to FCA</h3>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Student loan consolidation expertise.</h2>
            <div class="flex justify-center gap-4">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-medium transition duration-300 flex items-center">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </button>
                <button onclick="openModal()" class="bg-white hover:bg-gray-100 text-blue-600 border border-blue-600 px-8 py-3 rounded-full font-medium transition duration-300">
                    Get Started Today!
                </button>
            </div>
        </div>
    </section>

    <!-- Personalized Coaching Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Personalized coaching sessions.</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Without FCA Card -->
                <div class="bg-white p-8 rounded-xl shadow-md card-hover transition duration-300">
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Without FCA</h3>
                        <div class="text-4xl font-bold text-red-500">$50,000</div>
                        <div class="text-gray-600">Total repayment</div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                            <span>Higher monthly payments</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                            <span>No personalized strategy</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                            <span>Missed forgiveness opportunities</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                            <span>Longer repayment term</span>
                        </li>
                    </ul>
                    <button onclick="openModal()" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                        Get Started Today!
                    </button>
                </div>
                
                <!-- With FCA Card -->
                <div class="bg-white p-8 rounded-xl shadow-md card-hover transition duration-300">
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">With FCA</h3>
                        <div class="text-4xl font-bold text-green-500">$32,000</div>
                        <div class="text-gray-600">Potential savings</div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Lower monthly payments</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Customized repayment plan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Maximized forgiveness potential</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Faster path to debt-free</span>
                        </li>
                    </ul>
                    <button onclick="openModal()" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                        Get Started Today!
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Review Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <div class="bg-gray-100 p-8 rounded-xl relative">
                        <div class="absolute -top-4 -left-4 bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center">
                            <i class="fas fa-quote-left text-xl"></i>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-xl font-bold">Hey there, I'm Sarah 👋</h3>
                            <div class="flex mt-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 italic">
                            "I was drowning in $85,000 of student loan debt and didn't know where to turn. FCA helped me navigate the complex repayment options and found a forgiveness program I qualified for. Thanks to their expertise, I'm now on track to have $65,000 forgiven! The personalized attention and clear guidance made all the difference."
                        </p>
                    </div>
                </div>
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Join thousands of satisfied clients</h2>
                    <p class="text-gray-600 mb-8">Our clients consistently rate us 5 stars for our knowledgeable advisors, transparent process, and life-changing results.</p>
                    <a href="https://www.google.com/search?q=FCA+student+loans+reviews" target="_blank" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-medium transition duration-300">
                        <i class="fab fa-google mr-2"></i> Read Our Google Reviews
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm card-hover transition duration-300 text-center">
                    <div class="bg-blue-100 text-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-headset text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Speak to an Expert at No Cost</h3>
                    <p class="text-gray-600">Our initial consultation is completely free. We'll review your loans and explain your options with no obligation.</p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm card-hover transition duration-300 text-center">
                    <div class="bg-blue-100 text-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Comprehensive Loan Analysis</h3>
                    <p class="text-gray-600">We analyze all federal loan programs to determine which repayment or forgiveness options you qualify for.</p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm card-hover transition duration-300 text-center">
                    <div class="bg-blue-100 text-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-cog text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Personalized Strategies</h3>
                    <p class="text-gray-600">Every borrower's situation is unique. We create customized plans to maximize savings and minimize stress.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/3 mb-12 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Real relief. Real results.</h2>
                    <p class="text-gray-600 mb-6">Don't just take our word for it. Hear from borrowers who've transformed their financial futures with our help.</p>
                    <a href="https://www.google.com/search?q=FCA+student+loans+reviews" target="_blank" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-medium transition duration-300">
                        <i class="fab fa-google mr-2"></i> See All Reviews
                    </a>
                </div>
                <div class="lg:w-2/3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Review 1 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <div class="flex mr-2">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                </div>
                                <span class="text-sm text-gray-500">- Michael T.</span>
                            </div>
                            <p class="text-gray-700">"FCA saved me over $300/month on my payments and put me on track for PSLF. Their expertise is unmatched!"</p>
                        </div>
                        
                        <!-- Review 2 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <div class="flex mr-2">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                </div>
                                <span class="text-sm text-gray-500">- Jessica L.</span>
                            </div>
                            <p class="text-gray-700">"I was skeptical at first, but after just one call I understood my options clearly. Now I'm saving thousands!"</p>
                        </div>
                        
                        <!-- Review 3 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <div class="flex mr-2">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                </div>
                                <span class="text-sm text-gray-500">- David R.</span>
                            </div>
                            <p class="text-gray-700">"The advisor took time to explain everything in terms I could understand. My payments dropped by 40%!"</p>
                        </div>
                        
                        <!-- Review 4 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <div class="flex mr-2">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                </div>
                                <span class="text-sm text-gray-500">- Amanda S.</span>
                            </div>
                            <p class="text-gray-700">"From default to forgiveness track in just 6 months. FCA handled everything and made it stress-free."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-blue-600 font-semibold mb-2">Got a Question?</h3>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">FAQs</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Check out the resources below and be sure to let us know if we can answer anything else.</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-4 faq-item">
                    <div class="flex justify-between items-center cursor-pointer faq-question" onclick="toggleFAQ(1)">
                        <h3 class="font-medium text-gray-800">Does it cost money to find out what programs I qualify for?</h3>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="faq-answer overflow-hidden max-h-0 opacity-0 transition-all duration-300">
                        <p class="text-gray-600 pt-2">No! Our initial consultation is completely free. We'll review your loans and explain all the programs you qualify for at no cost or obligation.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-4 faq-item">
                    <div class="flex justify-between items-center cursor-pointer faq-question" onclick="toggleFAQ(2)">
                        <h3 class="font-medium text-gray-800">How do I know which programs are right for me?</h3>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="faq-answer overflow-hidden max-h-0 opacity-0 transition-all duration-300">
                        <p class="text-gray-600 pt-2">Our experts analyze your specific situation—including your loan types, employment, income, and goals—to recommend the optimal repayment or forgiveness strategy tailored just for you.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-4 faq-item">
                    <div class="flex justify-between items-center cursor-pointer faq-question" onclick="toggleFAQ(3)">
                        <h3 class="font-medium text-gray-800">How long does it take?</h3>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="faq-answer overflow-hidden max-h-0 opacity-0 transition-all duration-300">
                        <p class="text-gray-600 pt-2">Most borrowers see results within 4-6 weeks. The exact timeline depends on your specific situation and which programs you qualify for. We handle all the paperwork and follow-up to ensure everything moves as quickly as possible.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-4 faq-item">
                    <div class="flex justify-between items-center cursor-pointer faq-question" onclick="toggleFAQ(4)">
                        <h3 class="font-medium text-gray-800">My loans are in default! Can you still help?</h3>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="faq-answer overflow-hidden max-h-0 opacity-0 transition-all duration-300">
                        <p class="text-gray-600 pt-2">Absolutely. We specialize in helping borrowers get out of default and into affordable repayment plans or forgiveness programs. There are specific options available for defaulted loans that we can help you navigate.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-4 faq-item">
                    <div class="flex justify-between items-center cursor-pointer faq-question" onclick="toggleFAQ(5)">
                        <h3 class="font-medium text-gray-800">How do I know if I qualify for forgiveness?</h3>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="faq-answer overflow-hidden max-h-0 opacity-0 transition-all duration-300">
                        <p class="text-gray-600 pt-2">Forgiveness programs have specific eligibility requirements based on factors like your loan type, employment, and repayment history. During your free consultation, we'll review all forgiveness options you may qualify for.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-4 faq-item">
                    <div class="flex justify-between items-center cursor-pointer faq-question" onclick="toggleFAQ(6)">
                        <h3 class="font-medium text-gray-800">I've consolidated in the past but I want to switch my plan. Is that possible?</h3>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="faq-answer overflow-hidden max-h-0 opacity-0 transition-all duration-300">
                        <p class="text-gray-600 pt-2">Yes! Many borrowers consolidate first without understanding all their options. We can help you switch to a better repayment plan that aligns with your current situation and goals.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 7 -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-4 faq-item">
                    <div class="flex justify-between items-center cursor-pointer faq-question" onclick="toggleFAQ(7)">
                        <h3 class="font-medium text-gray-800">Once I consolidate, will I have the same plan until my loans are paid off?</h3>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="faq-answer overflow-hidden max-h-0 opacity-0 transition-all duration-300">
                        <p class="text-gray-600 pt-2">No, you can change repayment plans as your situation changes. Many of our clients adjust their plans over time as their income changes or they qualify for different forgiveness programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to take control of your student loans?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Get started with a free consultation today. Our experts will review your loans and explain your best options.</p>
            <button onclick="openModal()" class="bg-white hover:bg-gray-100 text-blue-600 px-8 py-3 rounded-full font-medium transition duration-300">
                Get Started Today!
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/150x50?text=FCA+Logo" alt="FCA Logo" class="h-10 mb-6">
                <div class="text-gray-400 text-sm">
                    &copy; 2023 Financial Counseling Associates. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-8 rounded-xl w-full max-w-md mx-4 modal">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Get Started Today</h2>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="modal-first-name" class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                        <input type="text" id="modal-first-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="modal-last-name" class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                        <input type="text" id="modal-last-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div>
                    <label for="modal-email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                    <input type="email" id="modal-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="modal-mobile" class="block text-sm font-medium text-gray-700 mb-1">Mobile *</label>
                    <input type="tel" id="modal-mobile" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="modal-state" class="block text-sm font-medium text-gray-700 mb-1">State *</label>
                    <select id="modal-state" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select your state</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <!-- Add all other states -->
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <script>
        // Modal functionality
        function openModal() {
            const modal = document.getElementById('modal');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.querySelector('.modal').classList.add('active');
            }, 10);
        }
        
        function closeModal() {
            const modal = document.getElementById('modal');
            modal.querySelector('.modal').classList.remove('active');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
        
        // Close modal when clicking outside
        document.getElementById('modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
        
        // FAQ toggle functionality
        function toggleFAQ(index) {
            const faqItem = document.querySelectorAll('.faq-item')[index - 1];
            faqItem.classList.toggle('active');
        }
    </script>
</body>
</html>