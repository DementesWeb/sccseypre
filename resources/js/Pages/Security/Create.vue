<template>
  <AppLayout title="Crear Usuarios">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                CREAR Usuarios
            </h2> 
        </template>
        <!-- component -->
        <!--Users Form  -->
        <h1 class="text-2xl text-center pt-6 font-semibold leading-tight">Crear Usuarios</h1>
        <div class="max-w-1xl m-12 mx-auto bg-white p-16">
            <form @submit.prevent="store">
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <jet-validation-errors />
                <div>
                    <label class="block m-2 form-label">Nombre y Apellidos</label>
                    <Input v-model="user.name" type="text" class="w-full form-input" placeholder="John Rodriguez" />
                </div>
                <div>
                    <label class="block m-2 form-label">Correo Eletrónico</label>
                    <Input v-model="user.email" type="email" class="w-full form-input" placeholder="pepito@perez.com" />
                </div>

                <div>
                    <label class="block m-2 form-label">Tipo de usuario</label>
                    <!-- <Input v-model="user.current_team_id" type="text" class="w-full form-input" placeholder="'Admin', 'Acesor'" /> -->
                    <select v-model="user.current_team_id">
                        <option disabled value="">Seleccione un elemento</option>
                        <option value="1">Administrador</option>
                        <option value="2">Asesor</option>
                    </select>
                    
                </div>
                
                <div>
                    <label class="block m-2 form-label">Contraseña</label>
                    <Input v-model="user.password" type="pass" class="w-full form-input" placeholder="Ej:Abri@l2022" />
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
                user: {
                    'name': '',
                    'email': '', 
                    'password': '', 
                    'current_team_id': '', 
                }
            }            
        },
        methods: {
            store() {
                this.$inertia.post(this.route('security.store'), this.user);
            }
        },
    }
</script>

<style>

</style>