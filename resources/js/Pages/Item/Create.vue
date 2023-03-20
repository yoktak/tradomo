<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: "",
    profile: "",
    images: ""
})

const { item } = defineProps({
    item: Object
});

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create</h2>
        </template>
        <div class='py-12'>
            <div class='max-w-7xl mx-auto'>
                <form @submit.prevent="form.post(route('item.store'))">
                    <div class='title'>
                        <h1>商品名</h1>
                        <input type='text' id='item_name' v-model='form.name'>
                    </div>
                    <div class='title'>
                        <h1>詳細</h1>
                        <input type='textarea' id='item_profile' v-model='form.profile'>
                    </div>
                    <div class='title'>
                        <h1>商品画像</h1>
                        <input type='text' id='item_images' v-model='form.images'>
                    </div>
                    <button type='submit' v-on:disabled="form.processing">Create</button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
    
</template>
