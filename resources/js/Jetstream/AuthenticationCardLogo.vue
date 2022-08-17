<template>
    <Link :href="'/'">
        <i class="fa fa-solid fa-user-circle text-9xl text-blue-800"></i>

    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
    })
</script>
