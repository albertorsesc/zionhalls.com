<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import InfluencerCard from "@/Components/Influencers/InfluencerCard.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import SecondaryLink from "@/Components/SecondaryLink.vue";

interface Props {
    influencers: Influencer[];
}

const props = defineProps<Props>();
</script>

<template>
    <AppLayout title="Manage Influencers">
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Influencers
                </h2>
                <SecondaryLink :href="route('influencers.create')">
                    Register Influencer
                </SecondaryLink>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto">
                <div>
                    <ul role="list" class="grid grid-cols-1 mx-8 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-12">
                        <li v-for="influencer in props.influencers" :key="influencer.id" class="relative">
                            <InfluencerCard :influencer="influencer" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
