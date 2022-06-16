<template>
  <AppLayout title="Crear Clientes">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Editar Clientes
      </h2>
    </template>
    <h1 class="text-2xl text-center font-semibold">Editar Clientes</h1>
    <div class="max-w-1xl m-12 mx-auto bg-white p-16">
            <form @submit.prevent="update" >
              
            
            
        </form>
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
            <button @click="update" class="my-4 btn btn-blue">Editar</button>
            <span v-if="$page.props.user.current_team_id == 1">
                <button @click="destroy" class="my-4 ml-4 btn btn-red">Eliminar</button>
            </span>
           
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
        props:{
            customer: {
                type: Object,
                required: true,
            },
        
        
        },
        data() {
            return {
                form: this.customer,
            }
        },
        methods: {
            update() {
                this.$inertia.put(this.route('customers.update', this.customer), this.customer);
            },

            destroy() {
                this.$inertia.delete(this.route('customers.destroy', this.customer));
            }
        },
        
    }
</script>

<style>

</style>