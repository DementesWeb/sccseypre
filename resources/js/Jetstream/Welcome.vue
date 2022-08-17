<template>
    <div>
        <div class="p-6 sm:px-20 bg-blue-900 border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl text-stone-50">
                Bienvenidos al Sistema de Consulta de Cédulas.
            </div>

            <div class="mt-6 text-stone-50">
                Aplicativo web destinado a la consulta de información de clientes para los asesores Call Center.
            </div>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="flex items-center">
                    <i class="fa fa-solid fa-id-card text-3xl text-blue-800"></i>
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Consulta Cédula</div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        <Link :href="route('BuscarCedula')" class="text-sm text-gray-700 underline">
                            Ir A Buscador >
                        </Link>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                <div class="flex items-center">
                    <i class="fa fa-solid fa-users text-3xl text-blue-800"></i>
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Cliente</div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        <Link :href="route('customers.index')" class="text-sm text-gray-700 underline">
                            Ver Cliente >
                        </Link>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200">
                <div class="flex items-center">
                    <i class="fa fa-solid fa-user-shield text-3xl text-blue-800"></i>
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Gestión de Usuarios</div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        <Link :href="route('security.index')" class="text-sm text-gray-700 underline pr-3">
                            Ver Usuarios >
                        </Link>
                        <Link :href="route('security.create')" class="text-sm text-gray-700 underline">
                            Crear Usuarios >
                        </Link>
                    </div>
                </div>
            </div>


        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3'

    export default defineComponent({
        components: {
            JetApplicationLogo,
            Link,
        },
    })
</script>
