<x-guest-layout>
    <script type="text/javascript">

        function callbackThen(response){

            // read HTTP status

            console.log(response.status);

            // read Promise object

            response.json().then(function(data){

            console.log(data);

            });

        }

        function callbackCatch(error){

             console.error('Error:', error)

        }

    </script>

        {!! htmlScriptTagJsApi([

        'callback_then' => 'callbackThen',

        'callback_catch' => 'callbackCatch'

        ]) !!}
    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card> --}}
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
                    <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                        ¿Ya tienes un CARGOID?
                        <a
                          href="{{ route('login') }}"
                          class="text-yellow-600 hover:text-yellow-500 focus:text-yellow-700 transition duration-200 ease-in-out"
                          >
                          Inicia sesión ahora.</a
                        >
                      </p>
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                         <!-- Name -->
                         <div class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                            <div>
                                <x-input-label for="name" :value="__('Nombre')" class="block mb-2 text-sm text-gray-600"/>

                                <x-text-input id="name" type="text" name="name" :value="old('name')" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" required autofocus />

                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <!-- LastName -->
                            <div>
                                <x-input-label for="lastname" :value="__('Apellido')" class="block mb-2 text-sm text-gray-600"/>

                                <x-text-input id="lastname" type="text" name="lastname" :value="old('lastname')" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none"  required autofocus />

                                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                            </div>
                            <!-- Phone -->
                            <div>
                                <x-input-label for="phone" :value="__('Teléfono')" class="block mb-2 text-sm text-gray-600"/>

                                <x-text-input id="phone" type="text" name="phone" :value="old('phone')" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none"  required autofocus />

                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                              <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" class="block mb-2 text-sm text-gray-600"/>

                                <x-text-input id="email"  class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" type="email" name="email" :value="old('email')" required />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                              <!-- city_id -->
                            <div>
                                <x-input-label for="city_id" :value="__('Ciudad')" class="block mb-2 text-sm text-gray-600"/>
                                <select id="city_id" name="city_id" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-yellow-700 focus:bg-white focus:border-yellow-600 focus:outline-none" required>
                                   <option value="">Escoge tu ciudad</option>
                                   <option value="1">Valencia</option>
                                </select>
                            </div>
                            <!-- direction -->
                            <div>
                                <x-input-label for="direction" :value="__('Dirección')" class="block mb-2 text-sm text-gray-600"/>

                                <x-text-input id="direction" type="text" name="direction" :value="old('direction')" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none"  required autofocus />

                                <x-input-error :messages="$errors->get('direction')" class="mt-2" />
                            </div>
                             <!-- Password -->
                            <div>
                                <x-input-label for="password" :value="__('Password')" class="block mb-2 text-sm text-gray-600"/>

                                <x-text-input id="password"
                                                type="password"
                                                name="password"
                                                class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                             <!-- Confirm Password -->
                            <div>
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block mb-2 text-sm text-gray-600"/>

                                <x-text-input id="password_confirmation"
                                                type="password"
                                                name="password_confirmation" class="bform-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" required />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            {{-- <div>
                                <div class="flex items-start mb-6">
                                    <input id="terms" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300" required>
                                    <label for="terms" class="ml-2 text-sm font-medium text-gray-900 ">Acepto los <a href="#" class="text-yellow-600 hover:underline">terminos y condiciones</a></label>
                                </div>
                            </div> --}}
                            {{-- <div>
                            </div> --}}
                            {{-- <x-primary-button class="g-recaptcha group relative w-full flex justify-center py-2 px-4 border border-transparent text-lg font-medium rounded-md text-white tracking-wider bg-yellow-600 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 shadow-md">
                                {{ __('Registrarse') }}
                            </x-primary-button> --}}
                         </div>

                        <button type="button" class="mt-8 g-recaptcha group relative w-full flex justify-center py-2 px-4 border border-transparent text-lg font-medium rounded-md text-white tracking-wider bg-yellow-600 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 shadow-md">
                            {{ __('Registrarse') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</x-guest-layout>
