<template>
    <div class="flex justify-center">
        <div class="form-check form-switch">
            <label class="form-check-label inline-block mx-4 text-gray-800" for="flexSwitchCheckChecked">Cambiar Tipo de Vista:  </label>
            <button class="ui btn-blue toggle" :class="{active:isActive}" @click="isActive = !isActive" >{{isActive ? 'Tarjeta' : 'Tabla'}}</button>
        </div>
    </div>

    <div v-if="isActive">

        <div  class="max-w-7xl mx-auto  my-4 px-4 sm:px-6 lg:px-8">
            <div class="max-w-1xl mx-auto">

            <div class="flex flex-col">
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            NOMBRE
                                            </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            PROVINCIA
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            DISTRITO
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CORREGIMIENTO
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            BARRIO
                                            </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            DIRECCION
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            TELEFONO FIJO
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CELULAR
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CORREO
                                            </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            ACTI_COMERCIAL
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            TIPO DOC
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CEDULA
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            SECTOR
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            NRO_CASA
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CEDULA
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CONDOMINIO
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            EDIFICIO
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            PISO
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            APTO
                                        </th>

                                        <th scope="col" class="p-4">
                                            <span class="sr-only">
                                                <i class="fa fa-circle-chevron-right"></i>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <tr v-for="items in ceddato9.data" :key="items.id" class="hover:bg-gray-100 dark:hover:bg-gray-700 dark:bg-gray-900">
                                        <td class="p-4 w-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.NOMBRE}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.DISTRITO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.CORREGIMIENTO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.BARRIO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.DIRECCION}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TELEFONO_FIJO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.CELULAR}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.CORREO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.ACTI_COMERCIAL}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TIPO_DOC}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.CEDULA}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.SECTOR}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.CALLE}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.NRO_CASA}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TIPO_DOC}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.CONDOMINIO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.EDIFICIO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.PISO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.APTO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            <!-- <Link :href="route('customers.edit', items.id)">
                                                <i class="fa fa-angle-right"></i>
                                            </Link> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <Pagination :pagination="ceddato9"></Pagination>
                        </div>
                    </div>
                </div>
            </div><!-- fin -->
            </div>
        </div>
    </div>
    <div v-else>

        <div class="container max-w-7xl mx-auto  my-4 px-4 sm:px-6 lg:px-8  py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                    <h2 class="py-4 px-12 font-bold text-xl">Dato 9</h2>
                    <!-- component -->
                    <div
                        class="bg-gray-200 flex w-full flex-col gap-4 mt-4 items-center justify-center"
                    >
                        <template
                            v-for="items in ceddato9.data"
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
                                        Nombre: {{ items.NOMBRE }}
                                    </p>
                                </div>
                                <!-- Description -->
                                <div
                                    class="flex flex-row md:col-start-2 col-span-11 xl:-ml-5 gap-2"
                                >
                                    <!-- Parte Izquierda -->
                                    <div class="items-center m-8">
                                        <p class="text-md text-gray-800 font-light">
                                            Provincia:
                                        <span class="font-bold">
                                            {{ items.PROVINCIA }}
                                        </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                                Distrito:
                                            <span class="font-bold">
                                                {{ items.DISTRITO }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Corregimiento:
                                            <span class="font-bold">
                                                {{ items.CORREGIMIENTO }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Barrio:
                                            <span class="font-bold">
                                                {{ items.BARRIO }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Telefono_Fijo:
                                            <span class="font-bold">
                                                {{ items.TELEFONO_FIJO }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Celular:
                                            <span class="font-bold">
                                                {{ items.CELULAR }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Correo:
                                            <span class="font-bold">
                                                {{ items.CORREO }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Acti Comercial:
                                            <span class="font-bold">
                                                {{ items.ACTI_COMERCIAL }}
                                            </span>
                                        </p>
                                    </div>
                                    <!-- Parte derecha -->
                                    <div class="items-center m-8">
                                        <p class="text-md text-gray-800 font-light">
                                            Tipo Documento:
                                        <span class="font-bold">
                                            {{ items.TIPO_DOC }}
                                        </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                                Cedula:
                                            <span class="font-bold">
                                                {{ items.CEDULA }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Sector:
                                            <span class="font-bold">
                                                {{ items.SECTOR }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Calle:
                                            <span class="font-bold">
                                                {{ items.CALLE }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Nro Casa:
                                            <span class="font-bold">
                                                {{ items.NRO_CASA }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Condominio:
                                            <span class="font-bold">
                                                {{ items.CONDOMINIO }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Edificio:
                                            <span class="font-bold">
                                                {{ items.EDIFICIO }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Piso:
                                            <span class="font-bold">
                                                {{ items.PISO }}
                                            </span>
                                        </p>
                                        <p class="text-md text-gray-800 font-light">
                                            Apartamento:
                                            <span class="font-bold">
                                                {{ items.APTO }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <Pagination :pagination="ceddato9"></Pagination>
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
        ceddato9: Object,
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
}
</script>
