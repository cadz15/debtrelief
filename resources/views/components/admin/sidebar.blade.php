 <!-- SIDEBAR HEADER -->
 <div
 :class="sidebarToggle ? 'justify-center' : 'justify-between'"
 class="flex items-center gap-2 pt-8 sidebar-header pb-7"
>
 <a href="index.html" class="flex items-center gap-2">
   <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
     <img class="darkshidden" src="https://cdn-icons-png.flaticon.com/512/5765/5765817.png" width="30" height="30" alt="Logo" />
     <img
       class="hidden darksblock"
       src="https://cdn-icons-png.flaticon.com/512/5765/5765817.png"
       alt="Logo"
       width="30" 
       height="30"
     />
   </span>
   <span class="font-bold text-xl">
    CMS Admin
   </span>

   {{-- <img
     class="logo-icon"
     :class="sidebarToggle ? 'lg:block' : 'hidden'"
     src="src/images/logo/logo-icon.svg"
     alt="Logo"
   /> --}}
 </a>
</div>
<!-- SIDEBAR HEADER -->

<div
 class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar"
>
 <!-- Sidebar Menu -->
 <nav x-data="{selected: $persist('Dashboard')}">
   <!-- Menu Group -->
   <div>
     <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
       <span
         class="menu-group-title"
         :class="sidebarToggle ? 'lg:hidden' : ''"
       >
         CMS Section
       </span>

       <svg
         :class="sidebarToggle ? 'lg:block hidden' : 'hidden'"
         class="mx-auto fill-current menu-group-icon"
         width="24"
         height="24"
         viewBox="0 0 24 24"
         fill="none"
         xmlns="http://www.w3.org/2000/svg"
       >
         <path
           fill-rule="evenodd"
           clip-rule="evenodd"
           d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
           fill=""
         />
       </svg>
     </h3>

     <ul class="flex flex-col gap-4 mb-6">
       <!-- Menu Item Dashboard -->
       <li>
         <a
           href="{{ route('admin.dashboard') }}"
           class="menu-item group @if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
         >
           <img
             class="@if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/361591/section.svg"
           >
            
           </img>

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             Home
           </span>
         </a>
       </li>
       
       <li>
         <a
           href="{{ route('admin.dashboard') }}"
           class="menu-item group @if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
         >
           <img
             class="@if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/532791/file-question-alt.svg"
           >
            
           </img>

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             How it Works
           </span>
         </a>
       </li>


       <li>
         <a
           href="{{ route('admin.dashboard') }}"
           class="menu-item group @if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
         >
           <img
             class="@if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/524049/hand-heart.svg"
           >
            
           </img>

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             About Us
           </span>
         </a>
       </li>

       <li>
         <a
           href="#"
           @click.prevent="selected = (selected === 'Testimonials' ? '':'Testimonials')"
           class="menu-item group"
           :class=" (selected === 'Testimonials')  ? 'menu-item-active' : 'menu-item-inactive'"
         >
           <img
             class="@if(request()->routeIs('admin.faq')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/216617/customer-rate.svg"
           >

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             Testimonials
           </span>

           <svg
             class="menu-item-arrow"
             :class="[(selected === 'Testimonials') ? 'menu-item-arrow-active' : 'menu-item-arrow-inactive', sidebarToggle ? 'lg:hidden' : '' ]"
             width="20"
             height="20"
             viewBox="0 0 20 20"
             fill="none"
             xmlns="http://www.w3.org/2000/svg"
           >
             <path
               d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
               stroke=""
               stroke-width="1.5"
               stroke-linecap="round"
               stroke-linejoin="round"
             />
           </svg>
         </a>

         <!-- Dropdown Menu Start -->
         <div
           class="overflow-hidden transform translate"
           :class="(selected === 'Testimonials') ? 'block' :'hidden'"
         >
           <ul
             :class="sidebarToggle ? 'lg:hidden' : 'flex'"
             class="flex flex-col gap-1 mt-2 menu-dropdown pl-9"
           >
             <li>
               <a
                 href="index.html"
                 class="menu-dropdown-item group"
                 :class="page === 'Testimonials' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
               >
                 All Testimonials
               </a>
             </li>
             
             <li>
               <a
                 href="index.html"
                 class="menu-dropdown-item group"
                 :class="page === 'Testimonials1' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
               >
                 Add Testimonial
               </a>
             </li>
           </ul>
         </div>
         <!-- Dropdown Menu End -->
       </li>


       <li>
         <a
           href="#"
           @click.prevent="selected = (selected === 'FAQ' ? '':'FAQ')"
           class="menu-item group"
           :class=" (selected === 'FAQ')  ? 'menu-item-active' : 'menu-item-inactive'"
         >
           <img
             class="@if(request()->routeIs('admin.faq')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/419861/ask-discussion-faq.svg"
           >

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             FAQs
           </span>

           <svg
             class="menu-item-arrow"
             :class="[(selected === 'FAQ') ? 'menu-item-arrow-active' : 'menu-item-arrow-inactive', sidebarToggle ? 'lg:hidden' : '' ]"
             width="20"
             height="20"
             viewBox="0 0 20 20"
             fill="none"
             xmlns="http://www.w3.org/2000/svg"
           >
             <path
               d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
               stroke=""
               stroke-width="1.5"
               stroke-linecap="round"
               stroke-linejoin="round"
             />
           </svg>
         </a>

         <!-- Dropdown Menu Start -->
         <div
           class="overflow-hidden transform translate"
           :class="(selected === 'FAQ') ? 'block' :'hidden'"
         >
           <ul
             :class="sidebarToggle ? 'lg:hidden' : 'flex'"
             class="flex flex-col gap-1 mt-2 menu-dropdown pl-9"
           >
             <li>
               <a
                 href="index.html"
                 class="menu-dropdown-item group"
                 :class="page === 'Testimonials' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
               >
                 All FAQs
               </a>
             </li>
             
             <li>
               <a
                 href="index.html"
                 class="menu-dropdown-item group"
                 :class="page === 'Testimonials1' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
               >
                 Add FAQ
               </a>
             </li>
           </ul>
         </div>
         <!-- Dropdown Menu End -->
       </li>

       
       <li>
         <a
           href="{{ route('admin.dashboard') }}"
           class="menu-item group @if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
         >
           <img
             class="@if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/6753/analytic-report.svg"
           >
            
           </img>

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             Consultation Page
           </span>
         </a>
       </li>

       
       <li>
         <a
           href="{{ route('admin.dashboard') }}"
           class="menu-item group @if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
         >
           <img
             class="@if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/153772/signing-the-contract.svg"
           >
            
           </img>

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             Disclaimer
           </span>
         </a>
       </li>

     </ul>
   </div>

   <div>
     <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
       <span
         class="menu-group-title"
         :class="sidebarToggle ? 'lg:hidden' : ''"
       >
         CMS Admin
       </span>

       <svg
         :class="sidebarToggle ? 'lg:block hidden' : 'hidden'"
         class="mx-auto fill-current menu-group-icon"
         width="24"
         height="24"
         viewBox="0 0 24 24"
         fill="none"
         xmlns="http://www.w3.org/2000/svg"
       >
         <path
           fill-rule="evenodd"
           clip-rule="evenodd"
           d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
           fill=""
         />
       </svg>
     </h3>

     <ul class="flex flex-col gap-4 mb-6">

       <li>
         <a
           href="{{ route('admin.dashboard') }}"
           class="menu-item group @if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
         >
           <img
             class="@if(request()->routeIs('admin.dashboard')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/446101/user-data.svg"
           >
            
           </img>

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             Leads
           </span>
         </a>
       </li>



       <li>
         <a
           href="{{ route('admin.site-settings') }}"
           class="menu-item group @if(request()->routeIs('admin.site-settings')) menu-item-active @else menu-item-inactive @endif"
         >
           <img
             class="@if(request()->routeIs('admin.site-settings')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/529867/settings.svg"
           >
            
           </img>

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             Site Settings
           </span>
         </a>
       </li>


       <li>
         <a
           href="{{ route('admin.accounts') }}"
           class="menu-item group @if(request()->routeIs('admin.accounts')) menu-item-active @else menu-item-inactive @endif"
         >
           <img
             class="@if(request()->routeIs('admin.accounts')) menu-item-active @else menu-item-inactive @endif"
             width="22"
             height="22"
             src= "https://www.svgrepo.com/show/380126/user-group-accounts.svg"
           >
            
           </img>

           <span
             class="menu-item-text"
             :class="sidebarToggle ? 'lg:hidden' : ''"
           >
             Account Settings
           </span>
         </a>
       </li>

     </ul>


   </div>

   
 </nav>
 <!-- Sidebar Menu -->

</div>