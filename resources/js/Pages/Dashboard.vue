<script setup lang="ts">
import AppLayout from '@/Layouts/AppLayout.vue';
import InfluencerCard from "@/Components/Influencers/InfluencerCard.vue";

interface Props {
    influencers: Influencer[];
}

const props = defineProps<Props>();
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mt-8 mb-6">
                        <ul role="list" class="grid grid-cols-1 mx-12 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-12">
                            <li v-for="influencer in props.influencers" :key="influencer.id" class="relative">
                                <InfluencerCard :influencer="influencer" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
