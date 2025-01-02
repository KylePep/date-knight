<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
    laravelVersion: string;
    phpVersion: string;
}>();

</script>

<template>

    <Head title="Welcome" />
    <div class="background-image text-white">

        <div class="relative flex min-h-screen flex-col justify-start selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl mx-auto">


                <div class=" relative text-center font-bold text-outline mt-24">
                    <span class="relative inset-0 font-cursive text-rose-500 text-5xl italic -me-4 z-10">
                        Date
                    </span>
                    <span class="text-6xl text-zinc-400">
                        Knight
                    </span>

                </div>



                <div class="font-serif font-bold py-24">
                    <nav v-if="canLogin" class="flex flex-col justify-center items-center space-y-20 text-2xl">
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                            class="text-white transition hover:text-black/70">
                        <div class='box'>
                            <div class='box-inner'>
                                Dashboard
                            </div>
                        </div>
                        </Link>

                        <template v-else>
                            <Link :href="route('login')" class="text-white text-outline transition hover:text-black/70">
                            <div class='box'>
                                <div class='box-inner'>
                                    Log in
                                </div>
                            </div>
                            </Link>

                            <Link v-if="canRegister" :href="route('register')"
                                class="text-white text-outline transition hover:text-black/70">
                            <div class='box'>
                                <div class='box-inner'>
                                    Register
                                </div>
                            </div>
                            </Link>
                        </template>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</template>
