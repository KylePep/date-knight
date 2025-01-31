<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps<{
    mustVerifyEmail?: boolean;
    status?: string;
}>();
</script>

<template>

    <Head title="Profile" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-400">
                Profile
            </h2>
        </template>

        <div class="py-12 px-4">
            <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                <div class='box'>
                    <div class='box-inner'>
                        <UpdateProfileInformationForm :must-verify-email="mustVerifyEmail" :status="status"
                            class="max-w-xl" />
                    </div>
                </div>
                <div class='box'>
                    <div class='box-inner'>
                        <UpdatePasswordForm class="max-w-xl" />
                    </div>
                </div>
                <div class='box'>
                    <div class='box-inner'>
                        <DeleteUserForm class="max-w-xl" />
                    </div>
                </div>


            </div>
        </div>
    </AuthenticatedLayout>
</template>
