<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="//unpkg.com/alpinejs"></script>
    <title>@yield('title', 'Home')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-200" x-data="{ mobileMenuOpen: false }">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button
              type="button"
              @click="mobileMenuOpen = !mobileMenuOpen"
              :aria-expanded="mobileMenuOpen"
              aria-controls="mobile-menu"
              class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none focus:ring-inset"
            >
              <span class="sr-only">Open main menu</span>
              <!-- Hamburger Icon -->
              <svg x-show="!mobileMenuOpen" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Close Icon -->
              <svg x-show="mobileMenuOpen" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex shrink-0 items-center">
              <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            </div>
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4">
                <a href="#" class="rounded-md bg-indigo-50 text-indigo-700 px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-indigo-700">Team</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-indigo-700">Projects</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-indigo-700">Calendar</a>
              </div>
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button type="button" class="relative rounded-full bg-white p-1 text-gray-500 hover:text-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none">
              <span class="sr-only">View notifications</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </button>
            <!-- Profile dropdown -->
            <div class="relative ml-3" x-data="{ open: false }">
              <div>
                <button
                  @click="open = !open"
                  @keydown.escape="open = false"
                  type="button"
                  class="relative flex rounded-full bg-white text-sm focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none"
                  id="user-menu-button"
                  aria-expanded="false"
                  aria-haspopup="true"
                >
                  <span class="sr-only">Open user menu</span>
                  <img class="size-8 rounded-full border" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
              <!-- Dropdown menu -->
              <div
                x-show="open"
                @click.away="open = false"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                style="display: none;"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="user-menu-button"
                tabindex="-1"
              >
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-700" role="menuitem" tabindex="-1">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-700" role="menuitem" tabindex="-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-700" role="menuitem" tabindex="-1">Sign out</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="sm:hidden" id="mobile-menu" x-show="mobileMenuOpen" x-transition>
        <div class="space-y-1 px-2 pt-2 pb-3 bg-white border-t border-gray-200">
          <a href="#" class="block rounded-md bg-indigo-50 text-indigo-700 px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100 hover:text-indigo-700">Team</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100 hover:text-indigo-700">Projects</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100 hover:text-indigo-700">Calendar</a>
        </div>
      </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow">
        <div class="container mx-auto px-4 py-10">
            @yield('content')
        </div>
    </main>

    <!-- Bottom Navbar Mobile -->
<nav class="fixed bottom-0 left-0 right-0 z-30 bg-white sm:hidden rounded-t-[32px] shadow-lg"
     style="box-shadow: 0 -2px 24px 0 rgba(0,0,0,.06);">
    <div class="flex justify-between items-center px-2 py-2">
        <!-- Home -->
        <a href="#"
           class="flex flex-col items-center flex-1 text-indigo-600"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1" fill="currentColor" viewBox="0 0 24 24">
                <path d="M3 10.75V19a2 2 0 0 0 2 2h4a1 1 0 0 0 1-1v-4h2v4a1 1 0 0 0 1 1h4a2 2 0 0 0 2-2v-8.25a1 1 0 0 0-.293-.707l-7-7a1 1 0 0 0-1.414 0l-7 7A1 1 0 0 0 3 10.75z"/>
            </svg>
            <span class="text-xs font-medium">Home</span>
        </a>
        <!-- Rekber -->
        <a href="#"
           class="flex flex-col items-center flex-1 text-gray-300"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1" fill="currentColor" viewBox="0 0 24 24">
                <rect x="3" y="7" width="18" height="10" rx="2" fill="currentColor" fill-opacity="0.1"/>
                <rect x="3" y="7" width="18" height="10" rx="2" stroke="currentColor" stroke-width="1.2" fill="none"/>
                <circle cx="17" cy="12" r="1" fill="currentColor"/>
            </svg>
            <span class="text-xs font-medium">Rekber</span>
        </a>
        <!-- Promo -->
        <a href="#"
           class="flex flex-col items-center flex-1 text-gray-300"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1" fill="currentColor" viewBox="0 0 24 24">
                <circle cx="15" cy="9" r="2" fill="currentColor" fill-opacity="0.1"/>
                <path d="M3 11l8.293-8.293a1 1 0 0 1 1.414 0L21 10.586a2 2 0 0 1 0 2.828l-7.586 7.586a2 2 0 0 1-2.828 0L3 13a2 2 0 0 1 0-2.828z" stroke="currentColor" stroke-width="1.2" fill="none"/>
            </svg>
            <span class="text-xs font-medium">Promo</span>
        </a>
        <!-- Riwayat -->
        <a href="#"
           class="flex flex-col items-center flex-1 text-gray-300"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1" fill="currentColor" viewBox="0 0 24 24">
                <rect x="4" y="5" width="16" height="15" rx="2" fill="currentColor" fill-opacity="0.1"/>
                <rect x="4" y="5" width="16" height="15" rx="2" stroke="currentColor" stroke-width="1.2" fill="none"/>
                <path d="M8 3v4M16 3v4" stroke="currentColor" stroke-width="1.2"/>
                <rect x="9" y="13" width="6" height="2" rx="1" fill="currentColor"/>
            </svg>
            <span class="text-xs font-medium">Riwayat</span>
        </a>
    </div>
</nav>

    <!-- Footer (hide on mobile) -->
    <footer class="bg-white border-t hidden sm:block">
        <div class="container mx-auto px-4 py-6 text-center text-gray-500">
            &copy; {{ date('Y') }} MyApp. All rights reserved.
        </div>
    </footer>
</body>
</html>