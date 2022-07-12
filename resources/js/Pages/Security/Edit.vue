<template>
  <AppLayout title="Editar Usuarios">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Editar Usuario
      </h2>
    </template>
    <h1 class="text-2xl text-center font-semibold pt-5">Modifica los permisos del Usuario</h1>
    <div class="max-w-1xl m-12 mx-auto bg-white p-16">
            <form @submit.prevent="update" >

        </form>
            <div class="grid gap-6 mb-6 lg:grid-cols-2">

                <jet-validation-errors />
                <div>
                    <label class="block m-2 form-label">Nombre y Apellidos</label>
                    <Input v-model="usuario.name" type="text" class="w-full form-input" placeholder="John Rodriguez" />
                </div>
                <div>
                    <label class="block m-2 form-label">Correo Electrónico</label>
                    <Input v-model="usuario.email" type="text" class="w-full form-input" placeholder="1-23-456" />
                </div>

                <div>
                    <label class="block m-2 form-label">Tipo de usuario</label>
                    <select v-model="usuario.current_team_id">
                        <option disabled value="">Seleccione un elemento</option>
                        <option value="1">Administrador</option>
                        <option value="2">Asesor</option>
                    </select>
                    
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
            usuario: {
                type: Object,
                required: true,
            },
        },
        data() {
            return {
                form: this.usuario,
            }
        },
        methods: {
            update() {
                this.$inertia.put(this.route('security.update', this.usuario), this.usuario);
                alert('Usuario Actualizado Exitosamente');
            },

            destroy() {
                this.$inertia.delete(this.route('security.destroy', this.usuario));
                alert('Usuario Eliminado Exitosamente');
            }
        },
    }
</script>

<style>

</style>