<template>
    <app-layout title="Tel Final">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tel Final
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

        <Tabla-Telefono :cedtelefono="cedtelefono"></Tabla-Telefono>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import TablaTelefono from "@/Components/TablaTelefono.vue";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaTelefono,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/telefono",
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
        cedtelefono: Object,
        filters: Object,
    },
};
</script>
