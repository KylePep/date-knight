<script setup lang="ts">
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Modal from "@/Components/Modal.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from "vue";

const confirmingAddPartner = ref(false);

const confirmAddPartner = () => {
    confirmingAddPartner.value = true;

    // nextTick(() => passwordInput.value?.focus());
};

const form = useForm({
    code: '',
});

const addPartner = () => {
    console.log('made it here')
    // form.delete(route('profile.destroy'), {
    //     preserveScroll: true,
    //     onSuccess: () => closeModal(),
    //     onError: () => passwordInput.value?.focus(),
    //     onFinish: () => {
    //         form.reset();
    //     },
    // });
};

const closeModal = () => {
    confirmingAddPartner.value = false;

    form.clearErrors();
    form.reset();
};

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
                    <Link :href="route('profile.edit')" class="flex">
                    <div class="h-24 w-24 border-4 mx-auto rounded-full" :style="{
                        backgroundImage: 'url(https://images.saymedia-content.com/.image/t_share/MTc2MjcyODU3Nzg4MDY0OTQx/why-vegeta-is-better-than-goku.jpg)',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center',
                        backgroundRepeat: 'no-repeat'
                    }">
                    </div>
                    </Link>

                </div>
                <div class="py-14 text-gray-400  space-y-10">
                    <h3 class="text-center">PARTNER</h3>
                    <div class="relative h-24 w-24 border-4 mx-auto rounded-full">
                        <i @click="confirmAddPartner"
                            class="absolute mdi mdi-plus text-6xl text-white left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 w-full flex justify-center pb-44">
            <Link :href="route('tiffle.index')" class="w-1/2 bg-white py-2 rounded text-center">
            Tiffle!
            </Link>
        </div>

        <div class="absolute bottom-0 w-full flex justify-center pb-20">
            <Link :href="route('date.create')" class="w-1/2 bg-white py-2 rounded text-center">
            Create Date
            </Link>
        </div>

    </AuthenticatedLayout>
    <Modal :show="confirmingAddPartner" @close="closeModal">
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900">
                Add a partner
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                input your desired partners join code.
            </p>

            <div class="mt-6">
                <InputLabel for="code" value="Code" class="sr-only" />

                <TextInput id="code" ref="codeInput" v-model="form.code" type="text" class="mt-1 block w-3/4"
                    placeholder="Partner Code" @keyup.enter="addPartner" />

                <InputError :message="form.errors.code" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <PrimaryButton class="ms-3" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                    @click="addPartner">
                    Add Partner
                </PrimaryButton>

                <SecondaryButton @click="closeModal">
                    Cancel
                </SecondaryButton>
            </div>
        </div>
    </Modal>
</template>
