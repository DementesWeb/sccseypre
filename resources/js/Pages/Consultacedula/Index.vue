<template>
    <app-layout title="Consultar Cedula">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Consultar Cedula
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
                            v-for="items in cedulatelfinal.data"
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
                    <!-- <pre>{{ cedulatelfinal }}</pre> -->
                    <Pagination :pagination="cedulatelfinal"></Pagination>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import pickBy from "lodash/pickBy";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        pickBy,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/consultacedula",
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
        cedulatelfinal: Object,
        filters: Object,
    },
};
</script>
