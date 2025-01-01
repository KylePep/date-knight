<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="background-image flex min-h-screen flex-col items-center ">

        <div>
            <Link href="/">
            <div class=" relative text-center font-bold text-outline mt-24">
                <span class="relative inset-0 font-cursive text-rose-500 text-5xl italic -me-4 z-10">
                    Date
                </span>
                <span class="text-6xl text-zinc-400">
                    Knight
                </span>

            </div>
            </Link>
        </div>

        <div class="mt-6 w-full overflow-hidden px-6 py-4 font-bold">
            <div class='box'>
                <div class='box-inner'>
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>