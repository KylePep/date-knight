<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2>
                Dashboard
            </h2>
        </template>

        <div class="flex flex-col h-full mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden grid grid-cols-2 text-3xl">
                <div class="py-14 text-gray-400 border-r-4 space-y-10">
                    <h3 class="text-center">USER</h3>
                    <div class="h-24 w-24 border-4 mx-auto rounded-full" :style="{
                        backgroundImage: 'url(https://images.saymedia-content.com/.image/t_share/MTc2MjcyODU3Nzg4MDY0OTQx/why-vegeta-is-better-than-goku.jpg)',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center',
                        backgroundRepeat: 'no-repeat'
                    }">

                    </div>
                </div>
                <div class="py-14 text-gray-400  space-y-10">
                    <h3 class="text-center">PARTNER</h3>
                    <div class="relative h-24 w-24 border-4 mx-auto rounded-full">
                        <i
                            class="absolute mdi mdi-plus text-6xl text-white left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 w-full flex justify-center pb-44">
            <button class="w-1/2 bg-white py-2 rounded">WAR!</button>
        </div>

        <div class="absolute bottom-0 w-full flex justify-center pb-20">
            <Link :href="route('dates.show')" class="w-1/2 bg-white py-2 rounded text-center">
            Create Date
            </Link>
        </div>

    </AuthenticatedLayout>
</template>
