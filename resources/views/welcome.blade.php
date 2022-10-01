@extends('layouts.app')

@section('content')
<div class="h-screen w-full flex flex-shrink-0 justify-center md:items-end overflow-hidden">
    <div class="h-screen absolute z-10 inset-0 bg-gradient-to-b from-gray-700 via-blue-900 to-gray-700" style="mix-blend-mode: multiply">
    </div>

    <div class="absolute z-10 self-center flex flex-col items-center">
        <p class="text-gray-300 text-3xl md:text-4xl text-center mx-6 font-bold">Mientras navegas nuestro sitio</p>
        <p class="text-gray-300 text-3xl md:text-4xl text-center mx-6 font-bold">
            hay
            <strong class="text-yellow-500">
                <span id="hero_counter">
                    100
                </span>
                pedidos en movimiento
            </strong>
        </p>
        <p class="text-gray-300 text-3xl md:text-4xl text-center mx-6 font-bold">en nuestro almacén</p>
        <p class="text-gray-300 text-xl md:text-2xl text-center mx-6 font-thin">Uno de ellos puede ser tuyo en un click.</p>
        <p class="pt-12">
            <a href="#" class="py-4 px-8 rounded-md shadow-xl text-center text-lg font-medium text-white bg-yellow-600 transition transform ease-out duration-500 hover:scale-110 hover:bg-yellow-500 hover:text-gray-100">Registrate</a>
        </p>
    </div>
    <div class="absolute z-20 bg-white w-full overflow-hidden flex justify-between items-center py-4 px-8 md:justify-start">
        <div>
            <a href="#" class="flex md:hidden transition transform ease-in-out duration-200">
                <span class="sr-only">Cargo App</span>
                <img src="https://onewaycargo.net/img/logo-owc.png" alt="" class="h-10 w-auto sm:h-10">
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
                <a href="#" class="hidden sm:flex transition transform ease-in-out duration-200 -ml-2">
                    <span class="sr-only"></span>
                    <img class="h-10 w-auto" src="https://onewaycargo.net/img/logo-owc.png" alt="">
                </a>
                <a href="#" class="text-base font-medium hover:text-yellow-600 text-center tracking-widest transition transform ease-out  text-gray-600 ">
                    TARIFAS
                </a>
                <a href="#" class="text-base font-medium hover:text-yellow-600 text-center tracking-widest transition transform ease-out  text-gray-600 ">
                    SERVICIOS
                </a>
                <a href="#" class="text-base font-medium hover:text-yellow-600 text-center tracking-widest transition transform ease-out  text-gray-600 ">
                    CARGOID
                </a>
                <a href="#" class="text-base font-medium hover:text-yellow-600 text-center tracking-widest transition transform ease-out  text-gray-600 ">
                    CONTACTO
                </a>
                <a href="#" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md text-base font-medium text-white bg-yellow-600 text-center tracking-widest transition transform ease-out shadow-md hover:bg-yellow-500">
                    Registrate
                </a>
            </nav>
        </div>
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
                    <a href="#">
                        <img src="https://onewaycargo.net/img/logo-owc.png" alt="Cargo APP" class="h-10 w-auto transition transform ease-in-out duration-200">
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
                    <a href="" class="-m-3 p-2 flex items-center rounded-lg transition transform duration-200 hover:scale-105">
                        <div class="ml-5 text-base font-medium tracking-wider  text-gray-700 ">
                            TARIFAS
                        </div>
                    </a>
                    <a href="" class="-m-3 p-2 flex items-center rounded-lg transition transform duration-200 hover:scale-105">
                        <div class="ml-5 text-base font-medium tracking-wider  text-gray-700 ">
                            SERVICIOS
                        </div>
                    </a>
                    <a href="" class="-m-3 p-2 flex items-center rounded-lg transition transform duration-200 hover:scale-105">
                        <div class="ml-5 text-base font-medium tracking-wider  text-gray-700 ">
                            SERVICIOS
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <div class="flex items-center justify-between py-4 px-8 bg-gray-900 rounded-b-lg space-x-2">
            <a href="#" class="text-base font-medium text-gray-100 hover:text-yellow-500 tracking-wider transition transform duration-200">
                CARGO ID
            </a>
            <a href="#" class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-600 hover:bg-yellow-500 tracking-wider transition transform duration-200 hover:scale-105">
                REGISTRATE
            </a>
        </div>
    </div>
</div>

@endsection
