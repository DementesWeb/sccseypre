<template>
    <div v-if="dato45.total >= 1">
        <div class="flex justify-center">
            <div class="form-check form-switch">
                <label
                    class="form-check-label inline-block mx-4 text-gray-800"
                    for="flexSwitchCheckChecked"
                    >Cambiar Tipo de Vista: <strong>Cable Onda 2023</strong>
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
                                                    CEDULA
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    NOMBRE
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    SUSCRIPTOR
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    BARRIO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    CELULAR
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    TELEFONO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    SALDOCORRIENTE
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    SALDO30
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    SALDO60
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    SALDO90
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    SALDO90MAS
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    ESTADO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    OBSERVACION
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    PAGOMINIMO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    FECHAVENCE
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    DESCSALDOCORRIENTE
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    DESCSALDO30
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    DESCSALDO60
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    DESCSALDO90
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    DESCSALDO90MAS
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    OPT_02
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    DEUDATOTAL
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    CUENTA
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    CUENTA_BARRIO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    NOMBRE_CUENTA
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700"
                                        >
                                            <tr
                                                v-for="items in dato45.data"
                                                :key="items.id"
                                                class="hover:bg-gray-100 dark:hover:bg-gray-700 dark:bg-gray-900"
                                            >
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.CEDULA }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.NOMBRE }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.SUSCRIPTOR }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.BARRIO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.CELULAR }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.TELEFONO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.SALDOCORRIENTE }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.SALDO30 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.SALDO60 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.SALDO90 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.SALDO90MAS }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.ESTADO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.OBSERVACION }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.PAGOMINIMO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FECHAVENCE }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{
                                                        items.DESCSALDOCORRIENTE
                                                    }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DESCSALDO30 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DESCSALDO60 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DESCSALDO90 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DESCSALDO90MAS }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.OPT_02 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DEUDATOTAL }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.CUENTA }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.CUENTA_BARRIO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.NOMBRE_CUENTA }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <Pagination
                                        :pagination="dato45"
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
            <div
                class="container max-w-7xl mx-auto my-4 px-4 sm:px-6 lg:px-8 py-6"
            >
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                        <h2 class="py-4 px-12 font-bold text-xl">
                            Cable Onda 2023
                        </h2>
                        <!-- component -->
                        <div
                            class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                        >
                            <template
                                v-for="items in dato45.data"
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
                                            CEDULA: {{ items.CEDULA }}
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
                                                NOMBRE:
                                                <span class="font-bold">
                                                    {{ items.NOMBRE }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                SUSCRIPTOR:
                                                <span class="font-bold">
                                                    {{ items.SUSCRIPTOR }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                BARRIO:
                                                <span class="font-bold">
                                                    {{ items.BARRIO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                CELULAR:
                                                <span class="font-bold">
                                                    {{ items.CELULAR }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                TELEFONO:
                                                <span class="font-bold">
                                                    {{ items.TELEFONO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                SALDOCORRIENTE:
                                                <span class="font-bold">
                                                    {{ items.SALDOCORRIENTE }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                SALDO30:
                                                <span class="font-bold">
                                                    {{ items.SALDO30 }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                SALDO90:
                                                <span class="font-bold">
                                                    {{ items.SALDO90 }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                SALDO90MAS:
                                                <span class="font-bold">
                                                    {{ items.SALDO90MAS }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                ESTADO:
                                                <span class="font-bold">
                                                    {{ items.ESTADO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                OBSERVACION:
                                                <span class="font-bold">
                                                    {{ items.OBSERVACION }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                PAGOMINIMO:
                                                <span class="font-bold">
                                                    {{ items.PAGOMINIMO }}
                                                </span>
                                            </p>
                                        </div>
                                        <!-- Parte derecha -->
                                        <div class="items-center m-8">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                FECHAVENCE:
                                                <span class="font-bold">
                                                    {{ items.FECHAVENCE }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                DESCSALDOCORRIENTE:
                                                <span class="font-bold">
                                                    {{
                                                        items.DESCSALDOCORRIENTE
                                                    }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                DESCSALDO30:
                                                <span class="font-bold">
                                                    {{ items.DESCSALDO30 }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                DESCSALDO60:
                                                <span class="font-bold">
                                                    {{ items.DESCSALDO60 }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                DESCSALDO90:
                                                <span class="font-bold">
                                                    {{ items.DESCSALDO90 }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                DESCSALDO90MAS:
                                                <span class="font-bold">
                                                    {{ items.DESCSALDO90MAS }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                OPT_02:
                                                <span class="font-bold">
                                                    {{ items.OPT_02 }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                DEUDATOTAL:
                                                <span class="font-bold">
                                                    {{ items.DEUDATOTAL }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                CUENTA:
                                                <span class="font-bold">
                                                    {{ items.CUENTA }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                CUENTA_BARRIO:
                                                <span class="font-bold">
                                                    {{ items.CUENTA_BARRIO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                NOMBRE_CUENTA:
                                                <span class="font-bold">
                                                    {{ items.NOMBRE_CUENTA }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <Pagination :pagination="dato45"></Pagination>
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
        dato45: Object,
        filters: Object,
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
