<template>
  <AppLayout title="Crear Clientes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                CREAR CLIENTES
            </h2>
        </template>
        <h1 class="text-2xl text-center font-semibold leading-tight">Crear Clientes</h1>
    </AppLayout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    console.log('pintar Crear Clientes')
    export default {
        components: {
            AppLayout,
        },
    }
</script>

<style>

</style>