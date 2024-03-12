<script setup lang="ts">
import SecondaryButton from "@/Components/SecondaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import {router, Link} from "@inertiajs/vue3";
import {reactive} from "vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";

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
    router.post(route('influencers.suggestions.store'), state);
};
</script>

<template>
    <GuestLayout title="Manage Influencers">
        <div class="py-12">
            <div class="max-w-7xl mx-auto">
                <form @submit.prevent="store" class="max-w-2xl mx-auto">
                    <div class="space-y-12">
                        <div class="border-b border-white/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-white">
                                Influencer Information
                            </h2>
                            <p class="mt-1 text-base leading-6 text-gray-300 border border-gray-500 rounded-xl px-3 py-2">
                                If you would like to be credited for this submission, please register for an account and submit your Influencer.
                            </p>
                            <p class="mt-3 text-sm leading-6 text-gray-400">
                                This information will be displayed publicly so be careful what you share. <br>
                                Let&apos;s please try to keep it professional and as accurate as possible.
                            </p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-6">
                                    <InputLabel for="x_handle" value="X Handle" />
                                    <div class="mt-2">
                                        <TextInput
                                            v-model="state.x_handle"
                                            id="x_handle"
                                            class="w-full"
                                            placeholder='e.g. "@Cobratate"'
                                        />
                                        <InputError :message="$page.props.errors.x_handle" class="mt-2" />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        You can submit an influencer by only their X Handle and we will try to fill the information for you.
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="name" value="Name" />
                                    <div class="mt-2">
                                        <TextInput
                                            v-model="state.name"
                                            id="name"
                                            class="w-full"
                                            placeholder="Andrew Tate"
                                        />
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="known_as" value="Known as" />
                                    <div class="mt-2">
                                        <TextInput
                                            v-model="state.known_as"
                                            id="known_as"
                                            class="w-full"
                                            placeholder="Top G"
                                        />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        How are they known as?
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="official_website" value="Official Website" />
                                    <div class="mt-2">
                                        <TextInput
                                            v-model="state.official_website"
                                            id="official_website"
                                            class="w-full"
                                            placeholder="cobratate.com"
                                        />
                                        <InputError :message="$page.props.errors.official_website" class="mt-2" />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        Link to their official website, if posted on their X Profile.
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="estimated_networth" value="Estimated Net worth" />
                                    <div class="mt-2">
                                        <TextInput
                                            v-model="state.estimated_networth"
                                            id="estimated_networth"
                                            class="w-full"
                                            placeholder="$1B"
                                        />
                                        <InputError :message="$page.props.errors.estimated_networth" class="mt-2" />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        Estimated Net worth in USD, if known.
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="quote" value="Quote" />
                                    <div class="mt-2">
                                        <TextInput
                                            v-model="state.quote"
                                            id="quote"
                                            class="w-full"
                                            placeholder='“My Unmatched Perspicacity Coupled With My Sheer Indefatigability...”'
                                        />
                                        <InputError :message="$page.props.errors.quote" class="mt-2" />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        A quote from this Influencer.
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="profile_image_url" value="Profile Image URL" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.profile_image" id="profile_image_url" class="w-full" />
                                        <InputError :message="$page.props.errors.profile_image" class="mt-2" />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        Link to their X Profile Image URL.
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <InputLabel for="banner_image_url" value="Banner Image URL" />
                                    <div class="mt-2">
                                        <TextInput v-model="state.banner_image" id="banner_image_url" class="w-full" />
                                        <InputError :message="$page.props.errors.banner_image" class="mt-2" />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        Link to their X Banner Image URL.
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="country_location" value="Country Location" />
                                    <div class="mt-2">
                                        <TextInput
                                            v-model="state.country_location"
                                            id="country_location"
                                            class="w-full"
                                            placeholder="e.g. US"
                                        />
                                        <InputError :message="$page.props.errors.country_location" class="mt-2" />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        2-letter country code, e.g. US
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="country_origin" value="Country Origin" />
                                    <div class="mt-2">
                                        <TextInput
                                            v-model="state.country_origin"
                                            id="country_origin"
                                            class="w-full"
                                            placeholder="e.g. US"
                                        />
                                        <InputError :message="$page.props.errors.country_origin" class="mt-2" />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        2-letter country code, e.g. US
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <InputLabel for="country_raised" value="Country Raised" />
                                    <div class="mt-2">
                                        <TextInput
                                            v-model="state.country_raised"
                                            id="country_raised"
                                            class="w-full"
                                            placeholder="e.g. US"
                                        />
                                        <InputError :message="$page.props.errors.country_raised" class="mt-2" />
                                    </div>
                                    <p class="mt-1 text-sm leading-6 text-gray-400">
                                        2-letter country code, e.g. US
                                    </p>
                                </div>

                                <div class="col-span-full">
                                    <InputLabel for="bio" value="Bio" />
                                    <div class="mt-2">
                                        <textarea v-model="state.bio"
                                                  id="bio"
                                                  rows="3"
                                                  class="block w-full rounded-md border-0 bg-gray-900 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                                        ></textarea>
                                        <InputError :message="$page.props.errors.bio" class="mt-2" />
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-400">Write a few sentences about this Influencer.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <Link :href="route('hall')" class="text-sm font-semibold leading-6 text-white">Cancel</Link>
                        <SecondaryButton type="submit">Suggest</SecondaryButton>
                    </div>
                </form>
            </div>
        </div>
    </GuestLayout>
</template>
