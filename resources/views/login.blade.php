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
                    Inicia sesión con tu CargoID.
                </h1>



                <form>

                    <!-- Email input -->
                    <div class="mb-6 mt-4">
                        <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput2"
                            placeholder="Correo Electronico"/>
                    </div>

                    <!-- Password input -->
                    <div class="mb-6">
                      <input
                        type="password"
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleFormControlInput2"
                        placeholder="Password"
                      />
                    </div>

                    <div class="flex justify-between items-center mb-6">
                      <div class="form-group form-check">
                        <input
                          type="checkbox"
                          class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                          id="exampleCheck2"
                        />
                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                          >Recuerdame</label
                        >
                      </div>
                      <a href="#!" class="text-gray-800">Olvidaste tu password?</a>
                    </div>

                    <div class="text-center lg:text-left">
                      <button
                        type="button"
                        class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-600 hover:bg-yellow-500 tracking-wider transition transform duration-200 hover:scale-105"
                      >

                            Iniciar sesión
                      </button>
                      <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                        ¿Aún no tienes un CargoID?
                        <a
                          href="#!"
                          class="text-yellow-600 hover:text-yellow-500 focus:text-yellow-700 transition duration-200 ease-in-out"
                          >
                          Regístrate y obtén el tuyo</a
                        >
                      </p>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</section>
<x-footer></x-footer>
@endsection
