<template>
    <app-layout title="Buscar Cedula">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Buscar Cédula
            </h2>
        </template>
        <div class="container py-6 max-w-7xl mx-auto my-4 px-4 sm:px-6 lg:px-8">
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

        <!--DATO 10 -->
        <Tabla-Dato-10 :ceddato10="ceddato10"></Tabla-Dato-10>
        <!--FIN DATO 10 -->

        <!--DATO 11 -->
        <Tabla-Dato-11 :dato11="dato11"></Tabla-Dato-11>
        <!--FIN DATO 11 -->

        <!--DATO 12 -->
        <Tabla-Dato-12 :ceddato12="ceddato12"></Tabla-Dato-12>
        <!--FIN DATO 12 -->

        <!--DATO 13 -->
        <Tabla-Dato-13 :dato13="dato13"></Tabla-Dato-13>
        <!--FIN DATO 13 -->

        <!--DATO 14 -->
        <Tabla-Dato-14 :dato14="dato14"></Tabla-Dato-14>
        <!--FIN DATO 14 -->

        <!--DATO 15 -->
        <Tabla-Dato-15 :dato15="dato15"></Tabla-Dato-15>
        <!--FIN DATO 15 -->

        <!--DATO 16 -->
        <Tabla-Dato-16 :dato16="dato16"></Tabla-Dato-16>
        <!--FIN DATO 16 -->

        <!--DATO 17 -->
        <Tabla-Dato-17 :dato17="dato17"></Tabla-Dato-17>
        <!--FIN DATO 17 -->

        <!--DATO 18 -->
        <Tabla-Dato-18 :dato18="dato18"></Tabla-Dato-18>
        <!--FIN DATO 18 -->

        <!--DATO 19 -->
        <Tabla-Dato-19 :dato19="dato19"></Tabla-Dato-19>
        <!--FIN DATO 19 -->

        <!--DATO 20 -->
        <Tabla-Dato-20 :dato20="dato20"></Tabla-Dato-20>
        <!--FIN DATO 20 -->

        <!--DATO 21 -->
        <Tabla-Dato-21 :dato21="dato21"></Tabla-Dato-21>
        <!--FIN DATO 21 -->

        <!--DATO 22 -->
        <Tabla-Dato-22 :dato22="dato22"></Tabla-Dato-22>
        <!--FIN DATO 22 -->

        <!--DATO 23 -->
        <Tabla-Dato-23 :dato23="dato23"></Tabla-Dato-23>
        <!--FIN DATO 23 -->

        <!--DATO 24 -->
        <Tabla-Dato-24 :dato24="dato24"></Tabla-Dato-24>
        <!--FIN DATO 24 -->

        <!--DATO 25 -->
        <Tabla-Dato-25 :dato25="dato25"></Tabla-Dato-25>
        <!--FIN DATO 25 -->

        <!--DATO 26 -->
        <Tabla-Dato-26 :dato26="dato26"></Tabla-Dato-26>
        <!--FIN DATO 26 -->

        <!--DATO 27 -->
        <Tabla-Dato-27 :dato27="dato27"></Tabla-Dato-27>
        <!--FIN DATO 27 -->

        <!--DATO 28 -->
        <Tabla-Dato-28 :dato28="dato28"></Tabla-Dato-28>
        <!--FIN DATO 28 -->

        <!--DATO 29 -->
        <Tabla-Dato-29 :dato29="dato29"></Tabla-Dato-29>
        <!--FIN DATO 29 -->

        <!--DATO 30 -->
        <Tabla-Dato-30 :dato30="dato30"></Tabla-Dato-30>
        <!--FIN DATO 30 -->

        <!--DATO 31 -->
        <Tabla-Dato-31 :dato31="dato31"></Tabla-Dato-31>
        <!--FIN DATO 31 -->

        <!--DATO 32 -->
        <Tabla-Dato-32 :dato32="dato32"></Tabla-Dato-32>
        <!--FIN DATO 32 -->

        <!--DATO 33 -->
        <Tabla-Dato-33 :dato33="dato33"></Tabla-Dato-33>
        <!--FIN DATO 33 -->

        <!--DATO 34 -->
        <Tabla-Dato-34 :dato34="dato34"></Tabla-Dato-34>
        <!--FIN DATO 34 -->

        <!--DATO 35 -->
        <Tabla-Dato-35 :dato35="dato35"></Tabla-Dato-35>
        <!--FIN DATO 35 -->

        <!--DATO 36 -->
        <Tabla-Dato-36 :dato36="dato36"></Tabla-Dato-36>
        <!--FIN DATO 36 -->

        <!--DATO 37 -->
        <Tabla-Dato-37 :dato37="dato37"></Tabla-Dato-37>
        <!--FIN DATO 37 -->

        <!--DATO 39 -->
        <Tabla-Dato-39 :dato39="dato39"></Tabla-Dato-39>
        <!--FIN DATO 39 -->

        <!--DATO 40 -->
        <Tabla-Dato-40 :dato40="dato40"></Tabla-Dato-40>
        <!--FIN DATO 40 -->

        <!--DATO 41 -->
        <Tabla-Dato-41 :dato41="dato41"></Tabla-Dato-41>
        <!--FIN DATO 41 -->

        <!--DATO 42 -->
        <Tabla-Dato-42 :dato42="dato42"></Tabla-Dato-42>
        <!--FIN DATO 42 -->

        <!-- CUSTOMER -->
        <Tabla-Customer :customer="customer"></Tabla-Customer>

        <div
            v-if="
                ceddato1.total === 0 &&
                ceddato2.total === 0 &&
                ceddato3.total === 0 &&
                ceddato4.total === 0 &&
                ceddato5.total === 0 &&
                ceddato6.total === 0 &&
                ceddato7.total === 0 &&
                ceddato8.total === 0 &&
                ceddato9.total === 0 &&
                ceddato10.total === 0 &&
                dato11.total === 0 &&
                ceddato12.total === 0 &&
                dato13.total === 0 &&
                dato14.total === 0 &&
                dato15.total === 0 &&
                dato16.total === 0 &&
                dato17.total === 0 &&
                dato18.total === 0 &&
                dato19.total === 0 &&
                dato20.total === 0 &&
                dato21.total === 0 &&
                dato22.total === 0 &&
                dato23.total === 0 &&
                dato24.total === 0 &&
                dato25.total === 0 &&
                dato26.total === 0 &&
                dato27.total === 0 &&
                dato28.total === 0 &&
                dato29.total === 0 &&
                dato30.total === 0 &&
                dato31.total === 0 &&
                dato32.total === 0 &&
                dato33.total === 0 &&
                dato34.total === 0 &&
                dato35.total === 0 &&
                dato36.total === 0 &&
                dato37.total === 0 &&
                dato39.total === 0 &&
                dato40.total === 0 &&
                dato41.total === 0 &&
                dato42.total === 0 &&
                cedtelefono.total === 0 &&
                customer.total === 0
            "
        >
            <div class="flex justify-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Cédula: " {{ search }} " sin registro en la Base de Datos.
                </h2>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Input from "@/Jetstream/Input.vue";
import Pagination from "@/Components/Pagination.vue";
import TablaDato42 from "@/Components/TablaDato42.vue";
import TablaDato41 from "@/Components/TablaDato41.vue";
import TablaDato40 from "@/Components/TablaDato40.vue";
import TablaDato39 from "@/Components/TablaDato39.vue";
import TablaDato37 from "@/Components/TablaDato37.vue";
import TablaDato36 from "@/Components/TablaDato36.vue";
import TablaDato35 from "@/Components/TablaDato35.vue";
import TablaDato34 from "@/Components/TablaDato34.vue";
import TablaDato33 from "@/Components/TablaDato33.vue";
import TablaDato32 from "@/Components/TablaDato32.vue";
import TablaDato31 from "@/Components/TablaDato31.vue";
import TablaDato30 from "@/Components/TablaDato30.vue";
import TablaDato29 from "@/Components/TablaDato29.vue";
import TablaDato28 from "@/Components/TablaDato28.vue";
import TablaDato27 from "@/Components/TablaDato27.vue";
import TablaDato26 from "@/Components/TablaDato26.vue";
import TablaDato25 from "@/Components/TablaDato25.vue";
import TablaDato24 from "@/Components/TablaDato24.vue";
import TablaDato23 from "@/Components/TablaDato23.vue";
import TablaDato22 from "@/Components/TablaDato22.vue";
import TablaDato21 from "@/Components/TablaDato21.vue";
import TablaDato20 from "@/Components/TablaDato20.vue";
import TablaDato19 from "@/Components/TablaDato19.vue";
import TablaDato18 from "@/Components/TablaDato18.vue";
import TablaDato17 from "@/Components/TablaDato17.vue";
import TablaDato16 from "@/Components/TablaDato16.vue";
import TablaDato15 from "@/Components/TablaDato15.vue";
import TablaDato14 from "@/Components/TablaDato14.vue";
import TablaDato13 from "@/Components/TablaDato13.vue";
import TablaDato12 from "@/Components/TablaDato12.vue";
import TablaDato11 from "@/Components/TablaDato11.vue";
import TablaDato10 from "@/Components/TablaDato10.vue";
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
        TablaDato42,
        TablaDato41,
        TablaDato40,
        TablaDato39,
        TablaDato37,
        TablaDato36,
        TablaDato35,
        TablaDato34,
        TablaDato33,
        TablaDato32,
        TablaDato31,
        TablaDato30,
        TablaDato29,
        TablaDato28,
        TablaDato27,
        TablaDato26,
        TablaDato25,
        TablaDato24,
        TablaDato23,
        TablaDato22,
        TablaDato21,
        TablaDato20,
        TablaDato19,
        TablaDato18,
        TablaDato17,
        TablaDato16,
        TablaDato15,
        TablaDato14,
        TablaDato13,
        TablaDato12,
        TablaDato11,
        TablaDato10,
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
        ceddato10: Object,
        dato11:Object,
        ceddato12: Object,
        dato13: Object,
        dato14: Object,
        dato15: Object,
        dato16: Object,
        dato17: Object,
        dato18: Object,
        dato19: Object,
        dato20: Object,
        dato21: Object,
        dato22: Object,
        dato23: Object,
        dato24: Object,
        dato25: Object,
        dato26: Object,
        dato27: Object,
        dato28: Object,
        dato29: Object,
        dato30: Object,
        dato31: Object,
        dato32: Object,
        dato33: Object,
        dato34: Object,
        dato35: Object,
        dato36: Object,
        dato37: Object,
        dato39: Object,
        dato40: Object,
        dato42: Object,
        dato41: Object,
        filters: Object,
        customer: Object,
    },
};
</script>
