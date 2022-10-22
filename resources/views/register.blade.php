@extends('layouts.app')

@section('content')
<x-navbar></x-navbar>

<section class="bg-white ">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
        </div>
        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-yellow-600 capitalize ">
                    Registrate y activa tu casillero gratuito.
                </h1>
                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                    <div>
                        <label class="block mb-2 text-sm text-gray-600">Nombre</label>
                        <input type="text" placeholder="John" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600">Apellido</label>
                        <input type="text" placeholder="Snow" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600">Teléfono</label>
                        <input type="text" placeholder="XXX-XX-XXXX-XXX" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600">Correo electrónico</label>
                        <input type="email" placeholder="johnsnow@example.com" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600">Ciudad</label>
                        <select class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none">
                           <option value=""></option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-600">Dirección</label>
                        <input type="email" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" />
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-600">Password</label>
                        <input type="password" placeholder="Enter your password" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" />
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-600">Confirmar password</label>
                        <input type="password" placeholder="Enter your password" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" />
                    </div>
                    <div>
                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                              <input id="terms" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300" required>
                            </div>
                            <label for="terms" class="ml-2 text-sm font-medium text-gray-900 ">Acepto los <a href="#" class="text-yellow-600 hover:underline">terminos y condiciones</a></label>
                        </div>
                    </div>
                    <div>

                    </div>
                    <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-600 hover:bg-yellow-500 tracking-wider transition transform duration-200 hover:scale-105">
                            Registrarse
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<x-footer></x-footer>
@endsection
