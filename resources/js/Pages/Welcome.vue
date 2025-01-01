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
                    <span class="relative inset-0 font-cursive text-rose-500 text-7xl italic -me-6 z-10">
                        Date
                    </span>
                    <span class="text-8xl text-zinc-400">
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

<style scoped>
*:before,
*:after {
    box-sizing: border-box;
}

.box {
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate3d(-50%, 0%, 0);
    background-color: rgba(0, 0, 0, 0.5);
    width: 100%;
    max-width: 600px;
    padding: 5px;
    border: 2px solid #b78846;
    transition: background-color 300ms ease-in-out;
}

.box:hover {
    background-color: rgba(0, 0, 0, 0.75);
}

.box:before,
.box:after {
    content: "•";
    position: absolute;
    width: 14px;
    height: 14px;
    font-size: 14px;
    color: #b78846;
    border: 2px solid #b78846;
    line-height: 12px;
    top: 5px;
    text-align: center;
}

.box:before {
    left: 5px;
}

.box:after {
    right: 5px;
}

.box .box-inner {
    position: relative;
    border: 2px solid #b78846;
    padding: 10px 50px;
}

.box .box-inner:before,
.box .box-inner:after {
    content: "•";
    position: absolute;
    width: 14px;
    height: 14px;
    font-size: 14px;
    color: #b78846;
    border: 2px solid #b78846;
    line-height: 12px;
    bottom: -2px;
    text-align: center;
}

.box .box-inner:before {
    left: -2px;
}

.box .box-inner:after {
    right: -2px;
}

.background-image {
    background-color: rgb(37, 37, 97);
}

.text-outline {
    color: white;
    text-shadow:
        3px 3px 0 #000,
        -1px -1px 0 #000,
        1px -1px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000;
}
</style>
