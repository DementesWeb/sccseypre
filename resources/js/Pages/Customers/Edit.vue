<template>
  <AppLayout title="Crear Clientes">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Editar Clientes
      </h2>
    </template>
    <h1 class="text-2xl text-center font-semibold">Editar Clientes</h1>
    <pre>
        {{ customer }}
    </pre>
  </AppLayout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    console.log('pintar Editar Cleintes')
    export default {
        components: {
            AppLayout,
        },
        props:{
            customer: {
                type: Object,
                required: true,
            },
        }
    }
</script>

<style>

</style>