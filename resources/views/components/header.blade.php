<!-- Navigation -->
<nav class="navbar fixed-top" style="background-color: rgb(241, 249, 252);">
  <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">
      
      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

      <!-- Image Logo -->
      <a class="flex items-center gap-x-2 mr-4 whitespace-nowrap hover:no-underline focus:no-underline" href="{{ route('home') }}">
          <img src="{{ route('getFile', $_siteSettings['logo']) }}" alt="{{ $_siteSettings['site_name'] }}" class="h-20" />
          <span class="text-lg">{{ $_siteSettings['site_name'] }}</span>
      </a>

      <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline inline-block lg:hidden lg:text-gray-400" type="button" id="hamburger-menu" data-toggle="offcanvas">
          <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
        <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
            @if(!request()->routeIs('cta'))
              <li>
                @if(request()->routeIs('home'))
                    <a class="nav-link page-scroll" href="#header">How It Works</a>
                @else
                    <a class="nav-link page-scroll" href="{{ route('home') }}#header">How It Works</a>
                @endif
              </li>
              <li>
                @if(request()->routeIs('home'))
                <a class="nav-link page-scroll" href="#whyus">Why Choose Us</a>
                @else
                <a class="nav-link page-scroll" href="{{ route('home') }}#whyus">Why Choose Us</a>
                @endif
              </li>
              <li>
                @if(request()->routeIs('home'))
                <a class="nav-link page-scroll" href="#services">Our Services</a>
                @else
                <a class="nav-link page-scroll" href="{{ route('services') }}#services">Our Services</a>
                @endif
              </li>
              <li>
                @if(request()->routeIs('home'))
                <a class="nav-link page-scroll" href="#testimonials">Reviews</a>
                @else
                <a class="nav-link page-scroll" href="{{ route('home') }}#testimonials">Reviews</a>
                @endif
              </li>
              <li>
                @if(request()->routeIs('home'))
                <a class="nav-link page-scroll" href="#faq">FAQ's</a>
                @else
                <a class="nav-link page-scroll" href="{{ route('home') }}#faq">FAQ's</a>
                @endif
              </li>
              
              @endif
          </ul>
          <span class="block lg:ml-3.5">
              <a class="no-underline" href="#">
                  <button class="btn-outline-reg" type="button"><span>{{ $_siteSettings['phone'] }}</span> </button>
              </a>
          </span>
      </div> <!-- end of navbar-collapse -->
  </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->