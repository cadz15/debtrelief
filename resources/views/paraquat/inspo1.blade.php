<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paraquat Exposure Lawsuit – Find Out If You Qualify for Compensation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        .hero-gradient {
            background: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(254,243,199,1) 100%);
        }
        .feature-icon {
            background: rgba(249, 115, 22, 0.1);
            transition: all 0.3s ease;
        }
        .feature-icon:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .testimonial-card {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        .mobile-menu.open {
            transform: translateX(0);
        }
        .form-field {
            transition: all 0.3s ease;
        }
        .form-field:focus-within {
            transform: translateY(-2px);
        }
        .progress-bar {
            height: 4px;
            background-color: #f97316;
            width: 0%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            transition: width 0.3s ease;
        }
        .floating-cta {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(249, 115, 22, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(249, 115, 22, 0);
            }
        }
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 100;
            transition: all 0.3s ease;
        }
        .sticky-nav.scrolled {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 40;
            display: none;
        }
        .mobile-menu-overlay.open {
            display: block;
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    <!-- Progress Bar -->
    <div class="progress-bar" id="progressBar"></div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

    <!-- Floating CTA -->
    <div class="floating-cta md:hidden">
        <a href="#check-eligibility" class="px-6 py-3 rounded-full text-white bg-orange-500 hover:bg-orange-600 text-sm font-medium transition duration-300 shadow-lg flex items-center">
            <i data-feather="edit-3" class="w-4 h-4 mr-2"></i>
            Check Eligibility
        </a>
    </div>

    <!-- Navigation -->
    <nav class="sticky-nav bg-white" id="mainNav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-xl font-bold text-orange-500">FCA - Paraquant</span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="#about" class="px-3 py-2 text-sm font-medium hover:text-orange-500 transition duration-300">About</a>
                        <a href="#qualify" class="px-3 py-2 text-sm font-medium hover:text-orange-500 transition duration-300">Do I Qualify?</a>
                        <a href="#faq" class="px-3 py-2 text-sm font-medium hover:text-orange-500 transition duration-300">FAQ</a>
                        <a href="#contact" class="px-3 py-2 text-sm font-medium hover:text-orange-500 transition duration-300">Contact</a>
                        <a href="#check-eligibility" class="ml-4 px-4 py-2 rounded-md text-white bg-orange-500 hover:bg-orange-600 text-sm font-medium transition duration-300">
                            Check Eligibility Now
                        </a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button id="mobileMenuButton" class="text-gray-500 hover:text-orange-500 focus:outline-none transition duration-300">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu fixed inset-y-0 left-0 z-50 bg-white md:hidden w-64">
        <div class="flex justify-between items-center p-4 border-b">
            <span class="text-xl font-bold text-orange-500">FCA - Paraquant</span>
            <button id="closeMobileMenu" class="text-gray-500 hover:text-orange-500">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="p-4 space-y-4">
            <a href="#about" class="block py-2 text-lg font-medium hover:text-orange-500 transition duration-300">About</a>
            <a href="#qualify" class="block py-2 text-lg font-medium hover:text-orange-500 transition duration-300">Do I Qualify?</a>
            <a href="#faq" class="block py-2 text-lg font-medium hover:text-orange-500 transition duration-300">FAQ</a>
            <a href="#contact" class="block py-2 text-lg font-medium hover:text-orange-500 transition duration-300">Contact</a>
            <a href="#check-eligibility" class="block mt-6 px-4 py-3 rounded-md text-white bg-orange-500 hover:bg-orange-600 text-lg font-medium text-center transition duration-300">
                Check Eligibility Now
            </a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-gradient py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-1/2 mb-12 md:mb-0 fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                        Paraquat Exposure Lawsuit – Find Out If You Qualify for Compensation
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8">
                        Our legal team is reviewing claims from individuals diagnosed with Parkinson's Disease after exposure to Paraquat. You may be entitled to financial compensation.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#check-eligibility" class="px-8 py-4 rounded-md text-white bg-orange-500 hover:bg-orange-600 text-lg font-semibold transition duration-300 text-center transform hover:scale-105">
                            Check Eligibility Now
                        </a>
                        <a href="#about" class="px-8 py-4 rounded-md text-orange-500 border border-orange-500 hover:bg-orange-50 text-lg font-semibold transition duration-300 text-center">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 fade-in">
                    <div class="relative">
                        <img src="http://static.photos/medical/1024x576/1" class="rounded-lg shadow-xl w-full">
                        <div class="absolute -bottom-4 -right-4 bg-orange-500 text-white p-4 rounded-lg shadow-lg max-w-xs">
                            <p class="font-semibold">Free Case Evaluation</p>
                            <p class="text-sm">No fees unless you win</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="fade-in">
                    <p class="text-3xl md:text-4xl font-bold text-orange-500" id="stat1">0</p>
                    <p class="text-gray-600 mt-2">Cases Reviewed</p>
                </div>
                <div class="fade-in">
                    <p class="text-3xl md:text-4xl font-bold text-orange-500" id="stat2">0</p>
                    <p class="text-gray-600 mt-2">Successful Claims</p>
                </div>
                <div class="fade-in">
                    <p class="text-3xl md:text-4xl font-bold text-orange-500" id="stat3">$0M</p>
                    <p class="text-gray-600 mt-2">Recovered for Clients</p>
                </div>
                <div class="fade-in">
                    <p class="text-3xl md:text-4xl font-bold text-orange-500" id="stat4">50</p>
                    <p class="text-gray-600 mt-2">States Covered</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl font-bold mb-4">Understanding Paraquat Exposure Risks</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Paraquat is a highly toxic herbicide linked to Parkinson's Disease. If you or a loved one were exposed to Paraquat and developed Parkinson's, you may have legal rights to compensation.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg feature-icon fade-in">
                    <div class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center mb-6">
                        <i data-feather="alert-triangle" class="text-orange-500 w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Toxic Exposure</h3>
                    <p class="text-gray-600">
                        Paraquat is one of the most dangerous herbicides still in use today, with strong links to Parkinson's Disease.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-lg feature-icon fade-in">
                    <div class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center mb-6">
                        <i data-feather="scale" class="text-orange-500 w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Legal Rights</h3>
                    <p class="text-gray-600">
                        Victims of Paraquat exposure may be entitled to significant compensation for medical bills, lost wages, and suffering.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-lg feature-icon fade-in">
                    <div class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center mb-6">
                        <i data-feather="clock" class="text-orange-500 w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Time Limited</h3>
                    <p class="text-gray-600">
                        There are strict deadlines to file a claim. Don't wait to explore your legal options.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Qualify Section -->
    <section id="qualify" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center">
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-12 fade-in">
                    <h2 class="text-3xl font-bold mb-6">Do You Qualify for a Paraquat Lawsuit?</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        You may have a case if you or a loved one:
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 rounded-full bg-orange-100 flex items-center justify-center">
                                    <i data-feather="check" class="text-orange-500 w-4 h-4"></i>
                                </div>
                            </div>
                            <span class="ml-3 text-gray-700">Were exposed to Paraquat (through work or other means)</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 rounded-full bg-orange-100 flex items-center justify-center">
                                    <i data-feather="check" class="text-orange-500 w-4 h-4"></i>
                                </div>
                            </div>
                            <span class="ml-3 text-gray-700">Were later diagnosed with Parkinson's Disease</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 rounded-full bg-orange-100 flex items-center justify-center">
                                    <i data-feather="check" class="text-orange-500 w-4 h-4"></i>
                                </div>
                            </div>
                            <span class="ml-3 text-gray-700">Are within the statute of limitations for filing a claim</span>
                        </li>
                    </ul>
                    <p class="text-gray-600 mb-6">
                        Our legal team offers free, no-obligation case evaluations to determine if you qualify.
                    </p>
                </div>
                
                <div class="md:w-1/2 fade-in">
                    <div id="check-eligibility" class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold mb-6 text-center">Check Your Eligibility</h3>
                        <form class="space-y-4" id="eligibilityForm">
                            <div class="form-field">
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <input type="text" id="first_name" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-orange-500 focus:border-orange-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" id="last_name" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-orange-500 focus:border-orange-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-orange-500 focus:border-orange-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="phone_1" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                <input type="tel" id="phone_1" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-orange-500 focus:border-orange-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="exposure" class="block text-sm font-medium text-gray-700 mb-1">How were you exposed to Paraquat?</label>
                                <select id="exposure" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-orange-500 focus:border-orange-500 transition duration-300">
                                    <option value="">Select an option</option>
                                    <option value="agricultural">Agricultural work</option>
                                    <option value="manufacturing">Manufacturing or handling</option>
                                    <option value="residential">Residential exposure</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="w-full px-6 py-4 rounded-md text-white bg-orange-500 hover:bg-orange-600 text-lg font-semibold transition duration-300 transform hover:scale-105">
                                    Check Eligibility Now
                                </button>
                            </div>
                            <p class="text-xs text-gray-500 text-center">
                                By submitting, you agree to our Terms and Privacy Policy.
                            </p>
                        </form>
                        <!-- TrustedForm -->
                        <script type="text/javascript">
                        (function() {
                            var tf = document.createElement('script');
                            tf.type = 'text/javascript';
                            tf.async = true;
                            tf.src = ("https:" == document.location.protocol ? 'https' : 'http') +
                            '://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&use_tagged_consent=true&l=' +
                            new Date().getTime() + Math.random();
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s);
                        })();
                        </script>
                        <noscript>
                        <img src='https://api.trustedform.com/ns.gif' />
                        </noscript>
                        <!-- End TrustedForm -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl font-bold mb-4">What Our Clients Say</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Hear from individuals who have worked with our legal team on Paraquat exposure cases.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="testimonial-card bg-white p-8 rounded-lg fade-in">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">John D.</h4>
                            <p class="text-orange-500">Former Farm Worker</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "After years of working with Paraquat, I developed Parkinson's. The legal team fought hard for my case and secured compensation that helps cover my medical bills and provides for my family."
                    </p>
                    <div class="flex mt-4 text-orange-400">
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                    </div>
                </div>
                
                <div class="testimonial-card bg-white p-8 rounded-lg fade-in">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">Maria S.</h4>
                            <p class="text-orange-500">Widow of Applicator</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "When my husband passed from Parkinson's after decades of Paraquat exposure, I didn't know where to turn. The attorneys were compassionate and professional throughout the entire process."
                    </p>
                    <div class="flex mt-4 text-orange-400">
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                        <i data-feather="star" class="w-5 h-5 fill-current"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl font-bold mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Get answers to common questions about Paraquat lawsuits and your legal rights.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-4">
                <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden fade-in">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none flex justify-between items-center transition duration-300">
                        <span class="font-semibold">What is Paraquat and why is it dangerous?</span>
                        <i data-feather="chevron-down" class="w-5 h-5 transition-transform duration-300" :class="{ 'transform rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-collapse class="px-6 py-4 bg-white border-t border-gray-200">
                        <p class="text-gray-600">
                            Paraquat is a highly toxic herbicide used for weed and grass control. It's been linked to Parkinson's Disease through numerous scientific studies. Even small amounts can be dangerous, and chronic exposure significantly increases Parkinson's risk.
                        </p>
                    </div>
                </div>
                
                <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden fade-in">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none flex justify-between items-center transition duration-300">
                        <span class="font-semibold">How much does it cost to file a Paraquat lawsuit?</span>
                        <i data-feather="chevron-down" class="w-5 h-5 transition-transform duration-300" :class="{ 'transform rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-collapse class="px-6 py-4 bg-white border-t border-gray-200">
                        <p class="text-gray-600">
                            Our firm works on a contingency fee basis, which means you pay nothing unless we win your case. If we don't recover compensation for you, you owe us nothing for our legal services.
                        </p>
                    </div>
                </div>
                
                <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden fade-in">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none flex justify-between items-center transition duration-300">
                        <span class="font-semibold">How long do I have to file a claim?</span>
                        <i data-feather="chevron-down" class="w-5 h-5 transition-transform duration-300" :class="{ 'transform rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-collapse class="px-6 py-4 bg-white border-t border-gray-200">
                        <p class="text-gray-600">
                            Statute of limitations vary by state, but generally you have 1-3 years from diagnosis to file a claim. However, it's important to act quickly as evidence can become harder to gather over time.
                        </p>
                    </div>
                </div>
                
                <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden fade-in">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none flex justify-between items-center transition duration-300">
                        <span class="font-semibold">What compensation might I receive?</span>
                        <i data-feather="chevron-down" class="w-5 h-5 transition-transform duration-300" :class="{ 'transform rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-collapse class="px-6 py-4 bg-white border-t border-gray-200">
                        <p class="text-gray-600">
                            Compensation may include medical expenses, lost wages, pain and suffering, and in some cases punitive damages. Each case is unique, and our attorneys will fight to maximize your compensation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-orange-500 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
            <h2 class="text-3xl font-bold mb-6">Don't Wait to Protect Your Rights</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">
                Time is limited to file a claim. Contact us today for a free, no-obligation consultation.
            </p>
            <a href="#check-eligibility" class="inline-block px-8 py-4 rounded-md text-orange-500 bg-white hover:bg-gray-100 text-lg font-semibold transition duration-300 transform hover:scale-105">
                Check Eligibility Now
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="fade-in">
                    <h3 class="text-xl font-bold mb-4">FCA - Paraquant</h3>
                    <p class="text-gray-400">
                        Fighting for victims of Paraquat exposure and Parkinson's Disease.
                    </p>
                </div>
                <div class="fade-in">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="#qualify" class="text-gray-400 hover:text-white transition duration-300">Do I Qualify?</a></li>
                        <li><a href="#faq" class="text-gray-400 hover:text-white transition duration-300">FAQ</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div class="fade-in">
                    <h4 class="text-lg font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Disclaimer</a></li>
                    </ul>
                </div>
                <div class="fade-in">
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i data-feather="phone" class="w-5 h-5 mr-2"></i>
                            <span class="text-gray-400">831-921-9697</span>
                        </li>
                        <li class="flex items-center">
                            <i data-feather="mail" class="w-5 h-5 mr-2"></i>
                            <span class="text-gray-400">support@fcanationalservice.org</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 ">
                <p class="text-center text-gray-400 ">© 2025 FCA - Paraquant. All rights reserved.</p>
                <p class="mt-2 text-sm text-center">Attorney Advertising. This is not legal advice. Prior results do not guarantee similar outcomes.</p>
            </div>
        </div>
    </footer>

    <script>
        feather.replace();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        // Mobile menu functionality
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.add('open');
            document.getElementById('mobileMenuOverlay').classList.add('open');
        });
        
        document.getElementById('closeMobileMenu').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.remove('open');
            document.getElementById('mobileMenuOverlay').classList.remove('open');
        });
        
        document.getElementById('mobileMenuOverlay').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.remove('open');
            document.getElementById('mobileMenuOverlay').classList.remove('open');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobileMenu').classList.remove('open');
                document.getElementById('mobileMenuOverlay').classList.remove('open');
            });
        });
        
        // Form submission
        document.getElementById('eligibilityForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // In a real implementation, you would send the form data to a server
            alert('Thank you for your submission. We will contact you shortly to discuss your eligibility.');
            this.reset();
        });
        
        // Scroll progress bar
        window.addEventListener('scroll', function() {
            const winHeight = window.innerHeight;
            const docHeight = document.documentElement.scrollHeight;
            const scrollTop = window.pageYOffset;
            const scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;
            document.getElementById('progressBar').style.width = scrollPercent + '%';
            
            // Sticky nav on scroll
            if (scrollTop > 50) {
                document.getElementById('mainNav').classList.add('scrolled');
            } else {
                document.getElementById('mainNav').classList.remove('scrolled');
            }
        });
        
        // Animated counters for stats
        function animateCounter(id, start, end, duration, suffix = '') {
            let obj = document.getElementById(id);
            let startTime = null;
            
            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                obj.innerHTML = value + suffix;
                
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            }
            
            window.requestAnimationFrame(step);
        }
        
        // Fade in elements on scroll
        function checkFade() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }
        
        // Initialize animations when page loads
        window.addEventListener('load', function() {
            // Start counter animations
            setTimeout(() => {
                animateCounter('stat1', 0, 1250, 2000);
                animateCounter('stat2', 0, 980, 2000);
                animateCounter('stat3', 0, 42, 2000, 'M');
                // stat4 doesn't need animation as it's already at 50
            }, 500);
            
            // Check for fade elements
            checkFade();
        });
        
        // Check for fade elements on scroll
        window.addEventListener('scroll', checkFade);
    </script>
</body>
</html>