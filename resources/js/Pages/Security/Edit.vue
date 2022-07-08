<template>
  <AppLayout title="Editar Usuarios">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Editar Usuario
      </h2>
    </template>
    <h1 class="text-2xl text-center font-semibold">Editar Usuario</h1>
    <div class="max-w-1xl m-12 mx-auto bg-white p-16">
            <form @submit.prevent="update" >

        </form>
            <div class="grid gap-6 mb-6 lg:grid-cols-2">

                <jet-validation-errors />
                <div>
                    <label class="block m-2 form-label">Nombre y Apellidos</label>
                    <Input v-model="user.name" type="text" class="w-full form-input" placeholder="John Rodriguez" />
                </div>
                <div>
                    <label class="block m-2 form-label">Correo Electrónico</label>
                    <Input v-model="user.email" type="text" class="w-full form-input" placeholder="1-23-456" />
                </div>

                <div>
                    <label class="block m-2 form-label">Tipo De Usuario</label>
                    <Input v-model="user.current_team_id" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div>
                <!-- <div>
                    <label class="block m-2 form-label">Contraseña</label>
                    <Input v-model="user.password" type="text" class="w-full form-input" placeholder="'Medico', 'Abogado'" />
                </div> -->

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
            user: {
                type: Object,
                required: true,
            },
        },
        data() {
            return {
                form: this.user,
            }
        },
        methods: {
            update() {
                this.$inertia.put(this.route('security.update', this.user), this.user);
            },

            destroy() {
                this.$inertia.delete(this.route('security.destroy', this.user));
            }
        },
    }
</script>

<style>

</style>