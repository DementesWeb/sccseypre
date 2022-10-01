<template>
    <div v-if="dato21.total >= 1">
        <div class="flex justify-center">
            <div class="form-check form-switch">
                <label
                    class="form-check-label inline-block mx-4 text-gray-800"
                    for="flexSwitchCheckChecked"
                    >Cambiar Tipo de Vista:
                    <strong>INADEH Planilla</strong>
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
                                                    CONDICION DEL NOMBRAMIENTO
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
                                                    APELLIDO PATERNO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    APELLIDO MATERNO
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    APELLIDO DE CASADA
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    PRIMER NOMBRE
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    SEGUNDO NOMBRE
                                                </th>
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
                                                    CARGO REAL
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    GASTO DE REPRESENTACIÓN
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    SALARIO SEGUN PLANILLA
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    AREA
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                                >
                                                    FECHA DE INICIO
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
                                                v-for="items in dato21.data"
                                                :key="items.id"
                                                class="hover:bg-gray-100 dark:hover:bg-gray-700 dark:bg-gray-900"
                                            >
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                >
                                                    {{
                                                        items.CONDICION_DEL_NOMBRAMIENTO
                                                    }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                >
                                                    {{
                                                        items.SEXO
                                                    }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.APELLIDO_PATERNO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.APELLIDO_MATERNO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.APELLIDO_DE_CASADA }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.PRIMER_NOMBRE }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.SEGUNDO_NOMBRE }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.CEDULA }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.CARGO_REAL }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{
                                                        items.GASTO_DE_REPRESENTACION
                                                    }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{
                                                        items.SALARIO_SEGUN_PLANILLA
                                                    }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.AREA }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"
                                                >
                                                    {{ items.FECHA_DE_INICIO }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap"
                                                ></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <Pagination
                                        :pagination="dato21"
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
                            INADEH Planilla
                        </h2>
                        <!-- component -->
                        <div
                            class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                        >
                            <template
                                v-for="items in dato21.data"
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
                                            Condicion del Nombramiento:
                                            {{
                                                items.CONDICION_DEL_NOMBRAMIENTO
                                            }}
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
                                            Apellido Paterno:
                                                <span class="font-bold">
                                                    {{ items.SEXO }}
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
                                                Apellido Materno:
                                                <span class="font-bold">
                                                    {{ items.APELLIDO_DE_CASADA }}
                                                </span>
                                            </p>
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
                                          </div>
                                          <!-- Parte derecha -->
                                          <div class="items-center m-8">
                                          <p
                                              class="text-md text-gray-800 font-light"
                                          >
                                              Cedula:
                                              <span class="font-bold">
                                                  {{ items.CEDULA }}
                                              </span>
                                          </p>
                                          <p
                                              class="text-md text-gray-800 font-light"
                                          >
                                              Cargo Real:
                                              <span class="font-bold">
                                                  {{ items.CARGO_REAL }}
                                              </span>
                                          </p>
                                          <p
                                              class="text-md text-gray-800 font-light"
                                          >
                                              Gasto de Representación:
                                              <span class="font-bold">
                                                  {{
                                                      items.GASTO_DE_REPRESENTACION
                                                  }}
                                              </span>
                                          </p>
                                          <p
                                              class="text-md text-gray-800 font-light"
                                          >
                                              Salario Segun Planilla:
                                              <span class="font-bold">
                                                  {{
                                                      items.SALARIO_SEGUN_PLANILLA
                                                  }}
                                              </span>
                                          </p>
                                          <p
                                              class="text-md text-gray-800 font-light"
                                          >
                                              Area:
                                              <span class="font-bold">
                                                  {{ items.AREA }}
                                              </span>
                                          </p>
                                          <p
                                              class="text-md text-gray-800 font-light"
                                          >
                                              Fecha de Inicio:
                                              <span class="font-bold">
                                                  {{ items.FECHA_DE_INICIO }}
                                              </span>
                                          </p>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <Pagination :pagination="dato21"></Pagination>
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
        dato21: Object,
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

<style></style>
