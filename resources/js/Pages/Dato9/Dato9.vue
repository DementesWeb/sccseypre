<template>
    <app-layout title="Dato 9">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dato 9
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

        <Tabla-Dato-9 :ceddato9="ceddato9"></Tabla-Dato-9>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import TablaDato9 from "@/Components/TablaDato9.vue";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaDato9,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/dato9",
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

