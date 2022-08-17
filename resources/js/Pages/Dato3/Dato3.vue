<template>
    <app-layout title="Padron 1">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Padron 1
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

        <Tabla-Dato-3 :ceddato3="ceddato3"></Tabla-Dato-3>

        <div 
        v-if="ceddato3.total === 0"
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
import TablaDato3 from "@/Components/TablaDato3.vue";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaDato3,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/dato3",
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
        ceddato3: Object,
        filters: Object,
    },
};
</script>

