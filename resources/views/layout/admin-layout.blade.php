<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <title>@yield('title', 'Debt Relief')</title>
    
    <link rel="icon" href="favicon.ico">
    @vite(['resources/css/admin.css' , 'resources/css/app.css', 'resources/js/admin.js'])

    @yield('styles')
  </head>
  <body
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
          darkMode = '';
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}"
  >
  
    <div
      x-show="loaded"
      x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
      class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white "
    >
      <div
        class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"
      ></div>
    </div>

    <div class="flex h-screen overflow-hidden">
      

      <aside
        :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
        class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5     lg:static lg:translate-x-0"
      >
        @include('components.admin.sidebar')      
      </aside>


      <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
        
        <div
          @click="sidebarToggle = false"
          :class="sidebarToggle ? 'block lg:hidden' : 'hidden'"
          class="fixed w-full h-screen z-9 bg-gray-900/50"
        >
      </div>

        @include('components.admin.navigation')

        <main>
          @yield('content')
        </main>

      </div>

    </div>

    @yield('scripts')
  </body>
</html>
