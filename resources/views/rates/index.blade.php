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
    <div class="bg-yellow-50">
        <div class="max-w-7xl mx-auto py-12 px-4 space-y-6 sm:px-6 lg:px-8 flex flex-col items-center">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-800 text-center">
                ¿Deseas recibir un presupuesto personalizado para tus envíos?
            </h2>
            <p class="text-gray-700 text-xl text-center">
                Podemos ayudarte
            </p>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-500 transition transform">
                        Solicitar presupuesto
                        <svg height="682pt" class="h-6 w-6 fill-current text-white ml-2" viewBox="-23 -21 682 682.66669" width="682pt" xmlns="http://www.w3.org/2000/svg"><path d="m544.386719 93.007812c-59.875-59.945312-139.503907-92.9726558-224.335938-93.007812-174.804687 0-317.070312 142.261719-317.140625 317.113281-.023437 55.894531 14.578125 110.457031 42.332032 158.550781l-44.992188 164.335938 168.121094-44.101562c46.324218 25.269531 98.476562 38.585937 151.550781 38.601562h.132813c174.785156 0 317.066406-142.273438 317.132812-317.132812.035156-84.742188-32.921875-164.417969-92.800781-224.359376zm-224.335938 487.933594h-.109375c-47.296875-.019531-93.683594-12.730468-134.160156-36.742187l-9.621094-5.714844-99.765625 26.171875 26.628907-97.269531-6.269532-9.972657c-26.386718-41.96875-40.320312-90.476562-40.296875-140.28125.054688-145.332031 118.304688-263.570312 263.699219-263.570312 70.40625.023438 136.589844 27.476562 186.355469 77.300781s77.15625 116.050781 77.132812 186.484375c-.0625 145.34375-118.304687 263.59375-263.59375 263.59375zm144.585938-197.417968c-7.921875-3.96875-46.882813-23.132813-54.148438-25.78125-7.257812-2.644532-12.546875-3.960938-17.824219 3.96875-5.285156 7.929687-20.46875 25.78125-25.09375 31.066406-4.625 5.289062-9.242187 5.953125-17.167968 1.984375-7.925782-3.964844-33.457032-12.335938-63.726563-39.332031-23.554687-21.011719-39.457031-46.960938-44.082031-54.890626-4.617188-7.9375-.039062-11.8125 3.476562-16.171874 8.578126-10.652344 17.167969-21.820313 19.808594-27.105469 2.644532-5.289063 1.320313-9.917969-.664062-13.882813-1.976563-3.964844-17.824219-42.96875-24.425782-58.839844-6.4375-15.445312-12.964843-13.359374-17.832031-13.601562-4.617187-.230469-9.902343-.277344-15.1875-.277344-5.28125 0-13.867187 1.980469-21.132812 9.917969-7.261719 7.933594-27.730469 27.101563-27.730469 66.105469s28.394531 76.683594 32.355469 81.972656c3.960937 5.289062 55.878906 85.328125 135.367187 119.648438 18.90625 8.171874 33.664063 13.042968 45.175782 16.695312 18.984374 6.03125 36.253906 5.179688 49.910156 3.140625 15.226562-2.277344 46.878906-19.171875 53.488281-37.679687 6.601563-18.511719 6.601563-34.375 4.617187-37.683594-1.976562-3.304688-7.261718-5.285156-15.183593-9.253906zm0 0" fill-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<x-footer></x-footer>
@endsection
