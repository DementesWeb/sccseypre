<template>
    <app-layout title="Tigo 2021">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tigo 2021
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

        <Tabla-Dato-1 :ceddato1="ceddato1"></Tabla-Dato-1>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import TablaDato1 from "@/Components/TablaDato1.vue";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaDato1,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/dato1",
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
        ceddato1: Object,
        filters: Object,
    },
};
</script>

