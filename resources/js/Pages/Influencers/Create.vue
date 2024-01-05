<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import SecondaryLink from "@/Components/SecondaryLink.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import {router} from "@inertiajs/vue3";
import {reactive} from "vue";

interface ReactiveState {
    name: string;
    known_as: string;
    x_handle: string;
    official_website: string;
    quote: string;
    estimated_networth: string;
    profile_image: string;
    banner_image: string;
    country_location: string;
    country_origin: string;
    country_raised: string;
    bio: string;
}

const state = reactive<ReactiveState>({
    name: '',
    known_as: '',
    x_handle: '',
    official_website: '',
    quote: '',
    estimated_networth: '',
    profile_image: '',
    banner_image: '',
    country_location: '',
    country_origin: '',
    country_raised: '',
    bio: '',
});

const store = () => {
    router.post(route('influencers.store'), state);
};
</script>

<template>
    <AppLayout title="Manage Influencers">
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Register a new Influencer
                </h2>
                <SecondaryLink :href="route('influencers.index')">
                    Back to Influencers
                </SecondaryLink>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto">
                <form @submit.prevent="store" class="max-w-2xl mx-auto">
                    <div class="space-y-12">
                        <div class="border-b border-white/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-white">
                                Influencer Information
                            </h2>
                            <p class="mt-1 text-sm leading-6 text-gray-400">
                                This information will be displayed publicly so be careful what you share.
                            </p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="name" value="Name" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.name" id="name" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="known_as" value="Known as" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.known_as" id="known_as" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="x_handle" value="X Handle" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.x_handle" id="x_handle" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="official_website" value="Official Website" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.official_website" id="official_website" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="quote" value="Quote" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.quote" id="quote" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="estimated_networth" value="Estimated Net worth" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.estimated_networth" id="estimated_networth" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="profile_image_url" value="Profile Image URL" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.profile_image" id="profile_image_url" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="banner_image_url" value="Banner Image URL" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.banner_image" id="banner_image_url" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="country_location" value="Country Location" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.country_location" id="country_location" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="country_origin" value="Country Origin" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.country_origin" id="country_origin" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="country_raised" value="Country Raised" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.country_raised" id="country_raised" class="w-full" />
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <InputLabel for="bio" value="Bio" />
                                    <div class="mt-2">
                                        <textarea v-model="state.bio" id="bio" rows="3" class="block w-full rounded-md border-0 bg-gray-900 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-400">Write a few sentences about this Influencer.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-white">Cancel</button>
                        <SecondaryButton type="submit">Create</SecondaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
