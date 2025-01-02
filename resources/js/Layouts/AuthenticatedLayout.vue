<script setup lang="ts">
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="min-h-screen flex flex-col background-image">
        <nav class="border-b-8 border-white">
            <!-- Primary Navigation Menu -->
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 justify-between">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex shrink-0 items-center">
                            <Link :href="route('dashboard')">
                            <div class=" relative text-center font-bold text-outline">
                                <span class="relative inset-0 font-cursive text-rose-500 text-2xl italic -me-2 z-10">
                                    Date
                                </span>
                                <span class="text-3xl text-zinc-400">
                                    Knight
                                </span>

                            </div>
                            </Link>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center ">
                        <button @click="
                            showingNavigationDropdown =
                            !showingNavigationDropdown
                            "
                            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out focus:text-gray-500 focus:outline-none">
                            <div class="h-10 w-10 border-2 mx-auto rounded-full" :style="{
                                backgroundImage: 'url(https://images.saymedia-content.com/.image/t_share/MTc2MjcyODU3Nzg4MDY0OTQx/why-vegeta-is-better-than-goku.jpg)',
                                backgroundSize: 'cover',
                                backgroundPosition: 'center',
                                backgroundRepeat: 'no-repeat'
                            }">

                            </div>
                            <!-- <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{
                                        hidden: showingNavigationDropdown,
                                        'inline-flex':
                                            !showingNavigationDropdown,
                                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{
                                        hidden: !showingNavigationDropdown,
                                        'inline-flex':
                                            showingNavigationDropdown,
                                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg> -->
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{
                block: showingNavigationDropdown,
                hidden: !showingNavigationDropdown,
            }" class="absolute background-image w-full z-20 shadow-xl">
                <div class="space-y-1 pb-3 pt-2">
                    <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                        Dashboard
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('dates.show')" :active="route().current('dates.show')">
                        Dates
                    </ResponsiveNavLink>
                </div>

                <!-- Responsive Settings Options -->
                <div class="border-t border-gray-400 pb-1 pt-4">
                    <div class="px-4">
                        <div class="text-base font-medium text-gray-400">
                            {{ $page.props.auth.user.name }}
                        </div>
                        <div class="text-sm font-medium text-gray-500">
                            {{ $page.props.auth.user.email }}
                        </div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <ResponsiveNavLink :href="route('profile.edit')">
                            Profile
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                            Log Out
                        </ResponsiveNavLink>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        <header v-if="$slots.header">
            <div
                class="mx-auto max-w-7xl  border-b-4 py-2 text-4xl font-semibold leading-tight text-gray-200 text-center">
                <slot name="header" />
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 bg-red-500">
            <slot />
        </main>
    </div>
</template>
