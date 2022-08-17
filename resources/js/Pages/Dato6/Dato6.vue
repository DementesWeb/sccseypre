<template>
    <app-layout title="Dato 6">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dato 6
            </h2>
        </template>
        <div class="container py-6 max-w-7xl mx-auto  my-4 px-4 sm:px-6 lg:px-8">
            <Input
                type="text"
                class="form-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                v-model="search"
                placeholder="Buscar Cédula"
            />
        </div>

        <Tabla-Dato-6 :ceddato6="ceddato6"></Tabla-Dato-6>

        <div 
        v-if="ceddato6.total === 0"
        >
            <div class="flex justify-center">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    La Cédula: "{{search}}" no se encontro en la base de datos.
                </h2>
            </div>
        </div>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import TablaDato6 from "@/Components/TablaDato6.vue";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaDato6,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/dato6",
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
        ceddato6: Object,
        filters: Object,
    },
};
</script>

