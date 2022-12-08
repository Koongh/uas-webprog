<header>
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div id="ProfileBurgerMenu" class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Burger Button-->
        <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>


      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <a href="/">
            <img class="block h-10 w-auto lg:hidden" src="{{ asset('img/logo2.png')}}" />
            <img class="hidden h-10 w-auto lg:block" src="{{ asset('img/logo2.png')}}" />
          </a>
          <!-- <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> -->
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
            <a href="/about-us" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About Us</a>
            <a href="/discount" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Discound</a>
            @if(!Auth::check())
                <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                @can('gate_admin')
                  <a href="/register" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Create New Employee Account</a>
                @endcan
            @endif

          </div>
        </div>
      </div>
      @can('gate_buat_check_login_apa_belom')
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div id="profileBtn" class="relative ml-3">
            <div>
                <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <!-- <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> -->
                <div id="profileImage" class="text-white w-8 h-8 flex justify-center items-center border-red-400 bg-red-500 rounded-full" >
                  {{substr(Auth::user()->name, 0,1)}}
                </div>
                </button>
            </div>
            <div id="profileMenu" class="absolute hidden right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a onclick="event.preventDefault();this.closest('form').submit();" href="/logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </form>
            </div>
        </div>
      </div>
      @endcan
      
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="hidden" id="profile-mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3">
        <a href="/" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>
        <a href="/about-us" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">About Us</a>
        @if (Route::has('login'))
            <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Login</a>
            <a href="/register" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Create New Employee Account</a>
        @endif
    </div>
  </div>
</nav>

</header>
<script>
    let profileMenu = document.querySelector("#profileMenu")
    document.querySelector("#profileBtn").addEventListener("click", () =>{
        profileMenu.classList.contains("hidden") ? profileMenu.classList.remove('hidden') : profileMenu.classList.add('hidden') ;
    })

    let ProfileMobileMenu = document.querySelector("#profile-mobile-menu")
    document.querySelector("#ProfileBurgerMenu").addEventListener("click", () =>{
        ProfileMobileMenu.classList.contains("hidden") ? ProfileMobileMenu.classList.remove('hidden') : ProfileMobileMenu.classList.add('hidden') ;
    })

    

    
</script>