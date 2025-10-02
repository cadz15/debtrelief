<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roundup Lawsuit Claims | Get Compensation Now</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#10B981', // emerald-500
                        secondary: '#8B5CF6' // violet-500
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('http://static.photos/medical/1200x630/42');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .checkmark {
            display: inline-block;
            width: 22px;
            height: 22px;
            background-color: #10B981;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 22px;
            margin-right: 8px;
        }
        
        .stat-card {
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .mobile-menu.open {
            transform: translateX(0);
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
        
        .progress-bar {
            height: 4px;
            background-color: #10B981;
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
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(16, 185, 129, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
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
        
        .form-field {
            transition: all 0.3s ease;
        }
        
        .form-field:focus-within {
            transform: translateY(-2px);
        }
        
        .faq-chevron {
            transition: transform 0.3s ease;
        }
        
        .faq-chevron.rotate-180 {
            transform: rotate(180deg);
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Progress Bar -->
    <div class="progress-bar" id="progressBar"></div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

    <!-- Floating CTA -->
    <div class="floating-cta md:hidden">
        <a href="#cta-form" class="px-6 py-3 rounded-full text-white bg-primary hover:bg-emerald-600 text-sm font-medium transition duration-300 shadow-lg flex items-center">
            <i class="fas fa-file-alt w-4 h-4 mr-2"></i>
            Free Case Review
        </a>
    </div>

    <!-- Navigation -->
    <nav class="sticky-nav bg-white" id="mainNav">
        <div class="container mx-auto px-4 md:px-6 flex justify-between items-center py-4">
            <div class="text-2xl font-bold text-primary">FCA - Round Up</div>
            <div class="hidden md:flex space-x-8">
                <a href="#problem" class="hover:text-primary transition duration-300">The Problem</a>
                <a href="#eligibility" class="hover:text-primary transition duration-300">Eligibility</a>
                <a href="#compensation" class="hover:text-primary transition duration-300">Compensation</a>
                <a href="#faq" class="hover:text-primary transition duration-300">FAQ</a>
            </div>
            <button id="mobileMenuButton" class="md:hidden text-gray-600 hover:text-primary">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu fixed inset-y-0 left-0 z-50 bg-white md:hidden w-64">
        <div class="flex justify-between items-center p-4 border-b">
            <span class="text-xl font-bold text-primary">FCA - Round Up</span>
            <button id="closeMobileMenu" class="text-gray-500 hover:text-primary">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="p-4 space-y-4">
            <a href="#problem" class="block py-2 text-lg font-medium hover:text-primary transition duration-300">The Problem</a>
            <a href="#eligibility" class="block py-2 text-lg font-medium hover:text-primary transition duration-300">Eligibility</a>
            <a href="#compensation" class="block py-2 text-lg font-medium hover:text-primary transition duration-300">Compensation</a>
            <a href="#faq" class="block py-2 text-lg font-medium hover:text-primary transition duration-300">FAQ</a>
            <a href="#cta-form" class="block mt-6 px-4 py-3 rounded-md text-white bg-primary hover:bg-emerald-600 text-lg font-medium text-center transition duration-300">
                Free Case Review
            </a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-bg py-20 md:py-32">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <div class="bg-black bg-opacity-60 p-8 md:p-10 rounded-xl inline-block fade-in">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight text-white">Don't Wait: Roundup Lawsuit Claims Are Being Filed Nationwide</h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto text-gray-100">Lawsuits claim that Roundup's active ingredient is linked to non-Hodgkin's Lymphoma and other cancers. If you or a loved one were diagnosed after Roundup use, you may be entitled to compensation.</p>
                <a href="#cta-form" class="inline-block bg-white hover:bg-gray-100 text-primary font-bold py-4 px-8 rounded-full text-lg shadow-lg transition duration-300 transform hover:scale-105">
                    Start your free case review
                </a>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section id="problem" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">The Dangers of Roundup</h2>
                <div class="w-24 h-1 bg-secondary mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-10">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md border-t-4 border-secondary fade-in">
                    <div class="text-secondary mb-4">
                        <i class="fas fa-exclamation-triangle text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Glyphosate Risks</h3>
                    <p class="text-gray-600">The World Health Organization classified glyphosate as "probably carcinogenic to humans" in 2015, linking it to non-Hodgkin's lymphoma and other cancers.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md border-t-4 border-secondary fade-in">
                    <div class="text-secondary mb-4">
                        <i class="fas fa-heartbeat text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Health Impact</h3>
                    <p class="text-gray-600">Studies show that exposure to Roundup increases cancer risk by 41%, with farmers and landscapers at particularly high risk.</p>
                </div>
                
                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md border-t-4 border-secondary fade-in">
                    <div class="text-secondary mb-4">
                        <i class="fas fa-gavel text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Legal Action</h3>
                    <p class="text-gray-600">Monsanto (now Bayer) has lost multiple lawsuits with verdicts awarding victims millions in damages for failing to warn about cancer risks.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section id="eligibility" class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Do You Qualify?</h2>
                <div class="w-24 h-1 bg-primary mx-auto"></div>
            </div>
            
            <div class="max-w-3xl mx-auto bg-gray-50 p-8 md:p-10 rounded-xl fade-in">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="checkmark">✓</div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Were you or a loved one diagnosed with non-Hodgkin's lymphoma or another cancer?</h3>
                            <p class="text-gray-600">This includes diffuse large B-cell lymphoma, follicular lymphoma, chronic lymphocytic leukemia, or other blood cancers.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="checkmark">✓</div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Did you use Roundup regularly for at least one year?</h3>
                            <p class="text-gray-600">This applies to professional use (farmers, landscapers) or frequent home/garden use.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="checkmark">✓</div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Was your diagnosis within the last 5 years?</h3>
                            <p class="text-gray-600">Most states have statutes of limitations for filing claims, so timing is important.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-10 text-center">
                    <a href="#cta-form" class="inline-block bg-primary hover:bg-emerald-600 text-white font-bold py-3 px-8 rounded-full shadow-md transition duration-300 transform hover:scale-105">
                        Check Your Eligibility Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Compensation Section -->
    <section id="compensation" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Potential Compensation</h2>
                <div class="w-24 h-1 bg-secondary mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="stat-card bg-white p-8 rounded-xl shadow-md text-center fade-in">
                    <div class="text-5xl font-bold text-primary mb-2">$10M+</div>
                    <p class="text-gray-600">Highest individual settlement</p>
                </div>
                <div class="stat-card bg-white p-8 rounded-xl shadow-md text-center fade-in">
                    <div class="text-5xl font-bold text-primary mb-2">$11B</div>
                    <p class="text-gray-600">Total proposed settlement fund</p>
                </div>
                <div class="stat-card bg-white p-8 rounded-xl shadow-md text-center fade-in">
                    <div class="text-5xl font-bold text-primary mb-2">125K+</div>
                    <p class="text-gray-600">Claims filed to date</p>
                </div>
            </div>
            
            <div class="max-w-4xl mx-auto bg-white p-8 md:p-10 rounded-xl shadow-md fade-in">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 rounded-full bg-gray-200 overflow-hidden mr-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Testimonial" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold">James R., Farmer</h4>
                        <p class="text-gray-600">Non-Hodgkin's Lymphoma survivor</p>
                    </div>
                </div>
                <blockquote class="text-xl italic text-gray-700">
                    "After 30 years of using Roundup on my farm, I was diagnosed with lymphoma. The legal team helped me secure a settlement that covers my medical bills and provides for my family. Don't wait - file your claim today."
                </blockquote>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Frequently Asked Questions</h2>
                <div class="w-24 h-1 bg-primary mx-auto"></div>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-4">
                <div class="border border-gray-200 rounded-lg overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none flex justify-between items-center transition duration-300">
                        <span class="font-semibold">How much does it cost to file a Roundup lawsuit?</span>
                        <i class="fas fa-chevron-down faq-chevron"></i>
                    </button>
                    <div class="faq-content px-6 py-4 bg-white border-t border-gray-200 hidden">
                        <p class="text-gray-600">
                            Our firm works on a contingency fee basis, which means you pay nothing unless we win your case. If we don't recover compensation for you, you owe us nothing for our legal services.
                        </p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none flex justify-between items-center transition duration-300">
                        <span class="font-semibold">How long do I have to file a claim?</span>
                        <i class="fas fa-chevron-down faq-chevron"></i>
                    </button>
                    <div class="faq-content px-6 py-4 bg-white border-t border-gray-200 hidden">
                        <p class="text-gray-600">
                            Statute of limitations vary by state, but generally you have 1-3 years from diagnosis to file a claim. However, it's important to act quickly as evidence can become harder to gather over time.
                        </p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none flex justify-between items-center transition duration-300">
                        <span class="font-semibold">What compensation might I receive?</span>
                        <i class="fas fa-chevron-down faq-chevron"></i>
                    </button>
                    <div class="faq-content px-6 py-4 bg-white border-t border-gray-200 hidden">
                        <p class="text-gray-600">
                            Compensation may include medical expenses, lost wages, pain and suffering, and in some cases punitive damages. Each case is unique, and our attorneys will fight to maximize your compensation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Form Section -->
    <section id="cta-form" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class=" mx-auto grid md:grid-cols-2 gap-12">
                <div class="fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Time is Running Out—File Your Claim Today!</h2>
                    <p class="text-gray-600 mb-6">Statutes of limitations vary by state. Complete this form for a free, no-obligation case evaluation.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                            <span>No upfront fees</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                            <span>No obligation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                            <span>Confidential evaluation</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md fade-in">
                    <form method="post" class="space-y-4" id="eligibilityForm">
                            @csrf
                            <div class="form-field">
                                <label for="exposed_loved_one_prq" class="block text-sm font-medium text-gray-700 mb-1">Is the affected individual you or a loved one? <span class="text-red-600">*</span></label>
                                <select id="exposed_loved_one_prq" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                                    <option value="">Select an option</option>
                                    <option value="my-self">My Self</option>
                                    <option value="loved-one">Loved One</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="exposed_to_weed_grass_killer_roundup_prq" class="block text-sm font-medium text-gray-700 mb-1">Is the affected individual you or a loved one? <span class="text-red-600">*</span></label>
                                <select id="exposed_to_weed_grass_killer_roundup_prq" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                                    <option value="">Select an option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="diagnosed_with_prq" class="block text-sm font-medium text-gray-700 mb-1">Have you or a loved one been diagnosed with? <span class="text-red-600">*</span></label>
                                <select id="diagnosed_with_prq" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                                    <option value="">Select an option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="what_year_diagnosed_prq" class="block text-sm font-medium text-gray-700 mb-1">What year were you or a loved one diagnosed? <span class="text-red-600">*</span></label>
                                <input type="number" id="what_year_diagnosed_prq" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="proof_prq" class="block text-sm font-medium text-gray-700 mb-1">Can you provide proof of your diagnostic? <span class="text-red-600">*</span></label>
                                <select id="proof_prq" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                                    <option value="">Select an option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="have_lawyer_representing_prq" class="block text-sm font-medium text-gray-700 mb-1">Do you currently have a lawyer representing your claim? <span class="text-red-600">*</span></label>
                                <select id="have_lawyer_representing_prq" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                                    <option value="">Select an option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="provide_photo_id_prq" class="block text-sm font-medium text-gray-700 mb-1">Can you provide photo ID? <span class="text-red-600">*</span></label>
                                <select id="provide_photo_id_prq" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                                    <option value="">Select an option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name <span class="text-red-600">*</span></label>
                                <input type="text" id="first_name" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name <span class="text-red-600">*</span></label>
                                <input type="text" id="last_name" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-600">*</span></label>
                                <input type="email" id="email" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="phone_1" class="block text-sm font-medium text-gray-700 mb-1">Phone <span class="text-red-600">*</span></label>
                                <input type="tel" id="phone_1" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="address_1" class="block text-sm font-medium text-gray-700 mb-1">Street Address <span class="text-red-600">*</span></label>
                                <input type="text" id="address_1" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City <span class="text-red-600">*</span></label>
                                <input type="text" id="city" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="state" class="block text-sm font-medium text-gray-700 mb-1">State / Province <span class="text-red-600">*</span></label>
                                <input type="text" id="state" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                            </div>
                            <div class="form-field">
                                <label for="postal_code" class="block text-sm font-medium text-gray-700 mb-1">Zip / Postal Code <span class="text-red-600">*</span></label>
                                <input type="text" id="postal_code" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                            </div>
                            <label for="agreed_prq" class="block text-sm font-medium text-gray-700 mb-1">Terms <span class="text-red-600">*</span></label>
                                
                            <p class="text-xs text-gray-500">
                                By clicking the 'Submit' button, you provide your electronic signature and represent that you are at least 18 and agree to Our Privacy Policy and Terms and Conditions.
                            </p>
                            <p class="text-xs text-gray-500">
                                By submitting this form, you expressly agree to be contacted by FCAnationaservice.org regarding your inquiry. This consent allows us to reach you by email or telephone (including text messages, autodialed/auto-selected or pre-recorded and articial voice calls and the us of artificial intelligence), even if your number is listed on any state or federal Do Not Call list.
                            </p>
                            <p class="text-xs text-gray-500">
                                You also approve the us of call recording and monitoring of all your inbound and outbound calls with FCAnationalservice.org and its referrals.
                            </p>
                            <p class="text-xs text-gray-500">
                                I understand that my consent is not required as a condition of purchasinng goods or services annd can be revoked at any time.
                            </p>
                            <p class="text-xs text-gray-500">
                                I confirm that accessed, read and understood the pages: Privacy Policy and Terms of Use.
                            </p>
                            <div class="form-field flex gap-2 items-center">
                                <input type="checkbox" id="agreed_prq" required class=" px-4 py-3 rounded-md border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 transition duration-300">
                                <label for="agreed_prq" class="block text-sm font-medium text-gray-700 mb-1">I agree </label>
                            </div>
                            <div>
                                <button type="submit" class="w-full px-6 py-4 rounded-md text-white bg-emerald-500 hover:bg-emerald-600 text-lg font-semibold transition duration-300 transform hover:scale-105">
                                    Start your free case review
                                </button>
                            </div>
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
                        </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="fade-in">
                    <h3 class="text-xl font-bold mb-4">FCA - Round Up</h3>
                    <p class="text-gray-400">Helping victims of Roundup exposure get the compensation they deserve.</p>
                </div>
                <div class="fade-in">
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#problem" class="text-gray-400 hover:text-white transition duration-300">The Problem</a></li>
                        <li><a href="#eligibility" class="text-gray-400 hover:text-white transition duration-300">Eligibility</a></li>
                        <li><a href="#compensation" class="text-gray-400 hover:text-white transition duration-300">Compensation</a></li>
                    </ul>
                </div>
                <div class="fade-in">
                    <h4 class="font-bold mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Disclaimer</a></li>
                    </ul>
                </div>
                <div class="fade-in">
                    <h4 class="font-bold mb-4">Contact</h4>
                    <p class="text-gray-400 mb-2">831-921-9697</p>
                    <p class="text-gray-400">support@FCAnationalservice.org.com</p>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-400">
                <p>© 2025 FCAnationalservice.org. All rights reserved. This is not a law firm. Attorney advertising.</p>
            </div>
        </div>
    </footer>

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
        
        // FAQ toggle functionality
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const chevron = this.querySelector('.faq-chevron');
                
                // Toggle content visibility
                content.classList.toggle('hidden');
                
                // Rotate chevron
                chevron.classList.toggle('rotate-180');
            });
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
            // Check for fade elements
            checkFade();
        });
        
        // Check for fade elements on scroll
        window.addEventListener('scroll', checkFade);
    </script>
</body>
</html>