<script setup lang="ts">
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
    href: string;
    active?: boolean;
}>();

const classes = computed(() =>
    props.active
        ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-amber-400 text-start text-base font-medium text-amber-700  focus:outline-none focus:text-amber-800 focus:border-amber-700 transition duration-150 ease-in-out'
        : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-amber-600 hover:text-amber-800  hover:border-gray-300 focus:outline-none focus:text-amber-800 focus:border-gray-300 transition duration-150 ease-in-out',
);
</script>

<template>
    <Link :href="href" :class="classes">
    <slot />
    </Link>
</template>
