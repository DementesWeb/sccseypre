<template>
  <AppLayout title="Crear Clientes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                CREAR CLIENTES
            </h2>
            <!-- component -->
            <!-- This is an example component -->
            
        </template>
        <h1 class="text-2xl mb-4 mt-2 text-center font-semibold leading-tight">Crear Clientes</h1>
        <div class="max-w-2xl mx-auto bg-white p-16">

                <form>
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <div>
                        <label for="nombre_y_apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombres y Apellidos</label>                        
                        <Input v-model="customer.nombre_y_apellido" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Rodriguez" required />
                    </div>
                    <div>
                        <label for="cedula" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cédula</label>
                        <Input v-model="customer.cedula" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1-23-4567" required />
                    </div>
                    <div>
                        <label for="cargo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cargo</label>
                        <Input v-model="customer.cargo" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Administrador" />
                    </div>
                </div>
                <dir class="grid gap-6 mb-6 lg:grid-cols-3">
                    <div>
                        <label for="sueldo" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">sueldo</label>
                        <Input v-model="customer.sueldo" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="850" />
                    </div>
                    <div>
                        <label for="subsueldo" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sobresueldo</label>
                        <Input v-model="customer.sobresueldo" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="300" />
                    </div>
                    <div>
                        <label for="visitors" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sueldo Neto</label>
                        <Input v-model="customer.sueldo_neto" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="122" />
                    </div>
                    <div class="mb-6">
                        <label for="35_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">35%</label>
                        <Input v-model="customer.v35_porciento" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="25_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">25%</label>
                        <Input v-model="customer.v25_porciento" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="20_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">20%</label>
                        <Input v-model="customer.v20_porciento" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="35_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">nombre de la institucion</label>
                        <Input v-model="customer.COD_1" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Banco, Empresa" />
                    </div> 
                    <div class="mb-6">
                        <label for="25_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300"> letra que paga</label>
                        <Input v-model="customer.DES_1" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="20_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">fecha de ese tramite</label>
                        <Input v-model="customer.FEC_1" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="35_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">nombre de la institucion</label>
                        <Input v-model="customer.COD_2" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Banco, Empresa" />
                    </div> 
                    <div class="mb-6">
                        <label for="25_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300"> letra que paga</label>
                        <Input v-model="customer.DES_2" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="20_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">fecha de ese tramite</label>
                        <Input v-model="customer.FEC_2" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="35_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">nombre de la institucion</label>
                        <Input v-model="customer.COD_3" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Banco, Empresa" />
                    </div> 
                    <div class="mb-6">
                        <label for="25_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300"> letra que paga</label>
                        <Input v-model="customer.DES_3" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="20_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">fecha de ese tramite</label>
                        <Input v-model="customer.FEC_3" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="35_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">nombre de la institucion</label>
                        <Input v-model="customer.COD_4" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Banco, Empresa" />
                    </div> 
                    <div class="mb-6">
                        <label for="25_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300"> letra que paga</label>
                        <Input v-model="customer.DES_4" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                    <div class="mb-6">
                        <label for="20_porciento" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">fecha de ese tramite</label>
                        <Input v-model="customer.FEC_4" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12" />
                    </div> 
                </dir>
                
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                    </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">Acepta los<a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Terminos y Condiciones</a>.</label>
                </div>
                <button @click="store" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
            </form>
            

            </div>
    </AppLayout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import Input from '@/Jetstream/Input.vue'
    export default {
        components: {
            AppLayout,
            Input
        },

        data() {
            return {
                customer: {
                    'nombre_y_apellido' : '', 
                    'cedula': '', 
                    'cargo': '', 
                    'sueldo': '', 
                    'sobresueldo': '', 
                    'sueldo_neto': '', 
                    'v35_porciento': '', 
                    'v25_porciento': '', 
                    'v20_porciento': '', 
                    'COD_1': '', 
                    'DES_1' : '', 
                    'FEC_1' : '', 
                    'COD_2' : '', 
                    'DES_2' : '', 
                    'FEC_2' : '', 
                    'COD_3' : '', 
                    'DES_3' : '', 
                    'FEC_3' : '', 
                    'COD_4' : '', 
                    'DES_4' : '', 
                    'FEC_4' : '', 
                    'COD_5' : '', 
                    'DES_5' : '', 
                    'FEC_5' : '', 
                    'COD_6' : '', 
                    'DES_6' : '', 
                    'FEC_6' : '', 
                    'COD_7' : '', 
                    'DES_7' : '', 
                    'FEC_7' : '', 
                    'COD_8' : '', 
                    'DES_8' : '', 
                    'FEC_8' : '', 
                    'COD_9' : '', 
                    'DES_9' : '', 
                    'FEC_9' : '', 
                    'COD_10': '', 
                    'DES_10': '', 
                    'FEC_10': '', 
                    'COD_11': '', 
                    'DES_11': '', 
                    'FEC_11': '', 
                    'COD_12': '', 
                    'DES_12': '', 
                    'FEC_12': '', 
                }
            }
            
        },
        methods: {
            store() {
                this.$inertia.post(this.route('customers,store'), this.customer)
            }
        }
    }
</script>

<style>

</style>