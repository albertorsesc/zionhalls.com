<script setup>
import {Head, Link, router} from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {reactive} from "vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

const state = reactive({
    form: {
        handle: ''
    }
});

const submitHandle = () => {
    router.post(route('influencers.store'), {
        handle: state.form.handle
    }, {
        onSuccess: () => {
            state.form.handle = '';
        }
    });
}
</script>

<template>
    <GuestLayout title="Zion Halls">

        <div class=" sm:flex sm:justify-center sm:items-center">
            <div class="max-w-6xl mx-auto p-6">
                <div class="flex mx-12 items-center">
                    <TextInput class="w-2/3 mr-8" placeholder="Submit an Influencer by it's X (twitter) handle" disabled/>
                    <a href="/login" class="underline text-indigo-500">You need to be a member</a>
                </div>

                <div class="mt-8 lg:mt-20">
                    <ul role="list" class="grid grid-cols-1 mx-12 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-12">
                        <li class="relative">
                            <Link :href="route('influencers.show')">
                                <div class="group block w-full overflow-hidden cursor-pointer rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                                    <img src="https://pbs.twimg.com/profile_images/1728837013023895552/nCHrdjlh_400x400.jpg"
                                         alt=""
                                         class="pointer-events-none object-cover group-hover:opacity-75 hover:cursor-pointer">
                                </div>
                                <p class="flex text-xl font-semibold leading-loose text-gray-500">
                                    Andrew Tate
                                </p>
                            </Link>
                        </li>
                        <li class="relative">
                            <div class="group block w-full overflow-hidden cursor-pointer rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                                <img src="https://pbs.twimg.com/profile_images/1540561709211033602/e3wWYJsp_400x400.jpg"
                                     alt=""
                                     class="pointer-events-none object-cover group-hover:opacity-75 hover:cursor-pointer">
                            </div>
                            <p class="flex text-xl font-semibold leading-loose text-gray-500">
                                Luke Belmar
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
