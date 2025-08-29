<!-- Footer -->
<!-- <div class="footer"> -->
    <!-- <div class="container px-4 sm:px-8"> -->
    <!-- </div> end of container -->
<!-- </div> end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container px-4 sm:px-8 flex flex-col justify-center w-full items-center">
            <ul class="mb-4 list-unstyled p-small ">
                <li class="mb-2"><a href="{{ route('terms.use') }}">Terms Of Use</a></li>
                <li class="mb-2"><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                <li class="mb-2"><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
            </ul>
            <div class="flex flex-row gap-2">

                <span class="pb-2 p-small font-semibold ">Copyright © <a href="" class="no-underline">{{ $_siteSettings['year']?? '' }} {{ $_siteSettings['site_name'] ?? '' }}</a></span>
                <p class="mb-4 list-unstyled p-small flex lg:flex-col flex-row">
                    <p class="mb-2"><span><i class="fa-solid fa-phone"></i> {{ $_siteSettings['phone'] ?? '' }}</span></p>
                    <p class="mb-2"><span><i class="fa-solid fa-location-dot"></i> {{ $_siteSettings['address'] ?? '' }}</span></p>
                </p>
            </div>
        
    </div> 
    <!-- end of container -->
    <div class="container px-4 sm:px-8 py-4">
        @yield('disclaimer')
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->



<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://themewagon.github.io/pavo/js/swiper.min.js" ></script>

@yield('scripts')
</body>
</html>
