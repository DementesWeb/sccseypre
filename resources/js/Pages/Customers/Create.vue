<template>
  <AppLayout title="Crear Clientes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                CREAR CLIENTES
            </h2> 
        </template>
        <!-- component -->
        <!--Customers Form  -->
        <h1 class="text-2xl text-center pt-6 font-semibold leading-tight">Crear Clientes</h1>
        <div class="max-w-1xl m-12 mx-auto bg-white p-16">
            <form @submit.prevent="store">
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <jet-validation-errors />
                <div>
                    <label class="block m-2 form-label">Nombre y Apellidos</label>
                    <Input v-model="customer.nombre_y_apellido" type="text" class="w-full form-input" placeholder="John Rodriguez" />
                </div>
                <div>
                    <label class="block m-2 form-label">Cédula</label>
                    <Input v-model="customer.cedula" type="text" class="w-full form-input" placeholder="1-23-456" />
                </div>

                <div>
                    <label class="block m-2 form-label">Cargo</label>
                    <Input v-model="customer.cargo" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                
            </div>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                 <div>
                    <label class="block m-2 form-label">Sueldo</label>
                    <Input v-model="customer.sueldo" type="text" class="w-full form-input" placeholder="Ej:1600" />
                </div>
                <div>
                    <label class="block m-2 form-label">Sobresueldo</label>
                    <Input v-model="customer.sobresueldo" type="text" class="w-full form-input" placeholder="Ej:600'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Sueldo Neto</label>
                    <Input v-model="customer.sueldo_neto" type="text" class="w-full form-input" placeholder="Ej:2300" />
                </div>
            </div>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                 <div>
                    <label class="block m-2 form-label">30%</label>
                    <Input v-model="customer.v35_porciento" type="text" class="w-full form-input" placeholder="Ej:300" />
                </div>
                <div>
                    <label class="block m-2 form-label">25%</label>
                    <Input v-model="customer.v25_porciento" type="text" class="w-full form-input" placeholder="Ej:100" />
                </div>
                <div>
                    <label class="block m-2 form-label">20%</label>
                    <Input v-model="customer.v20_porciento" type="text" class="w-full form-input" placeholder="Ej:20" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 1</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_1" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_1" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_1" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 2</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_2" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_2" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_2" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 3</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_3" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_3" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_3" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 4</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_4" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_4" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_4" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 5</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_5" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_5" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_5" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 6</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_6" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_6" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_6" type="date" class="w-full form-input" />
                </div>
            </div>          
            <h3 class="py-2">Deuda Activa 7</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_7" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_7" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_7" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 8</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_8" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_8" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_8" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 9</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_9" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_9" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_9" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 10</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_10" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_10" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_10" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 11</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_11" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_11" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_11" type="date" class="w-full form-input" />
                </div>
            </div>
            <h3 class="py-2">Deuda Activa 12</h3>
            <div class="grid gap-6 mb-6 lg:grid-cols-3">
                
                 <div>
                    <label class="block m-2 form-label">Institución</label>
                    <Input v-model="customer.COD_12" type="text" class="w-full form-input" placeholder="'Banesco', 'Scotiabank'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Letra - Pago</label>
                    <Input v-model="customer.DES_12" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <div>
                    <label class="block m-2 form-label">Fecha</label>
                    <Input v-model="customer.FEC_12" type="date" class="w-full form-input" />
                </div>
            </div>          
            
            <button class="btn btn-blue">Crear</button>
        </form>
        </div>

    </AppLayout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import Input from '@/Jetstream/Input.vue';
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue';
    export default {
        components: {
            AppLayout,
            Input,
            JetValidationErrors,
        },

        data() {
            return {
                customer: {
                    'nombre_y_apellido': '', 
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
                this.$inertia.post(this.route('customers.store'), this.customer);
            }
        },
    }
</script>

<style>

</style>