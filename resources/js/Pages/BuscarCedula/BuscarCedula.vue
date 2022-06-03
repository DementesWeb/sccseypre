<template>
    <app-layout title="Buscar Cedula">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Buscar Cedula
            </h2>
        </template>
        <div class="container py-6 max-w-7xl mx-auto  my-4 px-4 sm:px-6 lg:px-8">
            <Input
                type="text"
                class="form-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                v-model="search"
                placeholder="Buscar Cedula"
            />
        </div>

        <!-- Telefonos -->
        <Tabla-Telefono :cedtelefono="cedtelefono"></Tabla-Telefono>
        <!-- Fin Telefono -->

        <!-- Dato 1 -->
        <Tabla-Dato-1 :ceddato1="ceddato1"></Tabla-Dato-1> 
        <!-- Fin Dato 1 -->

        <!-- Dato 2 -->
        <Tabla-Dato-2 :ceddato2="ceddato2"></Tabla-Dato-2> 
        <!-- FIN DATO 2 -->

        <!-- DATO 3 -->
        <Tabla-Dato-3 :ceddato3="ceddato3"></Tabla-Dato-3> 
        <!-- FIN DATO 3 -->

        <!-- DATO 4 -->
        <Tabla-Dato-4 :ceddato4="ceddato4"></Tabla-Dato-4>        
        <!-- FIN DATO 4 -->

        <!-- DATO 5 -->
        <Tabla-Dato-5 :ceddato5="ceddato5"></Tabla-Dato-5>
        <!--FIN DATO 5 -->
        <!-- DATO 5 -->
        <Tabla-Customer :customer="customer"></Tabla-Customer>
        <!--FIN DATO 7 -->
        <Tabla-Dato-7 :ceddato7="ceddato7"></Tabla-Dato-7>
        <!--FIN DATO 7 -->
        <!--FIN DATO 8 -->
        <Tabla-Dato-8 :ceddato8="ceddato8"></Tabla-Dato-8>
        <!--FIN DATO 8 -->
        
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import TablaDato8 from "@/Components/TablaDato8.vue";
import TablaDato7 from "@/Components/TablaDato7.vue";
import TablaDato5 from "@/Components/TablaDato5.vue";
import TablaDato4 from "@/Components/TablaDato4.vue";
import TablaDato3 from "@/Components/TablaDato3.vue";
import TablaDato2 from "@/Components/TablaDato2.vue";
import TablaDato1 from "@/Components/TablaDato1.vue";
import TablaCustomer from "@/Components/TablaCustomer.vue";
import TablaTelefono from "@/Components/TablaTelefono.vue";

export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaTelefono,
        TablaDato8,
        TablaDato7,
        TablaDato5,
        TablaDato4,
        TablaDato3,
        TablaDato2,
        TablaDato1,
        TablaCustomer,
    },

    data() {
        return {
            search: "",
        };
    },

    watch: {
        search($value) {
            this.$inertia.get(
                "/buscarcedula",
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
        ceddato1: Object,
        ceddato2: Object,
        ceddato3: Object,
        ceddato4: Object,
        ceddato5: Object,
        ceddato7: Object,
        ceddato8: Object,
        filters: Object,
        customer: Object,
    },
};
</script>
