<template>
    <app-layout title="Menú Datos">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Menú Datos
            </h2>
        </template>
        <div
            class="grid md:grid-cols-4 lg:grid-cols-4 sm:grid-cols-1 gap-5 mx-5 my-10"
        >
            <Link
                :href="route('Telefono')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Tel Final
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato1')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Tigo 2023
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato2')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Cable Onda 2020
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato3')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Tribunales 1
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato4')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Tribunales 2
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato5')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Datos Junio 2022
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato6')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Naturgy
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato7')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Enero 2022
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato8')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Mayo 2022
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato9')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                IDAAN
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato10')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla IDAAN 2021
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato11')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla de Personal FIJO 2020
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato12')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla Diciembre 2020 IDAAN
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato13')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Banco Hipotecario Planilla
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato14')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Banco Desarrollo Agropecuario
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato15')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                ADM DIC 2020
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato16')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Doc Diciembre 2020
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato17')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Defensoria Canal de Panama
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato18')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                ASEP Planilla Enero 2020
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato19')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Envios WhatsOn por Segmentos
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato20')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Universidad Panama 2
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato21')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                INADEH Planilla
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato22')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla SENNIAF 2021
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato23')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Instituto Nacional de Cultura Planilla
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato24')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                ANATI Planilla Final
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato25')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato26')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                U de las Planillas
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato27')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla Enero 2021
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato28')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                IDIAP Planilla Abril 2019
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato29')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Transparencia Salario Enero 2021
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato30')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Personal de la CSS-asignado al ION Sep 2020
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato31')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                UDELAS
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato32')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla Alfabtica Septiembre 2020
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato33')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                UMIP Planilla Regular 2020
                <!-- <i classs="fa fa-angle-right"></i> -->
            </Link>
            <Link
                :href="route('Dato34')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla Lotería
            </Link>
            <Link
                :href="route('Dato35')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Universidad Tecnologica Planilla Transparencia Salario Enero
                2021
            </Link>
            <Link
                :href="route('Dato36')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Envios WhatsOn Segmentos

            </Link>
            <Link
                :href="route('Dato37')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla ACP-FN

            </Link>
            <Link
                :href="route('Dato38')"
                as="button"
                class="text-sm text-gray-700 btn btn-blue p-4"
            >
                Planilla ACP
            </Link>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import {Link} from "@inertiajs/inertia-vue3";

export default {
    components: {AppLayout, Link},
};
</script>
