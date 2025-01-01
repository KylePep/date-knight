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
    /* transition: background-color 300ms ease-in-out; */
}

/* .box:focus {
    background-color: rgba(0, 0, 0, 0.75);
} */

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
    padding: 20px;
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
