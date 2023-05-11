<template>
    <div v-if="dato43.total >= 1">
        <div class="flex justify-center">
            <div class="form-check form-switch">
                <label
                    class="form-check-label inline-block mx-4 text-gray-800"
                    for="flexSwitchCheckChecked"
                    >Cambiar Tipo de Vista: <strong>RUVM</strong>
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
                                                    id
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    PLACA
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    CUPO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    MARCA
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    MODELO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    TIPO VEHICULO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    AÑO VEHICULO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    MOTOR
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    TIPO CAPACIDAD
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    CAPACIDAD
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    COLOR
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    TIPO COMBUSTIBLE
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    TIPO DOC PROPIETARIO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    CIP PROPIETARIO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    SEXO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    DIRECCION
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    TEL1
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    TEL2
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    TEL3
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    TEL4
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    ESTADO
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700"
                                        >
                                            <tr
                                                v-for="items in dato43.data"
                                                :key="items.id"
                                                class="hover:bg-gray-100 dark:hover:bg-gray-700 dark:bg-gray-900"
                                            >
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.id }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.PLACA }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.CUPO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.MARCA }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.MODELO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.TIPO_VEHICULO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.ANO_VEHICULO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.MOTOR }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.TIPO_CAPACIDAD }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.CAPACIDAD }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.COLOR }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.TIPO_COMBUSTIBLE }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.TIPO_DOC_PROPIETARIO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.CIP_PROPIETARIO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.NOMBRE_COMPLETO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.SEXO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.DIRECCION }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.TEL1 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.TEL2 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.TEL3 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.TEL4 }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.ESTADO }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <Pagination
                                        :pagination="dato43"
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
                            RUVM
                        </h2>
                        <!-- component -->
                        <div
                            class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                        >
                            <template
                                v-for="items in dato43.data"
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
                                            id: {{ items.id }}
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
                                                Placa:
                                                <span class="font-bold">
                                                    {{ items.PLACA }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Cupo:
                                                <span class="font-bold">
                                                    {{ items.CUPO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Marca:
                                                <span class="font-bold">
                                                    {{ items.MARCA }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Modelo:
                                                <span class="font-bold">
                                                    {{ items.MODELO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Tipo Vehículo:
                                                <span class="font-bold">
                                                    {{ items.TIPO_VEHICULO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Año Vehículo:
                                                <span class="font-bold">
                                                    {{ items.ANO_VEHICULO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Motor:
                                                <span class="font-bold">
                                                    {{ items.MOTOR }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Tipo Capacidad:
                                                <span class="font-bold">
                                                    {{ items.TIPO_CAPACIDAD }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Capacidad:
                                                <span class="font-bold">
                                                    {{ items.CAPACIDAD }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Color:
                                                <span class="font-bold">
                                                    {{ items.COLOR }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Tipo Combustible:
                                                <span class="font-bold">
                                                    {{ items.TIPO_COMBUSTIBLE }}
                                                </span>
                                            </p>
                                        </div>
                                        <!-- Parte derecha -->
                                        <div class="items-center m-8">
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                            Tipo Doc. Propietario:
                                                <span class="font-bold">
                                                    {{ items.TIPO_DOC_PROPIETARIO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                            CIP Propietario:
                                                <span class="font-bold">
                                                    {{ items.CIP_PROPIETARIO }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                            Nombre Completo:
                                                <span class="font-bold">
                                                    {{ items.NOMBRE_COMPLETO }}
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
                                            Dirección:
                                                <span class="font-bold">
                                                    {{ items.DIRECCION }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                            Tel. 1:
                                                <span class="font-bold">
                                                    {{ items.TEL1 }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                            Tel. 2:
                                                <span class="font-bold">
                                                    {{ items.TEL2 }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                            Tel. 3:
                                                <span class="font-bold">
                                                    {{ items.TEL3 }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                            Tel. 4:
                                                <span class="font-bold">
                                                    {{ items.TEL4 }}
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
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <Pagination :pagination="dato43"></Pagination>
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
        dato43: Object,
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
