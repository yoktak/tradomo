<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const { item } = defineProps({
    item: Object
});

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Show</h2>
        </template>
        <div class='py-12'>
            <div class='max-w-7xl mx-auto'>
                <div class='item[name]'>{{ item.name }}</div>
                <div class='item[profile]'>{{ item.profile }}</div>
                <div class='item[seller]'>{{ item.user.name }}</div>
                <div class='item[place_purchase]'>{{ item.place_purchace }}</div>
            </div>
        </div>
    </AuthenticatedLayout>
    
</template>
