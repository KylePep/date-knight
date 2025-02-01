<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>


<template>

  <Head title="Dates" />

  <AuthenticatedLayout>
    <template #header>
      <h2>
        Dates Show
      </h2>
    </template>


    <div class="flex flex-col h-full mx-auto max-w-7xl p-6 pb-24">
      <div class="grid grid-cols-3 gap-4">
        <div v-for="index in 12" class="bg-white rounded-lg min-h-32 px-2 py-1">
          <div class="flex justify-between">
            <div class="text-xs">
              <i class="mdi mdi-heart"></i>
              <i class="mdi mdi-heart"></i>
              <i class="mdi mdi-heart"></i>
            </div>
            <i>Z</i>
          </div>
          <p class="text-sm">Name</p>
          <div class="h-12 bg-black"></div>
          <div class="p-2 text-xs">Description</div>
          <div class="flex justify-between items-center ">
            <div class="flex">
              <div v-for="index in 3" :class="index < 3 ? 'bg-gray-600' : ''" class="h-4 w-4 border-2 border-black">
              </div>
            </div>
            <div>x/y</div>
          </div>
        </div>
      </div>
    </div>

    <div class="sticky bottom-0 w-full flex justify-center p-6 space-x-2 bg-black">
      <Link :href="route('date.create')" class="w-1/2 bg-white py-2 rounded text-center">
      Create Date
      </Link>
      <Link :href="route('dashboard')" class="w-1/2 bg-white py-2 rounded text-center">
      Cancel
      </Link>
    </div>
  </AuthenticatedLayout>
</template>


<style lang="scss" scoped></style>