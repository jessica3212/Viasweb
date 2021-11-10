<!-- This example requires Tailwind CSS v2.0+ -->
<nav x-data="{ open: false }" class="bg-gray-800 sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button @click="open = ! open"
            
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Abrir Menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">

                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="block h-6 w-6" 
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden h-6 w-6" 
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  
            </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">

            <a href="/">
            <x-jet-application-mark class="block lg:hidden h-9 w-auto" />
            </a>
            <a href="/">
            <x-jet-application-mark class="hidden lg:block h-10 w-auto" />
            </a>

          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
                
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            
              <x-jet-nav-link href="/" :active="request()->routeIs('')">Inicio</x-jet-nav-link>
  
              <x-jet-nav-link href="{{ route('normatividad') }}" :active="request()->routeIs('normatividad')">Informes Ejecutivos</x-jet-nav-link>

              <x-jet-dropdown>
                <x-slot name="trigger">                     
                         
                    <button
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                        {{ __('Gestion y Control') }}
                    </button>
                          
                </x-slot>
                <x-slot name="content">

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Gestion y Control') }}
                    </div>

                    <x-jet-dropdown-link href="#">
                        {{ __('Información') }}
                    </x-jet-dropdown-link>
                    <div class="border-t border-gray-100"></div>
                    <x-jet-dropdown-link href="#">
                        {{ __('Entes de Control') }}
                    </x-jet-dropdown-link>

                </x-slot>
            </x-jet-dropdown>

            <x-jet-dropdown>
                <x-slot name="trigger">
                 
                   <button
                       class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                       {{ __('Biblioteca') }}
                   </button>
                           
                </x-slot>
                <x-slot name="content">

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Biblioteca') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('plan_vial.index') }}">
                        {{ __('Plan Vial') }}
                    </x-jet-dropdown-link>
                    <div class="border-t border-gray-100"></div>
                    <x-jet-dropdown-link href="{{ route('vias.index') }}">
                        {{ __('Inventario Vial') }}
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="{{ route('GIS.index') }}">
                        {{ __('MAPA VIAL') }}
                    </x-jet-dropdown-link>

                </x-slot>
            </x-jet-dropdown>

            <x-jet-nav-link href="{{ route('proyectos') }}" :active="request()->routeIs('proyectos')">Banco de Proyectos</x-jet-nav-link>
  
            <x-jet-nav-link href="{{ route('acercade') }}" :active="request()->routeIs('acercade')">Acerca De</x-jet-nav-link>
  
            </div>
          </div>
        </div>

        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
         
          <!-- Profile dropdown -->
          <div class="ml-3 relative">
            @auth

                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">

                            <button
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>

                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Administrar cuenta') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil') }}
                            </x-jet-dropdown-link>

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>

                @else

                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">

                            <button
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">


                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24"
                                    class="h-8 w-8 rounded-full object-cover text-gray-100">
                                    <path
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                    </path>
                                </svg>
                            </button>
                    
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Registrate o Inicia Sesión') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('login') }}">
                                {{ __('Iniciar Sesión') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('register') }}">
                                {{ __('Registrarse') }}
                            </x-jet-dropdown-link>

                        </x-slot>
                    </x-jet-dropdown>

                @endauth
          </div>
        </div>

      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-jet-responsive-nav-link>
     
      </div>
    </div>
  </nav>
  