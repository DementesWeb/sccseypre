<template>
    <div v-if="ceddato1.total>=1">
        <div class="flex justify-center">

            <div class="form-check form-switch">
                <label class="form-check-label inline-block mx-4 text-gray-800" for="flexSwitchCheckChecked">Cambiar Tipo de Vista:  <strong>Teléfonos 2</strong></label>
                <button class="ui btn-blue toggle" :class="{active:isActive}" @click="isActive = !isActive" >{{isActive ? 'Tarjeta' : 'Tabla'}}</button>
            </div>
        </div>

        <div v-if="isActive">
            <!-- Vista Tipo Tabla -->
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
                                                Nombre Cliente
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Suscriptor
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Barrio
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Celular
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Teléfono
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Email
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Email Cable
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Saldo Corriente
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Saldo 30
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Saldo 60
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Saldo 90
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Saldo 90 Más
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Estado
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Deuda Total
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Fecha Actualización
                                            </th>


                                            <th scope="col" class="p-4">
                                                <span class="sr-only">
                                                    <i class="fa fa-circle-chevron-right"></i>
                                                </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        <tr v-for="items in ceddato1.data" :key="items.id" class="hover:bg-gray-100 dark:hover:bg-gray-700 dark:bg-gray-900">
                                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.CEDULA}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.NOMBRE_CLIENTE}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.SUSCRIPTOR}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.BARRIO}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.CELULAR}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TELEFONO}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.EMAIL}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.EMAIL_CABLE}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.SALDOCORRIENTE}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.SALDO30}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.SALDO60}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.SALDO90}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.SALDO90MAS}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.ESTADO}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.DEUDATOTAL}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.FECHA_ACTUALIZACION}}</td>



                                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                <!-- <Link :href="route('customers.edit', items.id)">
                                                    <i class="fa fa-angle-right"></i>
                                                </Link> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <Pagination :pagination="ceddato1"></Pagination>

                            </div>
                        </div>
                    </div>
                </div><!-- fin -->
                </div>
            </div>
        </div>
        <div v-else>
            <!-- Vista Tipo Tarjeta -->
            <div class="container py-4 max-w-7xl mx-auto  my-4 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                        <h2 class="py-4 px-12 font-bold text-xl">Teléfonos 2</h2>
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
                                                Célular:
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
        ceddato1: Object,
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
