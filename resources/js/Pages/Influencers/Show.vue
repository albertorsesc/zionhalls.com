<script setup lang="ts">
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {GlobeAltIcon, ArrowLeftIcon} from "@heroicons/vue/24/outline"
import {reactive} from "vue";
import {after} from "@/utils/str.class";
import SecondaryLink from "@/Components/SecondaryLink.vue";
import {PageProps} from "@/types/inertia";

interface Props {
    influencer: Influencer;
}

interface RS {
    tabs: 'profile' | 'content' | 'achievements'
}

const props = defineProps<Props>();

const state = reactive<RS>({
    tabs: 'profile'
})

const changeTab = (tab: 'profile' | 'content' | 'achievements') => {
    state.tabs = tab
}
</script>

<template>
    <GuestLayout title="Profile">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Profile
            </h2>
        </template>

        <div class="mx-auto max-w-3xl pb-12">
            <article>
                <!-- Profile header -->
                <div>
                    <div>
                        <img v-if="props.influencer.banner_image" class="h-32 w-full object-cover lg:h-48" :src="props.influencer.banner_image" alt="">
                        <img v-else class="h-32 w-full object-contain lg:h-48" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                        <div class="flex">
                            <img class="h-24 w-24 rounded-full ring-4 ring-gray-700 sm:h-32 sm:w-32"
                                 :src="props.influencer.profile_image"
                                 alt=""
                            />
                            <div class="mt-20 ml-3 min-w-0 flex-1 sm:block">
                                <h1 class="truncate text-2xl font-bold text-gray-300">
                                    {{ props.influencer.name }}
                                </h1>
                                <div class="mt-1 flex items-center space-x-2">
                                    <a href="https://x.com/Cobratate" class="truncate text-base font-bold text-gray-500 hover:text-gray-700">{{ props.influencer.x_handle }}</a>
                                    <div class="min-w-0 sm:flex items-center">
                                        <a :href="`https://twitter.com/${after(props.influencer.x_handle, '@')}`" target="_blank">
                                            <svg viewBox="0 0 24 24" aria-hidden="true" class="cursor-pointer h-5 w-5 rounded-full border border-gray-800 bg-gray-600 hover:bg-gray-700">
                                                <g><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></g>
                                            </svg>
                                        </a>
<!--                                        <a href="https://cobratate.com" target="_blank" class="ml-2">
                                            <GlobeAltIcon class="cursor-pointer h-6 w-6 text-gray-700 rounded-full"/>
                                        </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                            <div class="mt-3 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-x-4 sm:space-y-0">
<!--                                <button type="button" class="inline-flex justify-center gap-x-1.5 rounded-md bg-gray-700 px-3 py-2 text-sm font-semibold text-gray-400 shadow-sm ring-1 ring-inset ring-gray-500 hover:bg-gray-800">
                                    <svg class="-ml-0.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                        <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                    </svg>
                                    Follow
                                </button>-->
                                <SecondaryLink :href="($page.props as unknown as PageProps).ziggy.previous" class="inline-flex justify-center gap-x-1.5 rounded-md bg-gray-700 px-3 py-2 text-sm font-semibold text-gray-400 shadow-sm ring-1 ring-inset ring-gray-500 hover:bg-gray-800">
                                    <ArrowLeftIcon class="-ml-0.5 h-5 w-5 text-gray-400" />
                                    Back
                                </SecondaryLink>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tabs -->
                <div class="mt-8 sm:mt-2 2xl:mt-5">
                    <div class="border-b border-gray-800">
                        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
                            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                                <!-- Current: "border-pink-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                                <span @click="changeTab('profile')"
                                      :class="[state.tabs === 'profile' ? 'border-cyan-500 text-gray-300 font-bold' : 'border-transparent text-gray-500 font-medium hover:border-cyan-500 hover:text-gray-300']"
                                      class="whitespace-nowrap border-b-2 py-4 px-1 text-sm cursor-pointer"
                                      aria-current="page"
                                >Profile</span>
<!--                                <span @click="changeTab('content')"
                                      :class="[state.tabs === 'content' ? 'border-cyan-500 text-gray-300 font-bold' : 'border-transparent text-gray-500 font-medium hover:border-cyan-500 hover:text-gray-300']"
                                      class="whitespace-nowrap border-b-2 py-4 px-1 text-sm cursor-pointer"
                                      aria-current="page"
                                >Content</span>
                                <span @click="changeTab('achievements')"
                                      :class="[state.tabs === 'achievements' ? 'border-cyan-500 text-gray-300 font-bold' : 'border-transparent text-gray-500 font-medium hover:border-cyan-500 hover:text-gray-300']"
                                      class="whitespace-nowrap border-b-2 py-4 px-1 text-sm cursor-pointer"
                                      aria-current="page"
                                >Achievements</span>-->
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Description list -->
                <div v-if="state.tabs === 'profile'" class="mx-auto mt-6 max-w-5xl px-4 sm:px-6 lg:px-8">
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-3">
                        <div class="sm:col-span-3">
                            <dt class="text-sm font-medium text-gray-500">Quote</dt>
                            <dd class="mt-2 max-w-prose space-y-5 text-base text-gray-400 mr-20">
                                {{ props.influencer.quote }}
                            </dd>
                        </div>
                        <div class="sm:col-span-3">
                            <dt class="text-sm font-medium text-gray-500">Bio</dt>
                            <dd class="mt-2 max-w-prose space-y-5 text-sm text-gray-300">
<!--                                <div class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-8">
                                    <span class="inline-flex items-center rounded-full bg-slate-200 px-2 py-1 text-xs font-medium text-slate-600">Badge</span>
                                </div>-->
                                <p>{{ props.influencer.bio }}</p>
                            </dd>
                        </div>

                        <div v-if="props.influencer.known_as" class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Known as</dt>
                            <dd class="mt-1 text-sm text-gray-300">{{ props.influencer.known_as }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Location</dt>
                            <dd class="mt-1 text-sm text-gray-300">{{ props.influencer.country_location }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Origin</dt>
                            <dd class="mt-1 text-sm text-gray-300">{{ props.influencer.country_origin }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Raised</dt>
                            <dd class="mt-1 text-sm text-gray-300">{{ props.influencer.country_raised }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Estimated Net worth</dt>
                            <dd class="mt-1 text-sm text-gray-300">{{ props.influencer.estimated_networth }}</dd>
                        </div>
                    </dl>
                </div>

                <!-- Related list -->
                <div class="mx-auto mt-8 max-w-5xl px-4 pb-12 sm:px-6 lg:px-8 hidden">
                    <h2 class="text-sm font-medium text-gray-500">Related</h2>
                    <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-gray-700 px-3 py-w shadow-sm focus-within:ring-2 focus-within:ring-pink-500 focus-within:ring-offset-2 hover:border-gray-400">
                            <div class="flex-shrink-0">
                                <img class="h-16 w-16 rounded-lg" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="min-w-0 flex-1">
                                <a href="#" class="focus:outline-none">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    <p class="text-sm font-medium text-gray-300">Leslie Alexander</p>
                                    <p class="truncate text-sm text-gray-400">Co-Founder / CEO</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </GuestLayout>
</template>

<style scoped>

</style>
