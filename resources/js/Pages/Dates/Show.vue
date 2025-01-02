<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>


<template>
  <AuthenticatedLayout>
    <template #header>
      <h2>
        Dates Show
      </h2>
    </template>

    <div class="absolute bottom-0 w-full flex justify-center pb-20">
      <Link :href="route('date.create')" class="w-1/2 bg-white py-2 rounded text-center">
      Create Date
      </Link>
    </div>
  </AuthenticatedLayout>
</template>


<style lang="scss" scoped></style>