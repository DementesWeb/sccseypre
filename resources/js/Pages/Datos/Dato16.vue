<template>
    <app-layout title="Doc Diciembre 2020">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Doc Diciembre 2020
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
  
        <Tabla-Dato-16 :dato16="dato16"></Tabla-Dato-16>
  
        <div v-if="dato16.total === 0">
            <div class="flex justify-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    La Búsqueda: "{{ search }}" no se encontro en la base de
                    datos.
                </h2>
            </div>
        </div>
  
        <!-- <pre>{{ dato16 }}</pre> -->
  
        
  
    </app-layout>
  </template>
  
  <script>
  import AppLayout from "@/Layouts/AppLayout.vue";
  import Input from "@/Jetstream/Input.vue";
  import Pagination from "@/Components/Pagination.vue";
  import TablaDato16 from "@/Components/TablaDato16.vue";
  
  export default {
  methods: {
  },
    components: {
        AppLayout,
        Input,
        Pagination,
        TablaDato16,
    },
  
    data() {
        return {
            search: "",
        };
    },
  
    watch: {
        search($value) {
            this.$inertia.get(
                "/dato16",
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
        dato16: Object,
        filters: Object,
    },
  };
  </script>
  