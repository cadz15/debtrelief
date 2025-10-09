<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCA - Rideshare Sexual Abuse Claims</title>
    <!-- Favicon  -->
    <link rel="icon" href="{{ route('getFile', $_siteSettings['logo']) }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#EF4444',
                        secondary: '#FFFFFF',
                    }
                }
            }
        }
    </script>
    <style>
        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1605844797540-c705624fa599?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .case-study-image {
            background-image: url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            min-height: 300px;
        }
        .consequences-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://plus.unsplash.com/premium_photo-1664034645071-e90a6aab3072?q=80&w=465&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            min-height: 400px;
        }
        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }
        .mobile-menu {
            display: none;
        }
        .mobile-menu.active {
            display: block;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-secondary font-sans">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-primary font-bold text-xl">Rideshareclaims</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-primary transition duration-300">Home</a>
                    <a href="#statistics" class="text-gray-700 hover:text-primary transition duration-300">Statistics</a>
                    <a href="#consequences" class="text-gray-700 hover:text-primary transition duration-300">Consequences</a>
                    <a href="#case-studies" class="text-gray-700 hover:text-primary transition duration-300">Case Studies</a>
                    <a href="#consultation" class="text-gray-700 hover:text-primary transition duration-300">Consultation</a>
                    <button class="bg-primary text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300 consultation-btn">
                        Free Consultation
                    </button>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu md:hidden bg-white px-4 pb-4">
            <div class="flex flex-col space-y-4">
                <a href="#home" class="text-gray-700 hover:text-primary py-2 mobile-nav-link">Home</a>
                <a href="#statistics" class="text-gray-700 hover:text-primary py-2 mobile-nav-link">Statistics</a>
                <a href="#consequences" class="text-gray-700 hover:text-primary py-2 mobile-nav-link">Consequences</a>
                <a href="#case-studies" class="text-gray-700 hover:text-primary py-2 mobile-nav-link">Case Studies</a>
                <a href="#consultation" class="text-gray-700 hover:text-primary py-2 mobile-nav-link">Consultation</a>
                <button class="bg-primary text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300 w-full consultation-btn">
                    Free Consultation
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-image relative text-white flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="relative z-10 px-4 md:px-0 max-w-3xl text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">You're Not Alone in This Fight</h1>
            <p class="text-xl md:text-2xl mb-8">If you experienced sexual assault during a rideshare, you have rights. We're here to help you seek justice and compensation.</p>
            <button class="bg-primary hover:bg-red-600 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105 consultation-btn">
                Get Your Free Case Evaluation
            </button>
        </div>
    </section>

    <!-- Statistics Section -->
    <section id="statistics" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">The Alarming Reality of Rideshare Assaults</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="text-primary text-5xl font-bold mb-4">3,824</div>
                    <h3 class="text-xl font-semibold mb-2">Reported Sexual Assaults</h3>
                    <p class="text-gray-600">Sexual assaults reported in Uber vehicles in the US between 2019-2020 (Uber's own safety report)</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="text-primary text-5xl font-bold mb-4">80%</div>
                    <h3 class="text-xl font-semibold mb-2">Victims Are Female</h3>
                    <p class="text-gray-600">Approximately 80% of rideshare sexual assault victims are women (Uber Safety Report)</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="text-primary text-5xl font-bold mb-4">$1.2M</div>
                    <h3 class="text-xl font-semibold mb-2">Average Settlement</h3>
                    <p class="text-gray-600">Average settlement for rideshare sexual assault cases ranges from $500,000 to $2 million</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Consequences of Not Seeking Justice Section -->
    <section id="consequences" class="py-16 bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-4">The Consequences of Not Seeking Justice</h2>
            <p class="text-xl text-center mb-12 text-gray-300 max-w-3xl mx-auto">When survivors don't come forward, they face lasting impacts while perpetrators remain free to harm others.</p>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="consequences-image rounded-lg shadow-xl"></div>
                <div>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-brain text-primary text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold mb-2">Long-Term Psychological Trauma</h3>
                                <p class="text-gray-300">Without proper legal recourse and validation, survivors often develop PTSD, anxiety disorders, and depression. Studies show that unresolved trauma can lead to substance abuse and relationship difficulties years after the assault.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-exclamation-triangle text-primary text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold mb-2">Perpetrators Continue Unchecked</h3>
                                <p class="text-gray-300">When assaults go unreported, dangerous drivers remain on the platform. Uber's own data shows that 53% of assault victims were attacked by drivers with previous complaints that weren't properly investigated.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-dollar-sign text-primary text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold mb-2">Financial Burden of Recovery</h3>
                                <p class="text-gray-300">Survivors often face substantial therapy costs, lost wages from inability to work, and medical expenses. Without legal compensation, these financial burdens can compound the trauma and create long-term economic hardship.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-shield-alt text-primary text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold mb-2">Safety Concerns for Others</h3>
                                <p class="text-gray-300">Every unreported assault puts other potential victims at risk. Holding companies accountable through legal action forces them to implement better safety measures, background checks, and driver monitoring systems.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-6 bg-gray-700 rounded-lg border-l-4 border-primary">
                        <h4 class="font-bold text-lg mb-2">Real Impact: Sarah's Story</h4>
                        <p class="text-gray-300 italic">"After my assault, I didn't report it for months. I developed severe anxiety, couldn't use any rideshare services, and spent thousands on therapy. When I finally came forward, I learned the same driver had assaulted two other women in that time. Seeking justice wasn't just about me - it was about protecting others."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study Section -->
    <section id="case-studies" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Real Results: How We've Helped Survivors</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="case-study-image rounded-lg shadow-xl"></div>
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Securing Justice Through Legal Action</h3>
                    <p class="text-gray-600 mb-6">While every case is unique and results vary based on specific circumstances, our legal team has successfully represented numerous survivors of rideshare assault in seeking compensation for their injuries and holding companies accountable.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1 text-primary">
                                <i class="fas fa-balance-scale text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-lg mb-1">How We Build Strong Cases</h4>
                                <p class="text-gray-600">We thoroughly investigate each claim, gathering evidence including ride records, driver history, company safety protocols, and expert testimony to establish negligence.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1 text-primary">
                                <i class="fas fa-chart-line text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-lg mb-1">Factors That Influence Outcomes</h4>
                                <p class="text-gray-600">Case results depend on evidence strength, jurisdiction, the specific facts of the incident, and the extent of damages. We provide realistic assessments based on your unique situation.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1 text-primary">
                                <i class="fas fa-hand-holding-heart text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-lg mb-1">Comprehensive Support</h4>
                                <p class="text-gray-600">Beyond legal representation, we connect clients with counseling resources and support services to aid in their recovery journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonials -->
            <div class="bg-gray-100 rounded-xl p-8 md:p-12">
                <h3 class="text-2xl font-bold text-center mb-8 text-gray-800">What Our Clients Say</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="text-primary text-2xl mr-3">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="text-gray-600 italic">"The legal team at FCAnationalservice.org treated me with compassion and respect throughout the entire process. They explained everything clearly and fought hard for my rights. While I can't discuss the specific outcome, I can say I felt supported and believed every step of the way."</p>
                        </div>
                        <p class="text-gray-800 font-medium">- Former Client</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="text-primary text-2xl mr-3">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="text-gray-600 italic">"After my assault, I felt completely alone. Working with FCAnationalservice.org gave me back a sense of control. They helped me understand my legal options and supported me through a difficult time. The process was challenging, but having advocates who genuinely cared made all the difference."</p>
                        </div>
                        <p class="text-gray-800 font-medium">- Former Client</p>
                    </div>
                </div>
                
                <div class="mt-8 text-center">
                    <p class="text-gray-600 max-w-2xl mx-auto">Note: Specific case results cannot be guaranteed as each matter is unique. The outcome of any case depends on many factors, including the specific facts and circumstances. Testimonials do not constitute a guarantee, warranty, or prediction of the outcome of your legal matter.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Form Section -->
    <section id="consultation" class="py-16 bg-primary text-white">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white text-gray-800 rounded-lg  overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 p-8 bg-primary text-white">
                        <h2 class="text-3xl font-bold mb-4">Take the First Step Toward Justice</h2>
                        <p class="mb-6">Our compassionate legal team is ready to listen to your story and explain your options. All consultations are completely confidential.</p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check-circle text-white mt-1"></i>
                                </div>
                                <p class="ml-3">No upfront fees - We only get paid if you win</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check-circle text-white mt-1"></i>
                                </div>
                                <p class="ml-3">Nationwide representation</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check-circle text-white mt-1"></i>
                                </div>
                                <p class="ml-3">24/7 availability for urgent cases</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8">
                        <form id="consultation-form">
                            <div class="grid grid-cols-1 gap-6">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">First Name <span class="text-red-600">*</span></label>
                                        <input required type="text" id="first-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                                    </div>
                                    <div>
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name <span class="text-red-600">*</span></label>
                                        <input required type="text" id="last-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                                    </div>
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number <span class="text-red-600">*</span></label>
                                    <input required type="tel" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-600">*</span></label>
                                    <input required type="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                                </div>
                                <div>
                                    <label for="incident" class="block text-sm font-medium text-gray-700">Did you or a loved one experience assault while in a rideshare (Uber, Lyft, etc)? <span class="text-red-600">*</span></label>
                                    <select required id="incident" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                                        <option>Select an option</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="receipt" class="block text-sm font-medium text-gray-700">Do you have the receipt from the App? <span class="text-red-600">*</span></label>
                                    <select required id="receipt" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                                        <option>Select an option</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="date" class="block text-sm font-medium text-gray-700">When did the incident occur? <span class="text-red-600">*</span></label>
                                    <input required type="date" id="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                                </div>
                                <div>
                                    <label for="state" class="block text-sm font-medium text-gray-700">In what state did the abuse occur? <span class="text-red-600">*</span></label>
                                    <select required id="state" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                                        <option>Select a state</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Arizona</option>
                                        <option>Arkansas</option>
                                        <option>California</option>
                                        <option>Colorado</option>
                                        <option>Connecticut</option>
                                        <option>Delaware</option>
                                        <option>Florida</option>
                                        <option>Georgia</option>
                                        <option>Hawaii</option>
                                        <option>Idaho</option>
                                        <option>Illinois</option>
                                        <option>Indiana</option>
                                        <option>Iowa</option>
                                        <option>Kansas</option>
                                        <option>Kentucky</option>
                                        <option>Louisiana</option>
                                        <option>Maine</option>
                                        <option>Maryland</option>
                                        <option>Massachusetts</option>
                                        <option>Michigan</option>
                                        <option>Minnesota</option>
                                        <option>Mississippi</option>
                                        <option>Missouri</option>
                                        <option>Montana</option>
                                        <option>Nebraska</option>
                                        <option>Nevada</option>
                                        <option>New Hampshire</option>
                                        <option>New Jersey</option>
                                        <option>New Mexico</option>
                                        <option>New York</option>
                                        <option>North Carolina</option>
                                        <option>North Dakota</option>
                                        <option>Ohio</option>
                                        <option>Oklahoma</option>
                                        <option>Oregon</option>
                                        <option>Pennsylvania</option>
                                        <option>Rhode Island</option>
                                        <option>South Carolina</option>
                                        <option>South Dakota</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Utah</option>
                                        <option>Vermont</option>
                                        <option>Virginia</option>
                                        <option>Washington</option>
                                        <option>West Virginia</option>
                                        <option>Wisconsin</option>
                                        <option>Wyoming</option>
                                    </select>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input required id="consent" name="consent" type="checkbox" class="focus:ring-primary h-4 w-4 text-primary border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="consent" class="font-medium text-gray-700">I understand by submitting this form that I am providing my consent to be contacted by FCAnationalservice.org and its co-counsel, potentially using automated technology, at the number provided regarding my potential claim/their services. Consent is not required to use their services. Msg frequency varies, and message and data rates may apply. Reply HELP for help or STOP to unsubscribe. I understand and agree that by submitting this form I agree to the Privacy Policy and Terms of Use and that this form does not create an attorney-client relationship and is not confidential or privileged and may be shared. <span class="text-red-600">*</span></label>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">FCAnationalservice.org</h3>
                    <p class="text-gray-400">Fighting for victims of rideshare sexual assault nationwide.</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#statistics" class="text-gray-400 hover:text-white transition duration-300">Statistics</a></li>
                        <li><a href="#consequences" class="text-gray-400 hover:text-white transition duration-300">Consequences</a></li>
                        <li><a href="#case-studies" class="text-gray-400 hover:text-white transition duration-300">Case Studies</a></li>
                        <li><a href="#consultation" class="text-gray-400 hover:text-white transition duration-300">Consultation</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Terms of Use</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Disclaimer</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400"><i class="fas fa-phone mr-2"></i> {{ $_siteSettings['phone'] ?? '' }}</li>
                        <li class="flex items-center text-gray-400"><i class="fas fa-envelope mr-2"></i> support@fcanationalservice.org</li>
                        <li class="flex items-center text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i> {{ $_siteSettings['address'] ?? '' }}</li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-400 text-sm">
                <p>© 2025 FCAnationalservice.org Advocates. All rights reserved. Attorney Advertising. Prior results do not guarantee a similar outcome.</p>
                <p class="mt-2">This is attorney advertising. The information on this website is for general information purposes only. Nothing on this site should be taken as legal advice for any individual case or situation.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('active');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    mobileMenu.classList.remove('active');
                    
                    // Scroll to target
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Consultation button scroll to form
        document.querySelectorAll('.consultation-btn').forEach(button => {
            button.addEventListener('click', function() {
                const formSection = document.getElementById('consultation');
                if(formSection) {
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    mobileMenu.classList.remove('active');
                    
                    window.scrollTo({
                        top: formSection.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Mobile nav link click handler
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', function() {
                const mobileMenu = document.getElementById('mobile-menu');
                mobileMenu.classList.remove('active');
            });
        });
    </script>
</body>
</html>