<template>
    <app-layout title="Buscar Cedula">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Buscar Cédula
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

        <!-- DATO 6 -->
        <Tabla-Dato-6 :ceddato6="ceddato6"></Tabla-Dato-6>
        <!--FIN DATO 6 -->

        <!--DATO 7 -->
        <Tabla-Dato-7 :ceddato7="ceddato7"></Tabla-Dato-7>
        <!--FIN DATO 7 -->

        <!--DATO 8 -->
        <Tabla-Dato-8 :ceddato8="ceddato8"></Tabla-Dato-8>
        <!--FIN DATO 8 -->

        <!--DATO 9 -->
        <Tabla-Dato-9 :ceddato9="ceddato9"></Tabla-Dato-9>
        <!--FIN DATO 9 -->

        <!-- CUSTOMER -->
        <Tabla-Customer :customer="customer"></Tabla-Customer>

        <div 
        v-if="ceddato1.total === 0 &&
            ceddato2.total === 0 &&
            ceddato3.total === 0 &&
            ceddato4.total === 0 &&
            ceddato5.total === 0 &&
            ceddato6.total === 0 &&
            ceddato7.total === 0 &&
            ceddato8.total === 0 && 
            ceddato9.total === 0 && 
            cedtelefono.total === 0 && 
            customer.total === 0"
        >
            <div class="flex justify-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                     Cédula: " {{search}} " sin registro en la Base de Datos.
                </h2>
            </div>
        </div>
        

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import TablaDato9 from "@/Components/TablaDato9.vue";
import TablaDato8 from "@/Components/TablaDato8.vue";
import TablaDato7 from "@/Components/TablaDato7.vue";
import TablaDato6 from "@/Components/TablaDato6.vue";
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
        TablaDato9,
        TablaDato8,
        TablaDato7,
        TablaDato6,
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
        ceddato6: Object,
        ceddato7: Object,
        ceddato8: Object,
        ceddato9: Object,
        filters: Object,
        customer: Object,
    },
};
</script>
