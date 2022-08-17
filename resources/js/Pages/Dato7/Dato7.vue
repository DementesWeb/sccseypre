<template>
    <app-layout title="Enero 2022">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Enero 2022
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

        <Tabla-Dato-7 :ceddato7="ceddato7"></Tabla-Dato-7>

        <div 
        v-if="ceddato7.total === 0"
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
import TablaDato7 from "@/Components/TablaDato7.vue";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaDato7,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/dato7",
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
        ceddato7: Object,
        filters: Object,
    },
};
</script>

