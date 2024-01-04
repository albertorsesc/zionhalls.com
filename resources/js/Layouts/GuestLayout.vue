<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <Head :title="title" />

        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a :href="route('hall')">Zion Halls</a>
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <a :href="route('welcome')"
                                   :class="[
                                       route().current('welcome') ?
                                        'bg-gray-900 text-white' :
                                        'text-gray-300 hover:bg-gray-700 hover:text-white'
                                   ]"
                                   class="rounded-md px-3 py-2 text-sm font-medium"
                                >Home</a>
                                <a :href="route('hall')"
                                   :class="[
                                       route().current('hall') ?
                                        'bg-gray-900 text-white' :
                                        'text-gray-300 hover:bg-gray-700 hover:text-white'
                                   ]"
                                   class="rounded-md px-3 py-2 text-sm font-medium"
                                >Zion Halls</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex items-center">
                            <div class="relative ml-3">
                                <div v-if="! $page.props.auth.user.id">
                                    <a href="/register" class="rounded-md px-3 py-2 text-sm font-medium text-white">Register</a>
                                    <a href="/login" class="rounded-md px-3 py-2 text-sm font-medium text-white">Log in</a>
                                </div>
                                <div v-else>
                                    <a :href="route('dashboard')" class="rounded-md px-3 py-2 text-sm font-medium text-white">Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
                </div>
            </div>
        </nav>

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 bg-dots-darker bg-center dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
