<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from '@/Components/TextInput.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link, useForm } from "@inertiajs/vue3";

const form = useForm({
  title: '',
  description: '',
  type: '',
})

</script>


<template>
  <div class="flex flex-col min-h-screen bg-black">
    <AuthenticatedLayout>
      <template #header>
        <h2>
          Dates Create
        </h2>
      </template>
    </AuthenticatedLayout>

    <div class="flex flex-col justify-between flex-1 bg-black">

      <div class="overflow-hidden grid grid-cols-2 text-3xl">
        <div class="flex flex-col justify-between text-gray-400 border-r-4 px-2">

          <div class="mt-2">
            <InputLabel for="title" value="Title" />

            <TextInput id="title" type="text" class="mt-1 block w-full" v-model="form.title" required
              autocomplete="current-title" />

            <InputError class="mt-2" :message="form.errors.title" />
          </div>

          <div class="mt-4 flex flex-col flex-1">
            <InputLabel for="description" value="Description" />

            <textarea id="description" type="description" class="h-full w-full rounded" />

            <InputError class="mt-2" :message="form.errors.description" />
          </div>

        </div>

        <div class="text-gray-400 px-2 flex flex-col justify-between space-y-2">

          <div class="mt-2 ">
            <div class="text-base">Icon</div>
            <div class="min-h-32 border-2 border-white flex items-center justify-center rounded">
              Icon
            </div>
          </div>


          <div class="flex gap-1">
            <div v-for="index in 5" class="h-8 w-full border border-white">

            </div>

          </div>

          <div class="flex items-center justify-between w-full bg-white px-1 rounded">
            <span class="text-gray-800 text-base">Color</span>
            <input type="color" id="color" class="me-2">
          </div>
        </div>
      </div>

      <div class="mx-2 space-y-4">

        <div class="flex justify-between items-center gap-4">
          <InputLabel for="type" value="Type" />

          <div class="w-full">
            <TextInput id="type" type="text" class="mt-1 block w-full" v-model="form.type" required
              autocomplete="current-type" />
            <InputError class="mt-2" :message="form.errors.type" />
          </div>

        </div>

        <div class="flex border-2 border-white">

          <div class="border-r-2 px-2 w-full text-center">
            <i v-for="index in 3" class="mdi mdi-heart text-white text-xl px-1"></i>
          </div>
          <div class="border-r-2 px-2 w-full text-center">
            <i v-for="index in 3" class="mdi mdi-currency-usd text-white text-xl px-1"></i>
          </div>
          <div class="border-r-2 px-2 w-full text-center">
            <i v-for="index in 3" class="mdi mdi-clock text-white text-xl px-1"></i>
          </div>

        </div>

        <div class="text-white text-xl">
          Cost: Z
        </div>

        <div class="grid grid-cols-3 text-white text-xl">
          <div class="">
            Movement
            <div class="flex">
              <div v-for="index in 3" :class="index < 3 ? 'bg-gray-600' : ''"
                class=" h-10 w-full border-2 border-white">
              </div>
            </div>
          </div>
          <div class="col-start-3">
            <div class="flex justify-center"><i class="mdi mdi-sword"></i> / <i class="mdi mdi-security"></i></div>
            <div class=" border-2 border-white text-center">
              x / y
            </div>
          </div>
        </div>

      </div>

      <div class="flex justify-end space-x-4 pb-4 mx-2">
        <PrimaryButton>Create</PrimaryButton>
        <Link :href="route('dashboard')" class="w-1/4 bg-white py-2 rounded text-center">
        Cancel
        </Link>
      </div>

    </div>
  </div>
</template>


<style scoped></style>