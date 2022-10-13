<div class="{{ request()->routeIs('/') ? 'absolute z-20' : ''}}  bg-white w-full overflow-hidden flex justify-between items-center py-4 px-8 md:justify-start">
            <div>
                <a href="{{ route('/') }}" class="flex md:hidden transition transform ease-in-out duration-200">
                    <span class="sr-only">Cargo App</span>
                    <img src="{{ asset('images/logo.png') }}" alt="" class="h-10 w-auto sm:h-10" style="width: 5em; height:5em">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden justify-self-end">
                <button type="button" class="bg-white rounded-md inline-flex items-center justify-center p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500">
                    <span class="sr-only">Open Menu</span>
                    <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex-1 md:flex md:items-center md:justify-end">
                <nav class="flex w-full justify-between items-center">
                    <a href="{{ route('/') }}" class="hidden sm:flex transition transform ease-in-out duration-200 -ml-2">
                        <span class="sr-only"></span>
                        <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="" style="width: 5em; height:5em">
                    </a>
                    <a href="{{ route('tarifas') }}" class=" {{ request()->routeIs('tarifas') ? 'text-yellow-600' : 'text-gray-600'}} text-base font-medium hover:text-yellow-600 text-center tracking-widest transition transform ease-out">
                        TARIFAS
                    </a>
                    <a href="{{ route('servicios') }}" class="{{ request()->routeIs('servicios') ? 'text-yellow-600' : 'text-gray-600'}} text-base font-medium hover:text-yellow-600 text-center tracking-widest transition transform ease-out">
                        SERVICIOS
                    </a>
                    <a href="#" class="text-base font-medium hover:text-yellow-600 text-center tracking-widest transition transform ease-out  text-gray-600 ">
                        CARGOID
                    </a>
                    <a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'text-yellow-600' : 'text-gray-600'}} text-base font-medium hover:text-yellow-600 text-center tracking-widest transition transform ease-out">
                        CONTACTO
                    </a>
                    <a href="#" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md text-base font-medium text-white bg-yellow-600 text-center tracking-widest transition transform ease-out shadow-md hover:bg-yellow-500">
                        Registrate
                    </a>
                </nav>
            </div>
        </div>
<div id="blackOverlayMobile" class="hidden sm:hidden fixed z-10 inset-0 transition-opacity" aria-hidden="true">
    <div class="absolute z-10 inset-0 bg-gray-500 opacity-75"></div>
</div>

<div class="fixed hidden z-30 top-0 inset-x-0 p-2 md:hidden" id="mobileMenu">
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-yellow-600">
        <div class="pt-5 pb-6 px-5">
            <div class="flex items-center justify-between">
                <div>
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Cargo APP" class="h-10 w-auto transition transform ease-in-out duration-200" style="width: 5em; height:5em">
                    </a>
                </div>
                <div class="-mr-2">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-6">
                <nav class="grid gap-6">
                    <a href="{{ route('tarifas') }}" class=" -m-3 p-2 flex items-center rounded-lg transition transform duration-200 hover:scale-105">
                        <div class="ml-5 text-base font-medium tracking-wider  {{ request()->routeIs('tarifas') ? 'text-yellow-600' : 'text-gray-600'}} ">
                            TARIFAS
                        </div>
                    </a>
                    <a href="{{ route('servicios') }}" class="-m-3 p-2 flex items-center rounded-lg transition transform duration-200 hover:scale-105">
                        <div class="ml-5 text-base font-medium tracking-wider  {{ request()->routeIs('servicios') ? 'text-yellow-600' : 'text-gray-600'}} ">
                            SERVICIOS
                        </div>
                    </a>
                    <a href="{{ route('contacto') }}" class="-m-3 p-2 flex items-center rounded-lg transition transform duration-200 hover:scale-105">
                        <div class="ml-5 text-base font-medium tracking-wider  {{ request()->routeIs('contacto') ? 'text-yellow-600' : 'text-gray-600'}} ">
                            CONTACTO
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <div class="flex items-center justify-between py-4 px-8 bg-gray-900 rounded-b-lg space-x-2">
            <a href="#" class="text-base font-medium text-gray-100 hover:text-yellow-500 tracking-wider transition transform duration-200">
                CARGOsID
            </a>
            <a href="#" class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-600 hover:bg-yellow-500 tracking-wider transition transform duration-200 hover:scale-105">
                REGISTRATE
            </a>
        </div>
    </div>
</div>
