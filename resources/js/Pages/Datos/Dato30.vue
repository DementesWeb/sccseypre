<template>
    <app-layout title="Personal de la CSS-asignado al ION Sep 2020">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Personal de la CSS-asignado al ION Sep 2020
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
  
        <Tabla-Dato-30 :dato30="dato30"></Tabla-Dato-30>
  
        <div v-if="dato30.total === 0">
            <div class="flex justify-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    La Búsqueda: "{{ search }}" no se encontro en la base de
                    datos.
                </h2>
            </div>
        </div>

    </app-layout>
  </template>
  
  <script>
  import AppLayout from "@/Layouts/AppLayout.vue";
  import Input from "@/Jetstream/Input.vue";
  import Pagination from "@/Components/Pagination.vue";
  import TablaDato30 from "@/Components/TablaDato30.vue";
  
  export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaDato30,
    },
  
    data() {
        return {
            search: "",
        };
    },
  
    watch: {
        search($value) {
            this.$inertia.get(
                "/dato30",
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
        dato30: Object,
        filters: Object,
    },
  };
  </script>
  