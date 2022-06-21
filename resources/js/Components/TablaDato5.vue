<template>
    <div class="flex justify-center">
        <div class="form-check form-switch">
            <label class="form-check-label inline-block mx-4 text-gray-800" for="flexSwitchCheckChecked">Cambiar Tipo de Vista: <strong>Datos 5</strong> </label>
            <button class="ui btn-blue toggle" :class="{active:isActive}" @click="isActive = !isActive" >{{isActive ? 'Tarjeta' : 'Tabla'}}</button>

        </div>
    </div>

    <div v-if="isActive" >
        <div  class="max-w-7xl mx-auto  my-4 px-4 sm:px-6 lg:px-8">
            <div class="max-w-1xl mx-auto">

            <div class="flex flex-col">
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">

                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Cédula
                                            </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Nombre y Apellidos
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Sexo
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Seguridad Social
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Segundo PROV
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Planilla
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Posición
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Salario BR
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Salario Neto
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Departamento
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Ministerio
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 1
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 1
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 2
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 2
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 3
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 3
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 4
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 4
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 5
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 5
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 6
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 6
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 7
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 7
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 8
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 8
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 9
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 9
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 10
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 10
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Descuento Entidad 11
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Código Entidad 11
                                        </th>
                                        <th scope="col" class="p-4">
                                            <span class="sr-only">
                                                <i class="fa fa-circle-chevron-right"></i>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <tr v-for="items in ceddato5.data" :key="items.id" class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.CEDULA}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.NOMBRE}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.SEXO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.SEGSOC}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.PROV}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.PLANILLA}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.POSICION}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.SAL_BR}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.SAL_NETO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.DEP}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.MINI_DES}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_1}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_1}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_2}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_2}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_3}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_3}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_4}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_4}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_5}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_5}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_6}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_6}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_7}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_7}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_8}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_8}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_9}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_9}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_10}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_10}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$ {{items.DES_11}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.COD_11}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            <!-- <Link :href="route('customers.edit', items.id)">
                                                <i class="fa fa-angle-right"></i>
                                            </Link> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <Pagination :pagination="ceddato5"></Pagination>

                        </div>
                    </div>
                </div>
            </div><!-- fin -->
            </div>
        </div>
    </div>
    <div v-else>
        <div class="container py-6 max-w-7xl mx-auto  my-4 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">

                        <h2 class="py-4 px-12 font-bold text-xl">Dato 5</h2>
                        <!-- component -->
                        <div
                            class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                        >
                            <template
                                v-for="items in ceddato5.data"
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
                                                Nombre:
                                            <span class="font-bold">
                                                {{ items.NOMBRE }}
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
                                                     Seguridad Social:
                                                <span class="font-bold">
                                                    {{ items.SEGSOC }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                    Segundo PROV:
                                                <span class="font-bold">
                                                    {{ items.PROV }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Planilla:
                                                <span class="font-bold">
                                                    {{ items.PLANILLA }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Posición:
                                                <span class="font-bold">
                                                    {{ items.POSICION }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Salario BR:
                                                <span class="font-bold">
                                                    {{ items.SAL_BR }}
                                                </span>
                                            </p>
                                            <p
                                                class="text-md text-gray-800 font-light"
                                            >
                                                Salario Neto:
                                                <span class="font-bold">
                                                    {{ items.SAL_NETO }}
                                                </span>
                                            </p>
                                        </div>
                                        <!-- Parte derecha -->
                                        <div class="items-center m-8">
                                            <div class="flex md:col-start-2 col-span-11 xl:-ml-5 gap-2">
                                                <div class="flex-row space-x-1">
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Departamento:
                                                        <span class="font-bold">
                                                            {{ items.DEP }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Ministerio:
                                                        <span class="font-bold">
                                                            {{ items.MINI_DES }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_1 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_1 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_2 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_2 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_3 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_3 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_4 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_4 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_5 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_5 }}
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="flex-row ml-6 -space-x-1" >
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_6 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_6 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_7 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_7 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_8 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_8 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_9 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_9 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_10 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_10 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Descuento Entidad:
                                                        <span class="font-bold">
                                                            {{ items.DES_11 }}
                                                        </span>
                                                    </p>
                                                    <p
                                                        class="text-md text-gray-800 font-light"
                                                    >
                                                        Código Entidad:
                                                        <span class="font-bold">
                                                            {{ items.COD_11 }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </template>
                        </div>
                        <Pagination :pagination="ceddato5"></Pagination>
                    </div>
                </div>
        </div>
    </div>

</template>

<script>
import Pagination from "@/Components/Pagination.vue";
//import Switches from 'vue-switches/src/switches.vue';

export default {

    components: {
        Pagination,
        //Switches,
    },
    props: {
        ceddato5: Object,
        filters: Object,
    },
    data() {
        return {
            tipoVista: true,
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
}
</script>

<style>

</style>
