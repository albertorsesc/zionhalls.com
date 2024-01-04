<script setup lang="ts">
import {Link} from "@inertiajs/vue3";

interface Props {
    influencer: Influencer;
}

const props = defineProps<Props>();
</script>

<template>
    <Link :href="route('influencers.show', influencer)">
        <div class="group block w-full overflow-hidden cursor-pointer rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
            <img :src="influencer.profile_image"
                 :alt="`${influencer.name}'s profile image`"
                 class="pointer-events-none object-cover group-hover:opacity-75 hover:cursor-pointer">
        </div>
        <p class="flex text-xl font-semibold leading-loose text-gray-500">
            {{ influencer.name }}
        </p>
    </Link>
</template>

<style scoped>

</style>
