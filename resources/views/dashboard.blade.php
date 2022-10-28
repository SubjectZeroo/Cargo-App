<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 pt-16">
        <div class="grid grid-cols-1 sm:gap-4 items-start lg:grid-cols-3 lg:gap-8">
            <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                <section>
                    <div class="rounded-lg bg-white overflow-hidden shadow">
                        <h2 class="sr-only" id="profile-overview-title">
                            Perfil
                        </h2>
                        <div class="bg-white p-6">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-5">
                                    <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                        <p class="text-sm font-light text-gray-700">
                                            Buenas noches,
                                        </p>
                                        <p class="text-xl font-semibold text-gray-900 sm:text-2xl">
                                            {{ Auth::user()->name }}
                                        </p>
                                        <p class="text-sm font-light text-gray-700">
                                            OneWayID:
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-5 flex justify-center sm:mt-0">
                                    <a href="#" class="flex justify-center items-center px-4 py-2 shadow-sm text-sm font-medium rounded-md text-gray-100 bg-yellow-600 hover:bg-yellow-500">
                                        Mi Perfil
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <h2 class="sr-only">
                        Section title
                    </h2>
                    <div class="sm:rounded-lg bg-white overflow-hidden shadow-lg">
                        <div class="p-6">
                            <div class="w-full flex flex-col space-y-4">
                                <p class="inline-flex text-gray-700 text-sm font-light">
                                    A continuación le recordamos la información que requerirá en el momento de enviar su mercancía hasta nuestras oficinas en USA.
                                </p>
                                <div class="mx-4 flex flex-col">
                                    <p class="inline-flex text-gray-700 text-sm font-bold">
                                        <span>ENVIO AEREOS:</span>
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Nombre:</span>
                                        JRG566781 - {{ Auth::user()->name }}
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Direccion:</span>
                                        8185 NW 68th ST.
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Ciudad:</span>
                                        Miami
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Estado:</span>
                                        Florida.
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Zip Code:</span>
                                        33166.
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Telefono:</span>
                                        (305) 999 1745.
                                    </p>
                                </div>
                                <div class="mx-4 flex flex-col">
                                    <p class="inline-flex text-gray-700 text-sm font-bold">
                                        <span>ENVIO MARITIMOS:</span>
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Nombre:</span>
                                        MARITIMO - JRG566781 - {{ Auth::user()->name }}
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Direccion:</span>
                                        8185 NW 68th ST.
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Ciudad:</span>
                                        Miami
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Estado:</span>
                                        Florida.
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Zip Code:</span>
                                        33166.
                                    </p>
                                    <p class="inline-flex text-gray-700 text-sm font-light">
                                        <span class="text-gray-700 text-sm font-medium mr-2">Telefono:</span>
                                        (305) 999 1745.
                                    </p>
                                </div>
                                <p class="inline-flex text-gray-700 text-sm font-light">

IMPORTANTE: Cuando tu carga maritma no esta debidamente identificada, corres el riesgo de que sea enviada por via aerea, afectando la logistica y valor de tu envio.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="grid grid-cols-1 gap-4">

            </div>
        </div>
    </div>

</x-app-layout>
