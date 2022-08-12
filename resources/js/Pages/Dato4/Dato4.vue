<template>
    <app-layout title="Fecha de Nacimiento 2">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Fecha de Nacimiento 2
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

        <Tabla-Dato-4 :ceddato4="ceddato4"></Tabla-Dato-4>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import TablaDato4 from "@/Components/TablaDato4.vue";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaDato4,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/dato4",
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
        ceddato4: Object,
        filters: Object,
    },
};
</script>

