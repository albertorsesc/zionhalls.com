<script setup lang="ts">
import {Link, router} from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import {reactive} from "vue";
import InfluencerCard from "@/Components/Influencers/InfluencerCard.vue";
import Banner from "@/Components/Banner.vue";
import SecondaryLink from "@/Components/SecondaryLink.vue";

interface Props {
    influencers: Influencer[];
}

interface State {
    form: {
        handle: string;
    }
}

const props = defineProps<Props>();

const state = reactive<State>({
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
        <div class="sm:flex sm:justify-center sm:items-center">
            <div class="max-w-6xl mx-auto p-6">
                <div class="flex justify-end items-center">
                    <SecondaryLink :href="route('influencers.suggestions.create')">Submit an Influencer</SecondaryLink>
                </div>
                <div class="mt-8 lg:mt-20">
                    <ul role="list" class="grid grid-cols-1 mx-12 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-12">
                        <li v-for="influencer in influencers" :key="influencer.id" class="relative">
                            <InfluencerCard :influencer="influencer" />
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
