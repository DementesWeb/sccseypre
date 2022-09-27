<template>
    <app-layout title="ASEP Planilla Enero 2020">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                ASEP Planilla Enero 2020
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
  
        <Tabla-Dato-18 :dato18="dato18"></Tabla-Dato-18>
  
        <div v-if="dato18.total === 0">
            <div class="flex justify-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    La Búsqueda: "{{ search }}" no se encontro en la base de
                    datos.
                </h2>
            </div>
        </div>
  
        <!-- <pre>{{ dato18 }}</pre> -->
  
        
  
    </app-layout>
  </template>
  
  <script>
  import AppLayout from "@/Layouts/AppLayout.vue";
  import Input from "@/Jetstream/Input.vue";
  import Pagination from "@/Components/Pagination.vue";
  import TablaDato18 from "@/Components/TablaDato18.vue";
  
  export default {
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaDato18,
    },
  
    data() {
        return {
            search: "",
        };
    },
  
    watch: {
        search($value) {
            this.$inertia.get(
                "/dato18",
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
        dato18: Object,
        filters: Object,
    },
  };
  </script>
  