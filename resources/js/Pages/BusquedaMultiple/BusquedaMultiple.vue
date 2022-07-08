<template>
    <app-layout title="Búsqueda Múltiple">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Búsqueda Múltiple
            </h2>
        </template>
        <div class="container py-6 max-w-7xl mx-auto  my-4 px-4 sm:px-6 lg:px-8">
            <Input
                type="text"
                class="form-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                v-model="search"
                placeholder="Buscar Cédulas: Pégalas separadas por espacios"
            />
            
        </div>

        <Tabla-Telefono :cedtelefono="cedtelefono"></Tabla-Telefono>


        <!-- DATO 3 -->
        <Tabla-Dato-3 :ceddato3="ceddato3"></Tabla-Dato-3>
        <!-- FIN DATO 3 -->

        <!-- DATO 4 -->
        <Tabla-Dato-4 :ceddato4="ceddato4"></Tabla-Dato-4>
        <!-- FIN DATO 4 -->

        <!-- DATO 5 -->
        <Tabla-Dato-5 :ceddato5="ceddato5"></Tabla-Dato-5>
        <!--FIN DATO 5 -->


    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import TablaDato5 from "@/Components/TablaDato5.vue";
import TablaDato4 from "@/Components/TablaDato4.vue";
import TablaDato3 from "@/Components/TablaDato3.vue";
import TablaTelefono from "@/Components/TablaTelefono.vue";
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        AppLayout,
        Input,
        Link,
        Pagination,
        TablaTelefono,
        TablaDato5,
        TablaDato4,
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
                "/BusquedaMultiple",
                {
                    search: $value.split(" "),
                },
                {
                    preserveState: true,
                }
            );
        },
        
    },

    props: {
        cedtelefono: Object,
        ceddato3: Object,
        ceddato4: Object,
        ceddato5: Object,
        filters: Object,
    },
    
};

</script>
