<x-guest-layout>
    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
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
                        Inicia sesión con tu CargoID.
                    </h1>
                    <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                        ¿Aún no tienes un CargoID?
                        <a
                          href="{{ route('register') }}"
                          class="text-yellow-600 hover:text-yellow-500 focus:text-yellow-700 transition duration-200 ease-in-out"
                          >
                          Regístrate y obtén el tuyo</a
                        >
                    </p>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-6 mt-4">
                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />

                                    <x-text-input id="email" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none" type="email" name="email" :value="old('email')" required autofocus />

                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                        </div>
                        <div class="mb-6">

                          <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password"  class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-yellow-600 focus:outline-none"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex justify-between items-center mb-6">

                          <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                        </label>
                          {{-- <a href="#!" class="text-gray-800">Olvidaste tu password?</a> --}}
                          @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu password?') }}
                            </a>
                        @endif
                        </div>

                        <div class="text-center lg:text-left">

                          {{-- <x-primary-button   class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-600 hover:bg-yellow-500 tracking-wider transition transform duration-200 hover:scale-105">
                            {{ __('Log in') }}
                        </x-primary-button> --}}
                        <button type="button" class="g-recaptcha group relative w-full flex justify-center py-2 px-4 border border-transparent text-lg font-medium rounded-md text-white tracking-wider bg-yellow-600 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 shadow-md" >
                            {{ __('Log in') }}
                        </button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</x-guest-layout>
