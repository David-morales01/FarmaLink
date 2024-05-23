<header>
    <div class="header py-2 flex-col text-white flex justify-around items-center gap-2  sm:flex-row ">
        <p class="text-center">Bienvenido a Farma Link. ¡Las mejores farmacias en tus manos!</p>
        <a href="#" class="flex  gap-4 items-center"><img src="{{ asset('build/assets/whatsapp.svg')}}" alt="Whatsapp Icon" class="footer-icon" data-sk-trans-index="2">(505) 000000</a>
    </div>
    <div class="flex  justify-between py-4 items-center container mx-auto px-4 gap-y-4 gap-x-2 flex-wrap">
        <x-authentication-card-logo />
        <div class=" bg-gray-200 flex rounded-full px-5 items-center md:gap-4 order-3 md:order-2  ">
            <div class="flex items-center gap-1 relative" x-data="{ open: false }">
                <button class="flex items-center gap-2" x-on:click="open=true">
                    categorías
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <path d="M13.8725 5.96484L9.52583 10.3115C9.0125 10.8248 8.1725 10.8248 7.65917 10.3115L3.3125 5.96484" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <div x-show="open" x-on:click.away="open=false" :class="{' import-flex': open}" class="absolute w-[200px] hidden top-6 rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none " role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <ul x-show="open">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </ul>
                </div>
            </div>
            <div class="relative ">
                <input type="text" class=" border-none bg-transparent w-[200px] md:w-[250px] focus:border-transparent focus:ring-0" placeholder="Buscar producto ">
            </div>
        </div>

        <div class="md:order-3" x-data="{ open: false }" :class="{'open-menu': open}">
           
             <div class=" lg:flex items-center gap-2 font-bold sub-menu" x-on:click="open=false" >
                <li class="list-none">
                    <x-nav-link href="#"> Doctor en línea </x-nav-link>
                </li>
                <li class="list-none">/
                    <x-nav-link href="#"> Blog </x-nav-link>
                </li>
                / @if(auth()->check())


                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}

                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manejar cuenta') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}" wire:navigate>
                                {{ __('Perfil') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('dashboard') }}" wire:navigate>
                                {{ __('Dashboard') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Cerrar sesion') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                @else

                <li class="list-none">
                    <x-nav-link href="#" class="flex items-center gap-2 bg-[#F3F7FB] rounded-md px-2 py-1 border-solid border border-[#D1E0E]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                            <path d="M14.7782 15.167H1.44482C1.17149 15.167 0.944824 14.9403 0.944824 14.667C0.944824 14.3937 1.17149 14.167 1.44482 14.167H14.7782C15.0515 14.167 15.2782 14.3937 15.2782 14.667C15.2782 14.9403 15.0515 15.167 14.7782 15.167Z" fill="black"></path>
                            <path d="M14.1113 15.1663H2.11133C1.83799 15.1663 1.61133 14.9397 1.61133 14.6663V3.99967C1.61133 1.98634 2.76466 0.833008 4.77799 0.833008H11.4447C13.458 0.833008 14.6113 1.98634 14.6113 3.99967V14.6663C14.6113 14.9397 14.3847 15.1663 14.1113 15.1663ZM2.61133 14.1663H13.6113V3.99967C13.6113 2.51967 12.9247 1.83301 11.4447 1.83301H4.77799C3.29799 1.83301 2.61133 2.51967 2.61133 3.99967V14.1663Z" fill="black"></path>
                            <path d="M10.1113 15.1667H6.11133C5.83799 15.1667 5.61133 14.94 5.61133 14.6667V10.6267C5.61133 10.0067 6.118 9.5 6.738 9.5H9.49133C10.1113 9.5 10.618 10.0067 10.618 10.6267V14.6667C10.6113 14.94 10.3847 15.1667 10.1113 15.1667ZM6.61133 14.1667H9.61133V10.6267C9.61133 10.56 9.55799 10.5 9.48466 10.5H6.73132C6.66466 10.5 6.60467 10.5533 6.60467 10.6267V14.1667H6.61133Z" fill="black"></path>
                            <path d="M8.11133 7.83333C7.83799 7.83333 7.61133 7.60667 7.61133 7.33333V4C7.61133 3.72667 7.83799 3.5 8.11133 3.5C8.38466 3.5 8.61133 3.72667 8.61133 4V7.33333C8.61133 7.60667 8.38466 7.83333 8.11133 7.83333Z" fill="black"></path>
                            <path d="M9.77816 6.16699H6.44482C6.17149 6.16699 5.94482 5.94033 5.94482 5.66699C5.94482 5.39366 6.17149 5.16699 6.44482 5.16699H9.77816C10.0515 5.16699 10.2782 5.39366 10.2782 5.66699C10.2782 5.94033 10.0515 6.16699 9.77816 6.16699Z" fill="black"></path>
                        </svg>
                        Registrar mi negocio
                    </x-nav-link>
                </li>
                <li class="list-none">
                    <x-nav-link href="/login" wire:navigate aria-label="login">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path d="M12.5176 12C15.279 12 17.5176 9.76142 17.5176 7C17.5176 4.23858 15.279 2 12.5176 2C9.75615 2 7.51758 4.23858 7.51758 7C7.51758 9.76142 9.75615 12 12.5176 12Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M21.1077 22C21.1077 18.13 17.2577 15 12.5177 15C7.77773 15 3.92773 18.13 3.92773 22" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </x-nav-link>
                </li>

                @endforelse
            </div>
            
            <div class="flex lg:hidden items-center w-20 justify-end mr-2">
                <button class=" text-center" x-on:click="open=true">
                    <svg class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>