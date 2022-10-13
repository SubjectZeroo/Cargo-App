@extends('layouts.app')

@section('content')
<x-navbar></x-navbar>
<main class="z-40">
    <div class="mx-auto py-8 space-y-4 bg-gray-800 pt-20">
        <p class="mt-2 text-3xl font-extrabold text-yellow-600 tracking-tight text-center">
            Recibe tu carga en cualquier ciudad de Venezuela
        </p>
        <p class="mt-4 max-w-prose mx-auto text-xl text-gray-100 text-center">
            con tarifas adaptadas a tus necesidades
        </p>
    </div>
    <div class="bg-gradient-to-b from-gray-800 to-yellow-50 py-6">
        <div class="relative">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-md mx-auto lg:max-w-5xl space-y-4 lg:space-y-0">
                    <div>
                        <div class="w-full mx-auto py-2">
                            <div class="sm:hidden">
                                <label for="tabs" class="sr-only">Select a tab</label>
                                <select name="regionPicker" id="mobileRegionSelector" class="block w-full focus:ring-yellow-500 focus:border-yellow-500 border-gray-300 rounded-xl bg-yellow-100 p-2 border border-yellow-600">
                                    <option value="regionCentral">Región central</option>
                                    <option value="regionRestoDelPais">Resto del país</option>
                                </select>
                            </div>
                            <div class="hidden sm:block">
                                <div class="rounded-xl shadow-md flex">
                                    <div class="cursor-pointer text-gray-800 min-w-0 flex-1 rounded-l-xl overflow-hidden py-4 px-4 text-md font-medium text-center bg-white bg-yellow-100 hover:bg-yellow-50 border-b-4 border-yellow-600">
                                        Región central
                                    </div>
                                    <div class="w-0.5 bg-gray-200 "></div>
                                    <div class="cursor-pointer text-gray-800 min-w-0 flex-1 rounded-r-xl overflow-hidden py-4 px-4 text-md font-medium text-center bg-white border-b-4 hover:bg-yellow-50">
                                        Resto del país
                                    </div>
                                </div>
                                <div class="w-full py-10">
                                    <p id="centralCities" class="text-lg font-normal text-white text-center">
                                        Valencia, Caracas, Barquisimeto, Maracay
                                    </p>
                                    <p id="restoDelPaisCities" class="hidden text-lg font-normal text-white text-center">
                                        Mérida, San Cristobal, Anaco, Barcelona, Maracaibo, Maturín, Puerto Ordaz, Puerto La Cruz, Punto Fijo, San Juan de los Morros, El Tigre, Ciudad Bolívar, Acarigua, Guanare, Barinas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="regionCentralPanel" class="mx-auto space-y-4 max-w-5xl grid gap-5 lg:grid-cols-3 lg:space-y-0">
                        <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                            <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                <div class="pb-2">
                                    <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-yellow-100 text-yellow-600">
                                        Marítimo
                                    </h3>
                                </div>
                                <p class="text-md text-gray-500 pt-4 pb-2">Desde</p>
                                <div class="flex items-baseline text-6xl font-extrabold text-gray-800">
                                    $
                                    <span id="maritimoCentral">18</span>
                                    <span class="ml-1 text-2xl font-medium text-gray-500 min-w-max">
                                        /pie cúbico
                                    </span>
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                                <ul class="space-y-4">
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Ideal para envíos de gran peso volumétrico
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Mínimo requerido por envío de $30
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Entrega disponible de 15 a 21 días hábiles
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Cobro en función de volumen
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                            <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                <div class="pb-2">
                                    <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-yellow-100 text-yellow-600">
                                        Aero
                                    </h3>
                                </div>
                                <p class="text-md text-gray-500 pt-4 pb-2">Desde</p>
                                <div class="flex items-baseline text-6xl font-extrabold text-gray-800">
                                    $
                                    <span id="maritimoCentral">4.1</span>
                                    <span class="ml-1 text-2xl font-medium text-gray-500 min-w-max">
                                        /pie cúbico
                                    </span>
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                                <ul class="space-y-4">
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Recomendado para envíos rápidos
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Sin mínimo de envío requerido
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                           Entrega disponible de 3 a 5 días hábiles
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Cobro en función del valor más alto entre peso y volumen
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                            <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                <div class="pb-2">
                                    <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-yellow-100 text-yellow-600">
                                        CORRESPONDENCIA
                                    </h3>
                                </div>
                                <p class="text-md text-gray-500 pt-4 pb-2">Tarifa única</p>
                                <div class="flex items-baseline text-6xl font-extrabold text-gray-800">
                                    $
                                    <span id="maritimoCentral">2</span>
                                    <span class="ml-1 text-2xl font-medium text-gray-500 min-w-max">
                                        envio
                                    </span>
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                                <ul class="space-y-4">
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Aplica para carga cuyo peso es menor a 0,2 libras (3oz)
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                           Válido para cartas, correspondencia bancaria, tarjetas, documentos, protectores de pantallas, tarjetas micro SD, etc
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="regionRestoDelPaisPanel" class="hidden mx-auto space-y-4 max-w-5xl grid gap-5 lg:grid-cols-3 lg:space-y-0">
                        <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                            <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                <div class="pb-2">
                                    <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-yellow-100 text-yellow-600">
                                        Marítimo
                                    </h3>
                                </div>
                                <p class="text-md text-gray-500 pt-4 pb-2">Desde</p>
                                <div class="flex items-baseline text-6xl font-extrabold text-gray-800">
                                    $
                                    <span id="maritimoCentral">21</span>
                                    <span class="ml-1 text-2xl font-medium text-gray-500 min-w-max">
                                        /pie cúbico
                                    </span>
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                                <ul class="space-y-4">
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Ideal para envíos de gran peso volumétrico
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Mínimo requerido por envío de $30
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Entrega disponible de 15 a 21 días hábiles
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Cobro en función de volumen
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                            <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                <div class="pb-2">
                                    <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-yellow-100 text-yellow-600">
                                        Aero
                                    </h3>
                                </div>
                                <p class="text-md text-gray-500 pt-4 pb-2">Desde</p>
                                <div class="flex items-baseline text-6xl font-extrabold text-gray-800">
                                    $
                                    <span id="maritimoCentral">4.9</span>
                                    <span class="ml-1 text-2xl font-medium text-gray-500 min-w-max">
                                        /pie cúbico
                                    </span>
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                                <ul class="space-y-4">
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Recomendado para envíos rápidos
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Sin mínimo de envío requerido
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                           Entrega disponible de 3 a 5 días hábiles
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Cobro en función del valor más alto entre peso y volumen
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                            <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                <div class="pb-2">
                                    <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-yellow-100 text-yellow-600">
                                        CORRESPONDENCIA
                                    </h3>
                                </div>
                                <p class="text-md text-gray-500 pt-4 pb-2">Tarifa única</p>
                                <div class="flex items-baseline text-6xl font-extrabold text-gray-800">
                                    $
                                    <span id="maritimoCentral">2.5</span>
                                    <span class="ml-1 text-2xl font-medium text-gray-500 min-w-max">
                                        envio
                                    </span>
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                                <ul class="space-y-4">
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                            Aplica para carga cuyo peso es menor a 0,2 libras (3oz)
                                        </p>
                                    </li>
                                    <li class="flex flex-items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">
                                           Válido para cartas, correspondencia bancaria, tarjetas, documentos, protectores de pantallas, tarjetas micro SD, etc
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<x-footer></x-footer>
@endsection
