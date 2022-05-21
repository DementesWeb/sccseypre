<template>
    <app-layout title="Buscar Cedula">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Buscar Cedula
            </h2>
        </template>
        <!-- Telefonos -->
        <div class="container py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                    <Input
                        type="text"
                        class="form-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        v-model="search"
                        placeholder="Buscar Cedula"
                    />
                    <h2 class="py-4 px-12 font-bold text-xl">Teléfono</h2>
                    <!-- component -->
                    <div
                        class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                    >
                        <template
                            v-for="items in cedtelefono.data"
                            :key="items.id"
                        >
                            <!-- Card 1 -->
                            <div
                                class="rounded-sm w-3/4 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform"
                                href="#"
                            >
                                <!-- Icon -->
                                <div class="col-span-12 md:col-span-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="#2563eb"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"
                                        />
                                    </svg>
                                </div>

                                <!-- Title -->
                                <div class="col-span-11 xl:-ml-5">
                                    <p class="text-blue-600 font-bold">
                                        Cedula: {{ items.CED }}
                                    </p>
                                </div>

                                <!-- Description -->
                                <div
                                    class="flex flex-row md:col-start-2 col-span-11 xl:-ml-5 gap-2"
                                >
                                    <!-- Parte Izquierda -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Primer Nombre:
                                            <span class="font-bold">
                                                {{ items.PRIMER_NOMBRE }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Segundo Nombre:
                                            <span class="font-bold">
                                                {{ items.SEGUNDO_NOMBRE }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Apellido Paterno:
                                            <span class="font-bold">
                                                {{ items.APELLIDO_PATERNO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Apellido Materno:
                                            <span class="font-bold">
                                                {{ items.APELLIDO_MATERNO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Apellido Casada:
                                            <span class="font-bold">
                                                {{ items.APELLIDO_CASADA }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 1:
                                            <span class="font-bold">
                                                {{ items.TEL1 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 2:
                                            <span class="font-bold">
                                                {{ items.TEL2 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 3:
                                            <span class="font-bold">
                                                {{ items.TEL3 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 4:
                                            <span class="font-bold">
                                                {{ items.TEL4 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 5:
                                            <span class="font-bold">
                                                {{ items.TEL5 }}
                                            </span>
                                        </p>
                                    </div>
                                    <!-- Parte derecha -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 6:
                                            <span class="font-bold">
                                                {{ items.TEL6 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 7:
                                            <span class="font-bold">
                                                {{ items.TEL7 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 8:
                                            <span class="font-bold">
                                                {{ items.TEL8 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 9:
                                            <span class="font-bold">
                                                {{ items.TEL9 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 10:
                                            <span class="font-bold">
                                                {{ items.TEL10 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 11:
                                            <span class="font-bold">
                                                {{ items.TEL11 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 12:
                                            <span class="font-bold">
                                                {{ items.TEL12 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 13:
                                            <span class="font-bold">
                                                {{ items.TEL13 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 14:
                                            <span class="font-bold">
                                                {{ items.TEL14 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono 15:
                                            <span class="font-bold">
                                                {{ items.TEL15 }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <Pagination :pagination="cedtelefono"></Pagination>
                </div>
            </div>
        </div>
        <!-- Fin Telefono -->
        <!-- Dato 1 -->
        <div class="container py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                    <h2 class="py-4 px-12 font-bold text-xl">Dato 1</h2>
                    <!-- component -->
                    <div
                        class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                    >
                        <template
                            v-for="items in ceddato1.data"
                            :key="items.id"
                        >
                            <!-- Card 1 -->
                            <div
                                class="rounded-sm w-3/4 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform"
                                href="#"
                            >
                                <!-- Icon -->
                                <div class="col-span-12 md:col-span-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="#2563eb"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"
                                        />
                                    </svg>
                                </div>

                                <!-- Title -->
                                <div class="col-span-11 xl:-ml-5">
                                    <p class="text-blue-600 font-bold">
                                        Cedula: {{ items.CEDULA }}
                                    </p>
                                </div>

                                <!-- Description -->
                                <div
                                    class="flex flex-row md:col-start-2 col-span-11 xl:-ml-5 gap-2"
                                >
                                    <!-- Parte Izquierda -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Nombre Cliente:
                                            <span class="font-bold">
                                                {{ items.NOMBRE_CLIENTE }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Suscriptor:
                                            <span class="font-bold">
                                                {{ items.SUSCRIPTOR }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Barrio:
                                            <span class="font-bold">
                                                {{ items.BARRIO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Celular:
                                            <span class="font-bold">
                                                {{ items.CELULAR }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono:
                                            <span class="font-bold">
                                                {{ items.TELEFONO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Email:
                                            <span class="font-bold">
                                                {{ items.EMAIL }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Email Cable:
                                            <span class="font-bold">
                                                {{ items.EMAIL_CABLE }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Saldo Corriente:
                                            <span class="font-bold">
                                                {{ items.SALDOCORRIENTE }}
                                            </span>
                                        </p>
                                    </div>
                                    <!-- Parte derecha -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Saldo 30:
                                            <span class="font-bold">
                                                {{ items.SALDO30 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Saldo 60:
                                            <span class="font-bold">
                                                {{ items.SALDO60 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Saldo 90:
                                            <span class="font-bold">
                                                {{ items.SALDO90 }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Saldo 90 Mas:
                                            <span class="font-bold">
                                                {{ items.SALDO90MAS }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Estado:
                                            <span class="font-bold">
                                                {{ items.ESTADO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Deuda Total:
                                            <span class="font-bold">
                                                {{ items.DEUDATOTAL }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Fecha Actualización:
                                            <span class="font-bold">
                                                {{ items.FECHA_ACTUALIZACION }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <!-- <pre>{{ cedulatelfinal }}</pre> -->
                    <Pagination :pagination="ceddato1"></Pagination>
                </div>
            </div>
        </div>
        <!-- Fin Dato 1 -->
        <!-- Dato 2 -->
        <div class="container py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                    <h2 class="py-4 px-12 font-bold text-xl">Dato 2</h2>
                    <!-- component -->
                    <div
                        class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                    >
                        <template
                            v-for="items in ceddato2.data"
                            :key="items.id"
                        >
                            <!-- Card 1 -->
                            <div
                                class="rounded-sm w-3/4 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform"
                                href="#"
                            >
                                <!-- Icon -->
                                <div class="col-span-12 md:col-span-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="#2563eb"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"
                                        />
                                    </svg>
                                </div>

                                <!-- Title -->
                                <div class="col-span-11 xl:-ml-5">
                                    <p class="text-blue-600 font-bold">
                                        Cedula: {{ items.cedula }}
                                    </p>
                                </div>

                                <!-- Description -->
                                <div
                                    class="flex flex-row md:col-start-2 col-span-11 xl:-ml-5 gap-2"
                                >
                                    <!-- Parte Izquierda -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Nombre:
                                            <span class="font-bold">
                                                {{ items.nombre }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono Casa:
                                            <span class="font-bold">
                                                {{ items.telefono_casa }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono Oficina:
                                            <span class="font-bold">
                                                {{ items.telefono_oficina }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Celular:
                                            <span class="font-bold">
                                                {{ items.celular }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Fax:
                                            <span class="font-bold">
                                                {{ items.fax }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Email:
                                            <span class="font-bold">
                                                {{ items.email }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Dirección Postal:
                                            <span class="font-bold">
                                                {{ items.direccion_postal }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Dirección:
                                            <span class="font-bold">
                                                {{ items.direccion }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono Residencia Cable:
                                            <span class="font-bold">
                                                {{
                                                    items.telefono_residencia_cable
                                                }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono Oficina Cable:
                                            <span class="font-bold">
                                                {{
                                                    items.telefono_oficina_cable
                                                }}
                                            </span>
                                        </p>
                                    </div>
                                    <!-- Parte derecha -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono Celular Cable:
                                            <span class="font-bold">
                                                {{
                                                    items.telefono_celular_cable
                                                }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Dirección Postal Cable:
                                            <span class="font-bold">
                                                {{
                                                    items.direccion_postal_cable
                                                }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            FAX:
                                            <span class="font-bold">
                                                {{ items.fax_cable }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Dirección Fisica:
                                            <span class="font-bold">
                                                {{ items.direccion_fisica }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono Contacto:
                                            <span class="font-bold">
                                                {{ items.telefono_contacto }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <!-- <pre>{{ cedulatelfinal }}</pre> -->
                    <Pagination :pagination="ceddato2"></Pagination>
                </div>
            </div>
        </div>
        <!-- FIN DATO 2 -->
        <!-- DATO 3 -->
        <div class="container py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                    <h2 class="py-4 px-12 font-bold text-xl">Dato 3</h2>
                    <!-- component -->
                    <div
                        class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                    >
                        <template
                            v-for="items in ceddato3.data"
                            :key="items.id"
                        >
                            <!-- Card 1 -->
                            <div
                                class="rounded-sm w-3/4 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform"
                                href="#"
                            >
                                <!-- Icon -->
                                <div class="col-span-12 md:col-span-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="#2563eb"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"
                                        />
                                    </svg>
                                </div>

                                <!-- Title -->
                                <div class="col-span-11 xl:-ml-5">
                                    <p class="text-blue-600 font-bold">
                                        Cedula: {{ items.CEDULA }}
                                    </p>
                                </div>

                                <!-- Description -->
                                <div
                                    class="flex flex-row md:col-start-2 col-span-11 xl:-ml-5 gap-2"
                                >
                                    <!-- Parte Izquierda -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Primer Nombre:
                                            <span class="font-bold">
                                                {{ items.PRIMER_NOMBRE }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Segundo Nombre:
                                            <span class="font-bold">
                                                {{ items.SEGUNDO_NOMBRE }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Apellido Paterno:
                                            <span class="font-bold">
                                                {{ items.APELLIDO_PATERNO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Apellido Materno:
                                            <span class="font-bold">
                                                {{ items.APELLIDO_MATERNO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Apellido Casada:
                                            <span class="font-bold">
                                                {{ items.APELLIDO_CASADA }}
                                            </span>
                                        </p>
                                    </div>
                                    <!-- Parte derecha -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Fecha Nacimiento:
                                            <span class="font-bold">
                                                {{ items.FECHA_NACIMIENTO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Sexo:
                                            <span class="font-bold">
                                                {{ items.SEXO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Edad:
                                            <span class="font-bold">
                                                {{ items.EDAD }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono Residencia:
                                            <span class="font-bold">
                                                {{ items.TELEFONO_RES }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <!-- <pre>{{ cedulatelfinal }}</pre> -->
                    <Pagination :pagination="ceddato3"></Pagination>
                </div>
            </div>
        </div>
        <!-- FIN DATO 3 -->
        <!-- DATO 4 -->
        <div class="container py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                    <h2 class="py-4 px-12 font-bold text-xl">Dato 4</h2>
                    <!-- component -->
                    <div
                        class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                    >
                        <template
                            v-for="items in ceddato4.data"
                            :key="items.id"
                        >
                            <!-- Card 1 -->
                            <div
                                class="rounded-sm w-3/4 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform"
                                href="#"
                            >
                                <!-- Icon -->
                                <div class="col-span-12 md:col-span-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="#2563eb"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"
                                        />
                                    </svg>
                                </div>

                                <!-- Title -->
                                <div class="col-span-11 xl:-ml-5">
                                    <p class="text-blue-600 font-bold">
                                        Cedula: {{ items.CEDULA }}
                                    </p>
                                </div>

                                <!-- Description -->
                                <div
                                    class="flex flex-row md:col-start-2 col-span-11 xl:-ml-5 gap-2"
                                >
                                    <!-- Parte Izquierda -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Primer Nombre:
                                        <span class="font-bold">
                                            {{ items.P_NOMBRE }}
                                        </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                                Segundo Nombre:
                                            <span class="font-bold">
                                                {{ items.S_NOMBRE }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Paterno:
                                            <span class="font-bold">
                                                {{ items.PATERNO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Materno:
                                            <span class="font-bold">
                                                {{ items.MATERNO }}
                                            </span>
                                        </p>
                                    </div>
                                    <!-- Parte derecha -->
                                    <div class="items-center m-8">
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Casada:
                                            <span class="font-bold">
                                                {{ items.CASADA }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Sexo:
                                            <span class="font-bold">
                                                {{ items.SEXO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Telefono:
                                            <span class="font-bold">
                                                {{ items.TEELFONO }}
                                            </span>
                                        </p>
                                        <p
                                            class="text-md text-gray-800 font-light"
                                        >
                                            Fecha Nacimiento:
                                            <span class="font-bold">
                                                {{ items.FECHA_NACIMIENTO }}
                                            </span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <!-- <pre>{{ cedulatelfinal }}</pre> -->
                    <Pagination :pagination="ceddato4"></Pagination>
                </div>
            </div>
        </div>
        <!-- FIN DATO 4 -->
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/buscarcedula",
                {
                    search: $value,
                },
                {
                    preserveState: true,
                }
            );
        },
    },

    props: {
        cedtelefono: Object,
        ceddato1: Object,
        ceddato2: Object,
        ceddato3: Object,
        ceddato4: Object,
        filters: Object,
    },
};
</script>
