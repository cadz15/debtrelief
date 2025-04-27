<!-- Footer -->
<div class="footer">
    <div class="container px-4 sm:px-8">
        {{-- <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Pavo is a mobile application for marketing automation and you can reach the team at <a class="text-indigo-600 hover:text-gray-500" href="mailto:email@domain.com">email@domain.com</a></h4> --}}
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
        <ul class="mb-4 list-unstyled p-small">
            @if(!request()->routeIs('cta'))
            <li class="mb-2"><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
            @endif
        </ul>
        <span class="pb-2 p-small font-semibold statement">Copyright © <a href="" class="no-underline">{{ $_siteSettings['site_name'] }}</a></span>

    </div> 


    @if(request()->routeIs('cta'))
    <div class="container py-4 pt-12">
        <div class="flex flex-col gap-y-6 ">
            <p class="text-lg">
                This site is a free educational and motivational resource to help consumers understand consolidation options. The information on this site is not provided by any state organization but as a convenience to state residents with links to state and federal hardship assistance for informational purposes only. We do not discriminate on the basis of race, color, religion, sex, marital status, national origin or ancestry.
            </p>
    
            <p class="text-lg">
                We are not a lender, creditor or debt collector. We use fair credit to settle debt. Among other consolidation options, referral arrangements with affiliates or partners may make it possible for you to apply for a loan. Term and APR will depend on requested loan amount, creditworthiness, income, debt payment obligations, credit history and other factors.
            </p>
            <p class="text-lg">
                Testimonials are the individuals' expressed opinion and may not be reflective of all experiences with the company.
            </p>
            
        </div>
    </div>
@endif
<!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->



<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://themewagon.github.io/pavo/js/swiper.min.js" ></script>

@yield('scripts')
</body>
</html>
