<template>
    <div v-if="customer.total >= 1">
        <div class="flex justify-center">
            <div class="form-check form-switch">
                <label
                    class="form-check-label inline-block mx-4 text-gray-800"
                    for="flexSwitchCheckChecked"
                    >Cambiar Tipo de Vista: <strong>Clientes</strong>
                </label>
                <button
                    class="ui btn-blue toggle"
                    :class="{ active: isActive }"
                    @click="isActive = !isActive"
                >
                    {{ isActive ? "Tarjeta" : "Tabla" }}
                </button>
            </div>
        </div>
        <div v-if="isActive">
            <!-- Vista Tabla -->
            <div class="max-w-7xl mx-auto my-4 px-4 sm:px-6 lg:px-8">
                <div class="max-w-1xl mx-auto">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden">
                                    <table
                                        class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700"
                                    >
                                        <thead
                                            class="bg-gray-100 dark:bg-gray-700"
                                        >
                                            <tr>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Cédula
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Nombre y Apellidos
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Cargo
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Sueldo
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Sobre Sueldo
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Sueldo Neto
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    30%
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    25%
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    20%
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 1
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 1
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 1
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 2
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 2
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 2
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 3
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 3
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 3
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 4
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 4
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 4
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 5
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 5
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 5
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 6
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 6
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 6
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 7
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 7
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 7
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 8
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 8
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 8
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 9
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 9
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 9
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 10
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 10
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 10
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 11
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 11
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 11
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Institución 12
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Letra - Pago 12
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    Fecha 12
                                                </th>

                                                <th scope="col" class="p-4">
                                                    <span class="sr-only">
                                                        <i
                                                            class="fa fa-circle-chevron-right"
                                                        ></i>
                                                    </span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700"
                                        >
                                            <tr
                                                v-for="items in customer.data"
                                                :key="items.id"
                                                class="hover:bg-gray-100 dark:hover:bg-gray-700 dark:bg-gray-900"
                                            >
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.cedula }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                >
                                                    {{
                                                        items.nombre_y_apellido
                                                    }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.cargo }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.sueldo }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.sobresueldo }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.sobresueldo }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.sueldo_neto }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.v35_porciento }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.v20_porciento }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.v25_porciento }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_1 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_1 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_1 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_2 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_2 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_2 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_3 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_3 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_3 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_4 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_4 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_4 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_5 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_5 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_5 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_6 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_6 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_6 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_7 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_7 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_7 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_8 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_8 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_8 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_9 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_9 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_9 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_10 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_10 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_10 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_11 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_11 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_11 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COD_12 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DES_12 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FEC_12 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap"
                                                >
                                                    <!-- <Link :href="route('customers.edit', items.id)">
                                                    <i class="fa fa-angle-right"></i>
                                                </Link> -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <Pagination
                                        :pagination="customer"
                                    ></Pagination>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin -->
                </div>
            </div>
        </div>
        <div v-else>
            <!-- Vista Tipo Tarjeta -->
            <div
                class="container py-6 max-w-7xl mx-auto my-4 px-4 sm:px-6 lg:px-8 py-5"
            >
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                        <h2 class="py-4 px-12 font-bold text-xl">Clientes</h2>
                        <!-- component -->
                        <div
                            class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                        >
                            <template
                                v-for="items in customer.data"
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
                                                Primer Nombre:
                                                <span class="font-bold">
                                                    {{
                                                        items.nombre_y_apellido
                                                    }}
                                                </span>
                                            </p>
                                        </div>
                                        <!-- Parte derecha -->
                                        <div class="items-center m-8">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Cargo:
                                                <span class="font-bold">
                                                    {{ items.cargo }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Sueldo:
                                                <span class="font-bold">
                                                    {{ items.sueldo }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Sobre Sueldo:
                                                <span class="font-bold">
                                                    {{ items.sobresueldo }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Sueldo Neto:
                                                <span class="font-bold">
                                                    {{ items.sueldo_neto }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                30%:
                                                <span class="font-bold">
                                                    {{ items.v35_porciento }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                25%:
                                                <span class="font-bold">
                                                    {{ items.v25_porciento }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                20%:
                                                <span class="font-bold">
                                                    {{ items.v20_porciento }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Deuda Activa 1-->
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 1</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_1 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_1 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_1 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Fin Deuda Activa 1-->
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 2</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_2 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_2 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_2 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 3</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_3 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_3 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_3 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Deuda Activa 1-->
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 4</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_4 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_4 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_4 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Fin Deuda Activa 1-->
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 5</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_5 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_5 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_5 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 6</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_6 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_6 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_6 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Deuda Activa 1-->
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 7</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_7 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_7 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_7 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Fin Deuda Activa 1-->
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 8</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_8 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_8 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_8 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 9</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_9 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_9 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_9 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Deuda Activa 1-->
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 10</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_10 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_10 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_10 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Fin Deuda Activa 1-->
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 11</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_11 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_11 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_11 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <h4 class="py-2">Deuda Activa 12</h4>
                                    </div>
                                    <div
                                        class="flex flex-row md:col-start-3 col-span-11 xl:-ml-5 gap-1"
                                    >
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light mb-8"
                                            >
                                                Institución:
                                                <span class="font-bold">
                                                    {{ items.COD_12 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Letra - Pago:
                                                <span class="font-bold">
                                                    {{ items.DES_12 }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="items-center mx-3">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Fecha:
                                                <span class="font-bold">
                                                    {{ items.FEC_12 }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <!-- <pre>{{ cedulatelfinal }}</pre> -->
                        <Pagination :pagination="customer"></Pagination>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Pagination from "@/Components/Pagination.vue";
export default {
    components: {
        Pagination,
    },
    props: {
        customer: Object,
    },
    data() {
        return {
            isActive: true,
        };
    },
    toggle() {
        if (!this.isActive) {
            this.isActive = true;
        } else {
            this.isActive = false;
        }
    },
};
</script>
