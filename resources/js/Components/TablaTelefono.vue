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
                                            Cédula
                                            </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Primer Nombre
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Segundo Nombre
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Apellido Paterno
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Apellido Materno
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Apellido Casada
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 1
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 2
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 3
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 4
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 5
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 6
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 7
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 8
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 9
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 10
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 11
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 12
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 13
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 14
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Telefono 15
                                        </th>
                                        
                                        <th scope="col" class="p-4">
                                            <span class="sr-only">
                                                <i class="fa fa-circle-chevron-right"></i>    
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <tr v-for="items in cedtelefono.data" :key="items.id" class="hover:bg-gray-100 dark:hover:bg-gray-700 dark:bg-gray-900">
                                        <td class="p-4 w-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{items.CED}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.PRIMER_NOMBRE}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.SEGUNDO_NOMBRE}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.APELLIDO_PATERNO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.APELLIDO_MATERNO}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.APELLIDO_CASADA}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL1}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL2}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL3}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL4}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL5}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL6}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL7}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL8}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL9}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL10}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL11}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL12}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL13}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL14}}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{items.TEL15}}</td>
                            
                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">                                        
                                            <!-- <Link :href="route('customers.edit', items.id)">
                                                <i class="fa fa-angle-right"></i>
                                            </Link> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <Pagination :pagination="cedtelefono"></Pagination>
    
                        </div>
                    </div>
                </div>
            </div><!-- fin -->
            </div>
        </div>
    </div>
    <div v-else>
        <div class="container py-4 max-w-7xl mx-auto  my-4 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                    
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
    </div>

</template>

<script>
import Pagination from "@/Components/Pagination.vue";
export default {

    components: {
        Pagination,
    },
    props: {
        cedtelefono: Object,
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