<template>
    <ElHeader>
        <template #header>
            <div class="flex">
                <AvatarProfile :label="usePage().props?.profile_row.title" :url="usePage().props?.profile_row.avatar_url"/>
                <aside>
                    <p class="font-bold text-xl">{{ usePage().props?.profile_row['title'] }}</p>
                </aside>
            </div>
        </template>
        <template #tabs>
            <Tabs :label="$t('base.main_data')"
                :href="route('categories.profile.main-data', usePage().props?.profile_row.id)" />
            <Tabs :label="$t('base.edit')"
                :href="route('categories.profile.edit', usePage().props?.profile_row.id)" />
        </template>
    </ElHeader>
</template>
<script setup>
import ElHeader from "@/Components/Profile/ElHeader.vue";
import Tabs from "@/Components/Profile/ElTabs.vue";
import { usePage } from "@inertiajs/vue3";
</script>
