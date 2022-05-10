<template>
    <app-layout title="Cedula Tigo">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tigo 2021
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
                            v-for="items in cedulatigo.data"
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
                                            Celular:
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
                    <Pagination :pagination="cedulatigo"></Pagination>
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
                "/tigo_2021",
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
        cedulatigo: Object,
        filters: Object,
    },
};
</script>
