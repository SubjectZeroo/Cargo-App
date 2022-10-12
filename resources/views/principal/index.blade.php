@extends('layouts.app')

@section('content')
<div class="h-screen w-full flex flex-shrink-0 justify-center md:items-end overflow-hidden">
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

    </div>

    <x-navbar></x-navbar>
</div>
<main class="z-40">
    <div class="pt-16 sm:pt-24 pb-12 sm:pb-20 bg-gray-100">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <p class="mt-2 text-3xl font-extrabold text-yellow-600 tracking-tight">
                Comprar online nunca te habia brinado tantos beneficios
            </p>
            <p class="mt-4 max-w-prose mx-auto text-xl text-gray-500">
                Conoce todos nuestros servicios
            </p>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 justify-items-stretch">
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-2xl px-6 pb-8 shadow-xl h-full">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-2 bg-yellow-600 rounded-md shadow-xl w-16 h-16">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-9 h-9 text-white" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M76.772,81.128a7.28507,7.28507,0,1,1,7.28516-7.28509A7.28506,7.28506,0,0,1,76.772,81.128ZM95,53.99274V69.92792a2.98338,2.98338,0,0,1-2.9834,2.9834H88.00952a11.27531,11.27531,0,0,0-22.4751,0h-27.48a11.27584,11.27584,0,0,0-22.47607,0h-1.449A2.98348,2.98348,0,0,1,11.146,69.9278V54.26752H22.54883A4.26834,4.26834,0,0,0,26.79639,49.581a4.39134,4.39134,0,0,0-4.43091-3.84863H8.34827a3.34827,3.34827,0,1,1,0-6.69653H34.77673a4.26843,4.26843,0,0,0,4.24756-4.68665,4.39151,4.39151,0,0,0-4.43091-3.84863H11.146V23.01532A4.14325,4.14325,0,0,1,15.28931,18.872H65.70044a4.14325,4.14325,0,0,1,4.14331,4.14331V35.64276H85.68469a1.86206,1.86206,0,0,1,1.66529,1.029l6.74621,13.49244A8.56086,8.56086,0,0,1,95,53.99274Zm-3.72681-1.13941L84.53125,39.36957H69.84375V53.93964H91.27319ZM34.10144,73.8429a7.285,7.285,0,1,0-7.285,7.28509A7.285,7.285,0,0,0,34.10144,73.8429Z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-bold text-gray-700 tracking-tight">
                                    Envios puerta a puerta
                                </h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Con alcance en todo el territorio venezolano
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-2xl px-6 pb-8 shadow-xl h-full">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-2 bg-yellow-600 rounded-md shadow-xl w-16 h-16">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 95 95" class="w-9 h-9 text-white" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M92.067,57.525l-0.487-1.504c-0.66-2.059-2.883-3.192-4.935-2.528L47.026,66.335c-0.328,0.105-0.612,0.247-0.876,0.404  c-1.742-2.16-4.19-3.731-7.027-4.349c-0.08-0.425-0.198-0.894-0.36-1.391L24.631,17.484c-0.667-2.052-2.907-4.229-4.978-4.841  L8.625,9.405c-2.07-0.609-4.262,0.589-4.872,2.662l-0.445,1.514c-0.61,2.071,0.586,4.264,2.658,4.872l6.241,1.838  c2.071,0.606,4.31,2.784,4.979,4.836l12.188,37.493c0.162,0.495,0.362,0.941,0.585,1.333c-3.303,2.037-5.619,5.575-5.908,9.735  c-0.475,6.848,4.709,12.808,11.56,13.282c6.826,0.476,12.761-4.675,13.275-11.486c0.36-0.021,0.733-0.077,1.124-0.204l39.526-12.809  C91.591,61.803,92.729,59.582,92.067,57.525z M36.102,79.915c-2.961-0.205-5.199-2.779-4.994-5.739  c0.206-2.961,2.779-5.199,5.738-4.994c2.958,0.205,5.198,2.778,4.992,5.739C41.634,77.879,39.06,80.119,36.102,79.915z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M43.312,57.67c0.663,2.052,2.884,3.192,4.938,2.527l31.949-10.299c2.054-0.662,3.193-2.884,2.53-4.939l-8.387-26.055  c-0.664-2.057-2.883-3.188-4.937-2.517l-6.71,2.194c-2.051,0.673-3.184,2.902-2.521,4.954l0.893,2.756  c0.666,2.051-0.47,4.274-2.525,4.936l-4.064,1.307c-2.054,0.66-4.28-0.482-4.944-2.533l-0.893-2.758  c-0.664-2.052-2.891-3.198-4.947-2.542l-6.237,1.986c-2.058,0.654-3.199,2.871-2.537,4.926L43.312,57.67z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M51.932,27.086c0.443,1.371,1.918,2.12,3.284,1.664l0.328-0.107c1.364-0.452,2.121-1.948,1.68-3.317l-0.674-2.099  c-0.441-1.372-1.918-2.123-3.284-1.666l-0.327,0.109c-1.366,0.455-2.122,1.949-1.683,3.316L51.932,27.086z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-bold text-gray-700 tracking-tight">
                                    Envios puerta a puerta
                                </h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Con alcance en todo el territorio venezolano
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-2xl px-6 pb-8 shadow-xl h-full">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-2 bg-yellow-600 rounded-md shadow-xl w-16 h-16">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="15 15 70 70" class="w-8 h-8 text-white" fill="currentColor" stroke="currentColor"><g>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M83,37c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0-0.2c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0,0-0.1-0.1-0.1   l-8.8-14.1c-1.1-1.8-3-2.8-5.1-2.8H31.2c-2.1,0-4,1.1-5.1,2.8l-8.8,14.1c0,0,0,0.1-0.1,0.1c0,0.1-0.1,0.1-0.1,0.2   c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2,0,0.2c0,0,0,0.1,0,0.1v37c0,3.9,3.1,7,7,7h52c3.9,0,7-3.1,7-7V37z M70.5,23.9   L77.4,35H52V23h16.8C69.5,23,70.1,23.4,70.5,23.9z M29.5,23.9c0.4-0.6,1-0.9,1.7-0.9H48v12H22.6L29.5,23.9z M42,77v-7h16v7H42z    M79,74c0,1.7-1.3,3-3,3H62v-9c0-1.1-0.9-2-2-2H40c-1.1,0-2,0.9-2,2v9H24c-1.7,0-3-1.3-3-3V39h58V74z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M38.5,55.3c0,1.1,0.9,2,2,2h19c1.1,0,2-0.9,2-2s-0.9-2-2-2h-19C39.4,53.3,38.5,54.2,38.5,55.3z"></path></g>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-bold text-gray-700 tracking-tight">
                                    Envios puerta a puerta
                                </h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Con alcance en todo el territorio venezolano
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-2xl px-6 pb-8 shadow-xl h-full">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-2 bg-yellow-600 rounded-md shadow-xl w-16 h-16">
                                        <svg viewBox="0 0 65 65" class="w-8 h-8 text-white" fill="currentColor" stroke="currentColor">
                                            <style type="text/css">
                                                                .st0{display:none;}
                                                                .st1{display:inline;}
                                                                .st2{fill:none;stroke:#B3B3B3;stroke-width:0.1;stroke-miterlimit:10;}
                                                              </style><g class="st0"><g class="st1"><rect x="2" y="2" class="st2" width="60" height="60"></rect><line class="st2" x1="32" y1="2" x2="32" y2="62"></line><line class="st2" x1="62" y1="32" x2="2" y2="32"></line><line class="st2" x1="2" y1="2" x2="62" y2="62"></line><rect x="10" y="10" class="st2" width="44" height="44"></rect><line class="st2" x1="62" y1="2" x2="2" y2="62"></line><line class="st2" x1="2" y1="32" x2="32" y2="2"></line><line class="st2" x1="32" y1="2" x2="62" y2="32"></line><line class="st2" x1="62" y1="32" x2="32" y2="62"></line><line class="st2" x1="32" y1="62" x2="2" y2="32"></line><circle class="st2" cx="32" cy="32" r="21"></circle></g></g>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M55.6,42.6L51.8,17H49V7c0-2.8-2.2-5-5-5H14c-2.8,0-5,2.2-5,5v50c0,2.8,2.2,5,5,5h30c2.8,0,5-2.2,5-5V46h3.7  c0.9,0,1.6-0.3,2.2-1C55.5,44.3,55.7,43.5,55.6,42.6z M44,60H14c-1.7,0-3-1.3-3-3v-5h36v5C47,58.7,45.7,60,44,60z M47,50H11V7  c0-1.7,1.3-3,3-3h30c1.7,0,3,1.3,3,3v10h-2c0-3.9-3.1-7-7-7s-7,3.1-7,7h-6.9l-3.8,25.6c-0.1,0.9,0.1,1.8,0.7,2.4s1.4,1,2.3,1H47V50z   M43,17H33c0-2.8,2.2-5,5-5S43,14.2,43,17z M53.6,43.7c-0.2,0.2-0.5,0.3-0.8,0.3H23.4c-0.3,0-0.6-0.1-0.8-0.3  c-0.2-0.2-0.2-0.5-0.2-0.8L25.9,19H31v3h2v-3h10v3h2v-3h5.1l3.7,23.9C53.9,43.2,53.8,43.5,53.6,43.7z"></path>
                                            <circle stroke-width="4" cx="29" cy="56" r="2"></circle>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-bold text-gray-700 tracking-tight">
                                    Envios puerta a puerta
                                </h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Con alcance en todo el territorio venezolano
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-2xl px-6 pb-8 shadow-xl h-full">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-2 bg-yellow-600 rounded-md shadow-xl w-16 h-16">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-9 h-9 text-white" fill="none" stroke="currentColor">
                                            <switch><g i:extraneous="self"><g>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M96.9,51.8c-0.6-0.7-1.4-1.1-2.3-1.1H57.7l-1.4-5.6c-0.3-1.3-1.5-2.2-2.8-2.2h-7.4c0.5,1.2,0.6,2.6,0.3,3.9     c-0.2,0.7-0.5,1.3-0.9,1.9h5.8l7.2,28.7c0.3,1.3,1.5,2.2,2.8,2.2H89c1.3,0,2.5-0.9,2.8-2.2l5.6-23.1     C97.6,53.4,97.4,52.5,96.9,51.8z"></path><circle stroke-width="4" cx="65.2" cy="87.4" r="5.1"></circle><circle stroke-width="4" cx="83.6" cy="87.4" r="5.1"></circle>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M41.5,41.4l-6.8-1.8c0,0-6.1-9.3-6.8-10.4c-0.7-1.1-2.5-3.4-6.2-3.6c-3.7-0.2-7.1,2-8,5.4c-0.4,1.5-4.1,19.7-4.4,21     c-0.2,1.3-0.3,3-0.3,4.6s0.4,10.9,0.4,10.9L2.8,86.6c-0.8,2.3,0.4,4.8,2.7,5.7c0.5,0.2,1,0.3,1.6,0.3c1.8,0,3.5-1.1,4.2-2.9     l7.8-20c0.2-0.6,0.3-1.1,0.3-1.7l-0.1-4.5l4.3,6.3l2.5,18.9c0.3,2.2,2.2,3.9,4.4,3.9c0.2,0,0.3,0,0.5,0c2.4-0.3,4.2-2.5,3.9-4.9     l-2-20c-0.1-0.8-0.3-1.5-0.8-2.1L24,54c0.6-2.7,1.8-7.7,2.7-11.7l2,3.1c0.6,0.8,1.4,1.5,2.4,1.7l8.3,2.2c0.4,0.1,0.7,0.1,1.1,0.1     c1.8,0,3.5-1.2,3.9-3C45,44.2,43.7,41.9,41.5,41.4z"></path><circle stroke-width="4" cx="23.6" cy="15.7" r="8.2"></circle></g></g></switch>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-bold text-gray-700 tracking-tight">
                                    Envios puerta a puerta
                                </h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Con alcance en todo el territorio venezolano
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-2xl px-6 pb-8 shadow-xl h-full">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-2 bg-yellow-600 rounded-md shadow-xl w-16 h-16">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="10 10 70 70" class="w-9 h-9 text-white" fill="currentColor" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M23.942383,33.972778V71c0,4.451172,10.593262,6.780273,21.057617,6.780273S66.057617,75.451172,66.057617,71V33.972778  C68.69397,32.967529,70.393066,31.661316,70.393066,30V19c0-4.974609-15.186035-6.780273-25.393066-6.780273  S19.606934,14.025391,19.606934,19v11C19.606934,31.661316,21.30603,32.967529,23.942383,33.972778z M64.057617,71  c0,1.949219-7.423828,4.780273-19.057617,4.780273S25.942383,72.949219,25.942383,71V34.631714  C31.28717,36.155518,39.00177,36.780273,45,36.780273s13.71283-0.624756,19.057617-2.14856V71z M45,14.219727  c15.358887,0,23.393066,3.111816,23.393066,4.780273S60.358887,23.780273,45,23.780273S21.606934,20.668457,21.606934,19  S29.641113,14.219727,45,14.219727z M21.606934,21.842346C26.062744,24.682617,37.043335,25.780273,45,25.780273  s18.937256-1.097656,23.393066-3.937927V30c0,1.668457-8.03418,4.780273-23.393066,4.780273S21.606934,31.668457,21.606934,30  V21.842346z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M40.411133,44.266113v5.341309h-5.341797v9.178223h5.341797v5.341309h9.177734v-5.341309h5.341797v-9.178223h-5.341797  v-5.341309H40.411133z M52.930664,51.607422v5.178223h-5.341797v5.341309h-5.177734v-5.341309h-5.341797v-5.178223h5.341797  v-5.341309h5.177734v5.341309H52.930664z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-bold text-gray-700 tracking-tight">
                                    Envios puerta a puerta
                                </h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Con alcance en todo el territorio venezolano
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-800 py-4">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-18 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-100 md:text-4xl">
                <span class="block text-center lg:text-left">Calcula tú mismo</span>
                <span class="block text-yellow-600 text-center lg:text-left">el valor de envío de tus compras online</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0 justify-center lg:justify-start">
                <div class="inline-flex rounded-md shadow-xl">
                    <a href="" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-500 transition transform ease-out focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2">

                        Calculadora de envíos
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-20 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-800">
                    ¿Por qué es tan confiable enviar tu carga con nosotros?
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">
                    Recibe asesoría, atención y gestión logística en todo momento
                </p>
            </div>
            <div class="mt-20">
                <div class="max-w-xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8">
                        <div>
                            <div class="flex items-center justify-center h-16 w-16 rounded-md bg-gray-800 text-white mx-auto">
                                <svg class="w-9 h-9 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
                            </div>
                            <div class="mt-5">
                                <dt class="text-lg leading-6  text-center text-gray-800 font-bold">
                                    Rápido proceso de compra
                                </dt>
                                <dd class="mt-2 text-base text-center text-gray-600">
                                    Ingresa en tu tienda favorita, selecciona tus productos al carrito y paga tu compra
                                </dd>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-center h-16 w-16 rounded-md bg-gray-800 text-white mx-auto">
                                <svg class="w-9 h-9 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <div class="mt-5">
                                <dt class="text-lg leading-6  text-center text-gray-800 font-bold">
                                    Asesoría y gestión dedicada
                                </dt>
                                <dd class="mt-2 text-base text-center text-gray-600">
                                    Nuestro equipo online te acompañará desde antes de efectuar tu compra hasta el momento en que llegue a tus manos
                                </dd>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-center h-16 w-16 rounded-md bg-gray-800 text-white mx-auto">
                                <svg class="w-9 h-9 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div class="mt-5">
                                <dt class="text-lg leading-6  text-center text-gray-800 font-bold">
                                    En tus manos, seguro y confiable
                                </dt>
                                <dd class="mt-2 text-base text-center text-gray-600">
                                    Llevamos tu carga a tu destino en modalidad de retiro, delivery y encomienda nacional de manera rápida y segura
                                </dd>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="mx-auto mt-6 p-4 flex flex-col justify-center items-center space-y-4">
                <p class="mt-4 max-w-2xl text-xl text-gray-800 mx-auto font-medium text-center">
                    Conoce nuestras tarifas para toda Venezuela
                </p>
                <div class="shadow-xl transition transform ease-out h-auto mt-4">
                    <a href="" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-500 transition transform ease-out focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-offset-2">
                        Ver tarifas
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div target="_blank" class="pt-20 pb-12 bg-fixed bg-contain bg-no-repeat bg-center bg-gray-300" style="background-image: url(https://images.pexels.com/photos/358319/pexels-photo-358319.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);box-shadow: inset 0 0 0 1000px rgb(0 0 0 / 80%);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-100">
                    Así como nuestras cargas, nosotros no paramos de movernos
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-yellow-600 lg:mx-auto">
                    Seguimos creciendo por ti y por la calidad de tu gestión de envíos
                </p>
            </div>
        </div>
        <div class="mt-10 pb-12 sm:pb-16">
            <div class="relative">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-7xl mx-auto">
                        <dl class="rounded-xl bg-gray-800 shadow-xl lg:grid lg:grid-cols-3">
                            <div class="flex justify-center items-center p-6 text-center border-0 space-x-4 lg:space-x-0 border-r border-gray-600">
                                <div>
                                    <svg class="w-auto h-14 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                                <div class="flex flex-col items-center justify-center p-2">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-thin text-gray-200">

                                        de trayectoria en EEUU y Venezuela
                                    </dt>
                                    <dd class="order-1 text-xl font-extrabold text-gray-200">
                                        +
                                        <span class="text-4xl">9</span>
                                        años
                                    </dd>
                                </div>
                            </div>
                            <div class="flex justify-center items-center p-6 text-center border-0 space-x-4 lg:space-x-0 border-r border-gray-600">
                                <div>
                                    <svg class="w-auto h-16 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                                </div>
                                <div class="flex flex-col items-center justify-center p-2">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-thin text-gray-200">
                                        de libras transportadas
                                    </dt>
                                    <dd class="order-1 text-xl font-extrabold text-gray-200">
                                        +
                                        <span class="text-4xl">1.000.000</span>
                                        lb
                                    </dd>
                                </div>
                            </div>
                            <div class="flex justify-center items-center p-6 text-center border-0 space-x-4 lg:space-x-0 border-r border-gray-600">
                                <div>
                                    <svg class="w-auto h-14 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div class="flex flex-col items-center justify-center p-2">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-thin text-gray-200">
                                        con entrega directa
                                    </dt>
                                    <dd class="order-1 text-xl font-extrabold text-gray-200">
                                        +
                                        <span class="text-4xl">16</span>
                                        ciudades
                                    </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-20 pb-12 bg-white">
        <div class="relative sm:py-16">
            <div class="hidden sm:block">
                <svg class="absolute top-6 left-1/2" width="404" height="392" fill="none" viewBox="0 0 450 450">
                    <defs>
                    <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-500" fill="currentColor"></rect>
                    </pattern>
                    </defs>
                    <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)"></rect>
                    </svg>
            </div>
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="relative rounded-xl px-6 py-10 bg-yellow-600 overflow-hidden shadow-xl sm:px-12 sm:py-20">
                    <div class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                        <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                            <path class="text-yellow-500 text-opacity-40" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z"></path>
                            <path class="text-yellow-700 text-opacity-40" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z"></path>
                            </svg>
                    </div>
                    <div class="relative">
                        <div class="text-center">
                            <h2 class="text-3xl font-extrabold text-white tracking-tight">
                                Rastrea tu carga</h2>
                            <p class="mt-6 mx-auto max-w-2xl text-lg text-yellow-200">
                                Entra a tu CARGOID y no pierdas de vista cada detalle</p>
                        </div>
                        <form action="" class="mt-12 sm:mx-auto sm:max-w-3xl sm:flex">
                            <div class="min-w-0 flex-1">
                                <label for="" class="sr-only">Email</label>
                                <input placeholder="Email" type="text" class="block w-full border border-transparent rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-xl focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-yellow-600">
                            </div>
                            <div class="min-w-0 flex-1 mt-4 sm:mt-0 sm:ml-3">
                                <label for="" class="sr-only">Contraseña</label>
                                <input placeholder="Contraseña" type="password" class="block w-full border border-transparent rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-xl focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-yellow-600">
                            </div>
                            <div class="mt-4 sm:mt-0 sm:ml-3">
                                <input value="Iniciar sesión" type="submit" class="block w-full rounded-md border border-transparent px-5 py-3 bg-gray-800 text-base font-medium text-white shadow-xl hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-yellow-600 sm:px-10">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-12 bg-gradient-to-b from-white via-gray-500 to-gray-800">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4">
                <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                    <div class="lg:self-center">
                        <h2 class="text-3xl font-extrabold text-gray-800">
                            <span class="block">Ve un paso adelante en la gestión de tus compras</span>
                        </h2>
                        <p class="mt-4 text-lg leading-6 text-yellow-600">
                            Descarga nuestro listado de productos frecuentes y conoce el valor estimado de su envío a Venezuela
                        </p>
                        <a href="" class="cursor-pointer mt-8 bg-gray-800 border border-transparent rounded-md shadow-xl px-5 py-3 inline-flex items-center text-base font-medium text-white transition transform ease-out hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 focus:ring-offset-white">
                            Descargar
                        </a>
                    </div>
                </div>
                <div>
                    <img src="/img/items.jpg" alt="Listado" title="" style="">
                </div>
            </div>
        </div>
    </div>

</main>
<x-footer></x-footer>
@endsection
