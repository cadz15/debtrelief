<!-- Footer -->
<div class="footer">
    <div class="container px-4 sm:px-8">
        {{-- <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Pavo is a mobile application for marketing automation and you can reach the team at <a class="text-indigo-600 hover:text-gray-500" href="mailto:email@domain.com">email@domain.com</a></h4> --}}
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container px-4 sm:px-8 flex md:flex-row flex-col justify-between ">
        <ul class="mb-4 list-unstyled p-small">
            @if(!request()->routeIs('cta'))
            <li class="mb-2"><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
            @endif
        </ul>
        <span class="pb-2 p-small font-semibold statement">Copyright © <a href="" class="no-underline">{{ $_siteSettings['site_name'] }}</a></span>
        <ul class="mb-4 list-unstyled p-small flex">
            <li class="mb-2"><span><i class="fa-solid fa-phone"></i> {{ $_siteSettings['phone'] }}</span></li>
            <li class="mb-2"><span><i class="fa-solid fa-location-dot"></i> 3702 W Spruce St. #1211 Tampa, FL 33607 United States</span></li>
        </ul>
    </div> 


    @if(request()->routeIs('cta'))
        <div class="container py-4 pt-12">
            <div class="flex flex-col gap-y-2 ">
                {!! $disclaimer?? '' !!}
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
