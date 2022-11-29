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
                                    <a href="#"
                                        class="openModalPerfil flex justify-center items-center px-4 py-2 shadow-sm text-sm font-medium rounded-md text-gray-100 bg-yellow-600 hover:bg-yellow-500">
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
                                    A continuación le recordamos la información que requerirá en el momento de enviar su
                                    mercancía hasta nuestras oficinas en USA.
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
                                    IMPORTANTE: Cuando tu carga maritma no esta debidamente identificada, corres el
                                    riesgo de que sea enviada por via aerea, afectando la logistica y valor de tu envio.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <section class="section-2-title">
                    <div class="sm:rounded-lg bg-white overflow-hidden shadow mb-4">
                        <div class="p-6">
                            <div class="flex flex-col justify-between space-y-6">
                                <div class="w-full">
                                    <div
                                        class="text-gray-700 text-lg tracking-wider font-bold mb-3 pb-2 border-b-2 border-yellow-600 border-opacity-50 w-full">
                                        Rastrear Envío
                                    </div>
                                    <form id="form_tracking">
                                        <input type="text" class="bg-gray-100 h-full w-full rounded-md p-4 text-sm"
                                            placeholder="Número de tracking" id="tracking">
                                        <button
                                            class="openModalTracking mt-2 px-4 py-2 shadow-sm text-sm font-medium rounded-md text-gray-100 bg-yellow-600 hover:bg-yellow-500 w-full">Buscar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:rounded-lg bg-white overflow-hidden shadow mb-4">
                        <div class="p-6">
                            <div class="flex flex-col justify-between space-y-6">
                                <div class="w-full">
                                    <div
                                        class="text-gray-700 text-lg tracking-wider font-bold mb-3 pb-2 border-b-2 border-yellow-600 border-opacity-50 w-full">
                                        Métodos de Pago
                                    </div>
                                    <div class="w-full mb-6 flex flex-col space-y-4">
                                        <div class="w-full">
                                            <p class="text-yellow-600 text-sm font-medium min-w-max">
                                                Banco Banesco:
                                            </p>
                                            <p class="inline-flex text-gray-700 text-sm font-light">
                                                Nombre: Inversiones JRG 89 C.A
                                                <br>
                                                Nro. De cuenta: 0134 0319 80 3191101437
                                                <br>
                                                Cuenta Corriente
                                                <br>
                                                R.I.F.: J-40182641-5
                                                <br>
                                                pagos@onewaycargo.net
                                            </p>
                                        </div>
                                        <div class="w-full">
                                            <p class="text-yellow-600 text-sm font-medium min-w-max">
                                                Pago Zelle:
                                            </p>
                                            <p class="text-gray-700 text-sm font-light pt-2">
                                                <strong>OPEX CARGO LLC</strong>
                                                <br>
                                                onewaycargo@gmail.com
                                            </p>
                                            <p class="text-gray-700 text-sm font-light pt-2">
                                                <strong>OPEX CARGO LLC</strong>
                                                <br>
                                                info@onewaycargo.net
                                            </p>
                                            <p class="text-gray-700 text-sm font-light pt-2">
                                                <strong>NOTA</strong>
                                                : cualquiera de los 2 correos, se encuentran activos inscritos en Zelle,
                                                puede transferir a cualquiera de los 2.
                                            </p>
                                        </div>
                                        <div class="w-full">
                                            <p class="text-yellow-600 text-sm font-medium min-w-max">
                                                Pago Móvil:
                                            </p>
                                            <p class="inline-flex text-gray-700 text-sm font-light">
                                                Inversiones JRG 89, C.A.
                                                <br>
                                                Banesco
                                                <br>
                                                RIF: J-40182641-5 Teléfono: 0424-4463614
                                            </p>
                                        </div>
                                        <div class="w-full">
                                            <p class="text-yellow-600 text-sm font-medium min-w-max">
                                                Efectivo:
                                            </p>
                                            <p class="inline-flex text-gray-700 text-sm font-light">
                                                Directamente en nuestras oficinas.
                                            </p>
                                        </div>
                                        <div class="w-full">
                                            <p class="text-red-500 text-sm font-medium min-w-max">
                                                IMPORTANTE:
                                            </p>
                                            <p class="inline-flex text-gray-700 text-sm font-light text-justify">
                                                Debe presentar la constancia de depósito o transferencia, en el momento
                                                que retire la mercancía o enviarla vía correo a pagoscargoid@gmail.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="modalPerfil" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div class="inline-block bg-gray-100 rounded-xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 align-middle sm:max-w-lg sm:w-full p-6"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-gray-100 p-5">
                    <div class="sm:mx-auto sm:w-full flex flex-col items-center">
                        <div
                            class="closeModalPerfil flex self-end -mr-8 -mt-8 cursor-pointer text-gray-800 transition transform ease-in-out hover:scale-110 hover:text-yellow-600">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="mt-6 text-center text-2xl font-bold text-gray-800">
                            Mi Perfil
                        </h2>
                    </div>
                    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                        <div class="sm:px-10">
                            <div class="space-y-4 text-center">
                                <div>
                                    <label for="nombre" class="block text-sm font-medium text-gray-800 font-bold">
                                        Nombre
                                    </label>
                                    <div class="mt-1">
                                        <p id="tracking_fecha_llegada_usa" class="font-thin">Jafeht Soturno</p>
                                    </div>
                                </div>
                                <div>
                                    <label for="apellido" class="block text-sm font-medium text-gray-800 font-bold">
                                        Onewayid
                                    </label>
                                    <div class="mt-1">
                                        <p id="tracking_fecha_llegada_venezuela" class="font-thin">JRG566781</p>
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-800 font-bold">
                                        CI
                                    </label>
                                    <div class="mt-1">
                                        <p id="tracking_peso" class="font-thin">23418697</p>
                                    </div>
                                </div>
                                <div>
                                    <label for="dimensiones"
                                        class="block text-sm font-medium text-gray-800 font-bold">
                                        Email
                                    </label>
                                    <div class="mt-1">
                                        <p id="tracking_dimensiones" class="font-thin">jafehtsubjectzero@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modalTracking" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div class="inline-block bg-gray-100 rounded-xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 align-middle sm:max-w-lg sm:w-full p-6"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-gray-100 p-5">
                    <div class="sm:mx-auto sm:w-full flex flex-col items-center">
                        <div
                            class="closeModalTracking flex self-end -mr-8 -mt-8 cursor-pointer text-gray-800 transition transform ease-in-out hover:scale-110 hover:text-yellow-600">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="mt-6 text-center text-2xl font-bold text-gray-800">
                            Detalles del Tracking
                        </h2>
                    </div>
                    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                        <div class="sm:px-10">
                            <div class="space-y-4 text-center">
                                <div>
                                    <label for="nombre" class="block text-sm font-medium text-gray-800 font-bold">
                                        Fecha llegada USA
                                    </label>
                                    <div class="mt-1">
                                        <p id="tracking_fecha_llegada_usa" class="font-thin"></p>
                                    </div>
                                </div>
                                <div>
                                    <label for="apellido" class="block text-sm font-medium text-gray-800 font-bold">
                                        Fecha llegada Valencia
                                    </label>
                                    <div class="mt-1">
                                        <p id="tracking_fecha_llegada_venezuela" class="font-thin"></p>
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-800 font-bold">
                                        Peso
                                    </label>
                                    <div class="mt-1">
                                        <p id="tracking_peso" class="font-thin"></p>
                                    </div>
                                </div>
                                <div>
                                    <label for="dimensiones"
                                        class="block text-sm font-medium text-gray-800 font-bold">
                                        Dimensiones
                                    </label>
                                    <div class="mt-1">
                                        <p id="tracking_dimensiones" class="font-thin"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
