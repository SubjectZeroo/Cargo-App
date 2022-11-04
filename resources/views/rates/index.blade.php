<x-guest-layout>
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
                                    <div id="regionCentralSelector"  class="regionCentral cursor-pointer text-gray-800 min-w-0 flex-1 rounded-l-xl overflow-hidden py-4 px-4 text-md font-medium text-center bg-white hover:bg-yellow-50 border-b-4 border-yellow-600">
                                        Región central
                                    </div>
                                    <div class="w-0.5 bg-gray-200 "></div>
                                    <div id="restoDelPaisSelector" class="restoDelPais cursor-pointer text-gray-800 min-w-0 flex-1 rounded-r-xl overflow-hidden py-4 px-4 text-md font-medium text-center bg-white border-b-4 hover:bg-yellow-50">
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
                                        /libra
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
                                        /libra
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
    <div class="mx-auto px-4 sm:px-6 lg:px-8 py-16 bg-gradient-to-b from-yellow-50 to-gray-100 w-full">
        <div class="max-w-md mx-auto lg:max-w-5xl">
            <div class="p-4 rounded-xl bg-gray-800 shadow-md lg:p-3">
                <div class="flex items-center justify-between flex-wrap flex-col lg:flex-row space-y-2 lg:space-y-0">
                    <div class="w-full lg:w-0 flex-1 flex items-center flex-col sm:flex-row space-y-2 space-x-0 sm:space-x-2 sm:space-y-0">
                        <span class="flex p-2 rounded-lg bg-white">
                            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </span>
                        <p class="lg:ml-3 font-medium text-white text-center">
                            En caso que lo necesites, enviamos tu carga con el servicio de encomienda nacional
                        </p>
                    </div>
                    <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto h-full">
                        <a href="" class="flex items-center justify-center px-2 py-2 border border-transparent rounded-md shadow text-sm font-medium text-gray-800 bg-white transition transform hover:bg-gray-100">

                            Enviar como encomienda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto px-4 sm:px-6 lg:px-8 bg-gray-100 py-10">
        <div class="max-w-md mx-auto lg:max-w-5xl flex flex-col space-y-8">
            <div class="mx-auto w-full flex flex-col items-center">
                <h2 class="mt-2 text-3xl font-extrabold text-yellow-600 tracking-tight">
                    Calculadora de envíos
                </h2>
                <p class="mt-4 max-w-prose mx-auto text-xl text-gray-500">
                    Estima tú mismo el valor de tu carga
                </p>
            </div>
            <div class="mx-auto w-full lg:space-y-0 flex flex-col justify-evenly space-y-10 lg:space-y-0  space-x-0 lg:space-x-8 lg:inline-flex lg:flex-row pt-12">
                <div class="pt-6 w-full">
                    <div class="flow-root bg-white rounded-xl pb-8 shadow-none sm:shadow-lg h-full w-full mx-auto">
                        <div class="-mt-6 space-y-6 px-6 h-full">
                            <div class="w-full inline-flex items-center justify-center">
                                <span class="inline-flex items-center justify-center p-3 bg-yellow-600 rounded-md shadow-lg">
                                    <svg class="w-7 h-7" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                                </span>
                            </div>
                            <div class="w-full">
                                <p class="text-lg text-gray-700 font-medium text-center">
                                    Ingresa los datos de tu paquete
                                </p>
                            </div>
                            <div class="grid grid-cols-1 xl:grid-cols-2 grid-rows-2 gap-0 xl:gap-6 xl:py-10 w-full ">
                                <div class="w-full col-span-1 px-0 xl:px-4">
                                    <p class="block text-base font-light text-gray-700">
                                        Peso (libras)
                                    </p>
                                    <input type="number" name="peso" id="peso" value="1" class="focus:ring-yellow-500 focus:border-yellow-500 sm:text-base my-2 shadow-md rounded-md bg-gray-100 p-2 w-full calcinput">
                                </div>
                                <div class="w-full col-span-1 px-0 xl:px-4">
                                    <p class="block text-base font-light text-gray-700">
                                        Largo (pulgadas)
                                    </p>
                                    <input type="number" name="largo" id="largo" value="1" class="focus:ring-yellow-500 focus:border-yellow-500 sm:text-base my-2 shadow-md rounded-md bg-gray-100 p-2 w-full calcinput">
                                </div>
                                <div class="w-full col-span-1 px-0 xl:px-4">
                                    <p class="block text-base font-light text-gray-700">
                                        Ancho (pulgadas)
                                    </p>
                                    <input type="number" name="ancho" id="ancho" value="1" class="focus:ring-yellow-500 focus:border-yellow-500 sm:text-base my-2 shadow-md rounded-md bg-gray-100 p-2 w-full calcinput">
                                </div>
                                <div class="w-full col-span-1 px-0 xl:px-4">
                                    <p class="block text-base font-light text-gray-700">
                                        Alto (pulgadas)
                                    </p>
                                    <input type="number" name="alto" id="alto" value="1" class="focus:ring-yellow-500 focus:border-yellow-500 sm:text-base my-2 shadow-md rounded-md bg-gray-100 p-2 w-full calcinput">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full">
                    <div class="flow-root bg-white rounded-xl pb-8 shadow-none sm:shadow-lg h-full w-full mx-auto">
                        <div class="-mt-6 space-y-6 px-6">
                            <div class="w-full inline-flex items-center justify-center">
                                <span class="inline-flex items-center justify-center p-3 bg-yellow-600 rounded-md shadow-lg">
                                    <svg class="w-8 h-8" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </span>
                            </div>
                            <div class="w-full col-span-2">
                                <p class="text-lg text-gray-700 font-medium text-center">
                                    Costos estimados
                                </p>
                            </div>
                            <div class="grid grid-rows-2 grid-cols-2 gap-5 lg:gap-8 w-full h-full">
                                <div class="p-6 space-y-4 flex flex-col items-center justify-center w-full bg-gray-100 border-gray-300 rounded-md shadow-md">
                                    <p class="text-base font-light text-gray-700 text-center">
                                        Peso Final
                                    </p>
                                    <div class="flex items-baseline">
                                        <div id="librascalculadas" class="text-4xl lg:text-5xl text-gray-700 font-extrabold">
                                            1.00
                                        </div>
                                        <span class="ml-1 text-xl lg:text-2xl font-medium text-yellow-600">
                                            /lb
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6 space-y-4 flex flex-col items-center justify-center w-full bg-gray-100 border-gray-300 rounded-md shadow-md">
                                    <p class="text-base font-light text-gray-700 text-center">
                                        Pie cúbico
                                    </p>
                                    <div class="flex items-baseline">
                                        <div id="piescalculados" class="text-4xl lg:text-5xl text-gray-700 font-extrabold">
                                            0.00
                                        </div>
                                        <span class="ml-1 text-xl lg:text-2xl font-medium text-yellow-600">
                                            /ft
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6 space-y-4 flex flex-col items-center justify-center w-full bg-gray-100 border-gray-300 rounded-md shadow-md">
                                    <p class="text-base font-light text-gray-700 text-center">
                                        Envío aéreo
                                    </p>
                                    <div class="flex items-baseline">
                                        <div id="aereocalculado" class="text-4xl lg:text-5xl text-gray-700 font-extrabold">
                                            4.10
                                        </div>
                                        <span class="ml-1 text-xl lg:text-2xl font-medium text-yellow-600">
                                            /$
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6 space-y-4 flex flex-col items-center justify-center w-full bg-gray-100 border-gray-300 rounded-md shadow-md">
                                    <p class="text-base font-light text-gray-700 text-center">
                                        Envío maritimo
                                    </p>
                                    <div class="flex items-baseline">
                                        <div id="maritimocalculado" class="text-4xl lg:text-5xl text-gray-700 font-extrabold">
                                            30.00
                                        </div>
                                        <span class="ml-1 text-xl lg:text-2xl font-medium text-yellow-600">
                                            /$
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto w-full h-auto pb-6">
                <p class="text-sm text-gray-500 font-light text-justify">
                    <span class="font-medium">
                        IMPORTANTE:
                    </span>
                    Muchas veces el proveedor proporciona las dimensiones del producto y no las dimensiones de la caja en la que embalan el producto, en este sentido, las dimensiones serán tomadas de la caja en la que se encuentran embalados sus productos. No obstante, ponemos a tu disposición un listado de productos frecuentes que nuestra distinguida clientela trae usualmente a través de nuestro servicio aéreo junto con un estimado de su equivalente en libras.
                </p>
            </div>
        </div>
    </div>
</main>
<x-footer></x-footer>
</x-guest-layout>
