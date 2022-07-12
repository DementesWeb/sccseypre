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

                        <div class="py-4 px-6 flex items-center">
                            <Input v-model="search" type="text" class="flex-1" placeholder="Digitar Cédula Ej:'1-234-567'"/>
                            <Link :href="route('security.create')" class="flex-shrink-0 ml-4 btn btn-blue">Nuevo</Link>
                        </div>    
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all" class="sr-only">checkbox</label>
                                        </div>
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
                                    
                                    <th scope="col" class="p-4">
                                        <span class="sr-only">

                                            <i class="fa fa-circle-chevron-right"></i>

                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr v-for="users in user.data" :key="users.id" class="hover:bg-gray-100 dark:hover:bg-gray-700">                                    
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{users.id}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{users.name}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{users.email}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{users.current_team_id}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">                                        
                                        <Link :href="route('security.edit', users.id)">
                                            <i class="fa fa-angle-right"></i>
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <Pagination :pagination="user"></Pagination>


                    </div>
                </div>
            </div>
        </div><!-- fin -->
        </div>
    </AppLayout>
</template>

<script>
    import { defineComponent } from 'vue';
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
            user: Object,
        },
        data() {
            return {
                search: "",
            }
        },
        watch: {
            search($value) {
                this.$inertia.get('/securiy',
                {search : $value},
                {preserveState: true}
                )
            }
        },
    };
</script>