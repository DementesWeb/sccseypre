<template>
    <app-layout title="Dato 7">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dato 9
            </h2>
        </template>

        <div class="container py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="m-2 bg-gray-200 sm:rounded-lg shadow-md">
                    <Input
                        type="text"
                        class="form-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        v-model="search"
                        placeholder="Buscar Cedula"
                    />

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
                                            Dirección:
                                            <span class="font-bold">
                                                {{ items.DIRECCION }}
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
                "/dato8",
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
        ceddato9: Object,
        filters: Object,
    },
};
</script>

