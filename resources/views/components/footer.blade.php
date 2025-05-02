<!-- Footer -->
<div class="footer">
    <div class="container px-4 sm:px-8">
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
        <span class="pb-2 p-small font-semibold statement">Copyright © <a href="" class="no-underline">{{ $_siteSettings['year']?? '' }} {{ $_siteSettings['site_name'] ?? '' }}</a></span>
        <p class="mb-4 list-unstyled p-small flex lg:flex-col flex-row">
            <p class="mb-2"><span><i class="fa-solid fa-phone"></i> {{ $_siteSettings['phone'] ?? '' }}</span></p>
            <p class="mb-2"><span><i class="fa-solid fa-location-dot"></i> {{ $_siteSettings['address'] ?? '' }}</span></p>
        </p>
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
