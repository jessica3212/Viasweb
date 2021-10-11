<nav x-data="{ open: false }" class="bg-gradient-to-r from-blue-300 to-gray-300 border-b border-gray-100 ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-jet-nav-link>
                </div>

                <x-jet-dropdown>
                    <x-slot name="trigger">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <button
                                        class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition">
                                        {{ __('Normatividad') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </x-slot>
                    <x-slot name="content">

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Normatividad') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Ley') }}
                        </x-jet-dropdown-link>
                        <div class="border-t border-gray-100"></div>
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Decretos') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Politica y Lineamientos') }}
                        </x-jet-dropdown-link>

                    </x-slot>
                </x-jet-dropdown>

                <x-jet-dropdown>
                    <x-slot name="trigger">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <button
                                        class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition">
                                        {{ __('Gestion y Control') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </x-slot>
                    <x-slot name="content">

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Gestion y Control') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Información') }}
                        </x-jet-dropdown-link>
                        <div class="border-t border-gray-100"></div>
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Entes de Control') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Presupuesto') }}
                        </x-jet-dropdown-link>

                    </x-slot>
                </x-jet-dropdown>

                <x-jet-dropdown>
                    <x-slot name="trigger">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <button
                                        class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition">
                                        {{ __('Biblioteca') }}
                                    </button>
                                </div>
                            </div>
                        </div>
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

                    </x-slot>
                </x-jet-dropdown>

                <x-jet-dropdown>
                    <x-slot name="trigger">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <button
                                        class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition">
                                        {{ __('Contratación') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </x-slot>
                    <x-slot name="content">

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Contratación') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Contratos Aprovados') }}
                        </x-jet-dropdown-link>

                    </x-slot>
                </x-jet-dropdown>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('proyectos') }}" :active="request()->routeIs('proyectos')">
                        {{ __('Banco de Proyectos') }}
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('acercade') }}" :active="request()->routeIs('acercade')">
                        {{ __('Acerca De') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    @auth

                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">

                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
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
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">


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

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

       <!-- Responsive Settings Options -->
       @auth

       <div class="pt-4 pb-1 border-t border-gray-200">
           <div class="flex items-center px-4">
               @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                   <div class="flex-shrink-0 mr-3">
                       <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                           alt="{{ Auth::user()->name }}" />
                   </div>
               @endif

               <div>
                   <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                   <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
               </div>
           </div>

           <div class="mt-3 space-y-1">
               <!-- Account Management -->
               <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                   :active="request()->routeIs('profile.show')">
                   {{ __('Perfil') }}
               </x-jet-responsive-nav-link>

               <!-- Authentication -->
               <form method="POST" action="{{ route('logout') }}">
                   @csrf

                   <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                               this.closest('form').submit();">
                       {{ __('Cerrar Sesión') }}
                   </x-jet-responsive-nav-link>
               </form>

           </div>
       </div>
   @else

       <div class="pt-4 pb-1 border-t border-gray-200">
           <div class="mt-3 space-y-1">

               <div class="pt-2 pb-3 space-y-1">
                   <x-jet-responsive-nav-link href="{{ route('login') }}">
                       {{ __('Iniciar Sesión') }}
                   </x-jet-responsive-nav-link>
               </div>
               <div class="pt-2 pb-3 space-y-1">
                   <x-jet-responsive-nav-link href="{{ route('register') }}">
                       {{ __('Registrarse') }}
                   </x-jet-responsive-nav-link>
               </div>

           </div>
       </div>

   @endauth
    </div>
</nav>