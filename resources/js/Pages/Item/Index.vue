<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

const { items } = defineProps({
    items: Object
});

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Index</h2>
        </template>
        <div class='py-12'>
            <div class='max-w-7xl mx-auto'>
                <Link :href="route('item.create')">Create</Link>
                <ul class='grid grid-cols-5'>
                    <li v-for='item in items' class='px-10 py-10'>
                        <Link :href="route('item.show', { id: item.id })" class='item[name]'>{{ item.name }}</Link>
                        <div class='item[profile]'>{{ item.profile }}</div>
                        <div class='item[seller]'>{{ item.user.name }}</div>
                        <div class='item[place_purchase]'>{{ item.place_purchace }}</div>
                    </li>
                </ul>
            </div>
        </div>
    </AuthenticatedLayout>
    
</template>
