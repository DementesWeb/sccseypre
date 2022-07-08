<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <pre>{{ user }}</pre>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import Pagination from '@/Shared/Pagination.vue';
    import Input from '@/Jetstream/Input.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
            AppLayout,
            Pagination,
            Input,
            Link,
        },
    data() {
        return {
            search: "",
        }
    },
    watch: {
        search($value) {
            this.$inertia.get('/securiy',
            {search : $value},
            {preserveState: true}
            )
        }
    },
    props: {
        user: Object,
        team: Object,
    }
}
</script>
