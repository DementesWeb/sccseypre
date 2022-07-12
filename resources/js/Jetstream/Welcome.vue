<template>
    <div>
        <div class="p-6 sm:px-20 bg-blue-900 border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl text-stone-50">
                Bienvenido a SCCSEYPRE
            </div>

            <div class="mt-6 text-stone-50">
                Sistema de Consulta de Clientes SEYPRE.<br> Aplicativo Web destinado a la consulta de información de clientes para los asesores call center.
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

            <!-- <div class="p-6 border-t border-gray-200 md:border-l">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Informes</div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        Vista de Informes de Asesores.
                    </div>
                </div>
            </div> -->

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
