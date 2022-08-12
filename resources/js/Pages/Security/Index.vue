<template>
    
    <AppLayout title="Configuración Usuarios">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard - Usuarios
            </h2>
        </template>

        <div class="max-w-1xl mx-auto">

        <div class="flex flex-col">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">

                        <div class="container mx-auto px-4">  
                            <div class="py-4 px-1 flex items-center">
                                <Input v-model="search" type="text" class="flex-1" placeholder="Digitar Cédula Ej:'1-234-567'"/>
                                <Link :href="route('security.create')" class="flex-shrink-0 ml-4 btn btn-blue">Nuevo</Link>
                            </div> 
                        <table class="min-w-full divide-y divide-gray-200 table-fixed justify-center dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        ID
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Nombre y Apellidos
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Correo Electrónico
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Tipo  de usuario
                                    </th>
                                    
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Editar
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr v-for="usuarios in usuario.data" :key="usuarios.id" class="hover:bg-gray-100 dark:hover:bg-gray-700">                                    
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{usuarios.id}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{usuarios.name}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{usuarios.email}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span v-if="usuarios.current_team_id == 1">
                                            Administrador
                                        </span>
                                        <span v-else-if="usuarios.current_team_id > 1">
                                            Asesor
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">                                        
                                        <Link :href="route('security.edit', usuarios.id)">
                                            <i class="fa fa-angle-right dark:text-white text-blue-600"></i>
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <Pagination :pagination="usuario"></Pagination>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- fin -->
        </div>
    </AppLayout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import Pagination from '@/Shared/Pagination.vue';
    import Input from '@/Jetstream/Input.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';


    export default{
        components:{
            Input,
            Link,
            Pagination,
            AppLayout,
        },
        props: {
            usuario: Object,
            filters: Object,
        },
        data() {
            return {
                search: "",
            }
        },
        watch: {
        search($value) {
            this.$inertia.get(
                "/security",
                {
                    search: $value,
                },
                {
                    preserveState: true,
                }
            );
        },
    },
    }
</script>