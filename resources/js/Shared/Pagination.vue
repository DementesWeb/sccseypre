<template>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
    <div class="flex-1 flex justify-between sm:hidden">
        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </a>
        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </a>
    </div>
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
        <div>
        <p class="text-sm text-gray-700">
            Showing
            <span class="font-medium">1</span>
            to
            <span class="font-medium">10</span>
            of
            <span class="font-medium">97</span>
            results
        </p>
        </div>
        <div>
        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">

 
            <template v-for="(link ,key) in pagination.links" >
                <div :key="key" v-if="link.url == null" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50" v-html="link.label">

                </div >

                <Link :key="'link-' + key" 
                v-else :href="link.url" 
                class="relative inline-flex items-center px-4 py-2 border text-sm font-medium" 
                :class="link.active ? 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600':'bg-white border-gray-300 text-gray-500 hover:bg-gray-50'"
                v-html="link.label" />

            </template>
            <!--
            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <span class="sr-only">Previous</span> -->
            <!-- Heroicon name: solid/chevron-left -->
            <!-- <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            </a> -->
            
            
        </nav>
        </div>
    </div>
    </div>
    <pre>
        {{ pagination }}
    </pre>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
export default {
    components: {
        Head,
        Link,
    },
    props:{
        pagination: Object,
    }

}
</script>

<style>

</style>