<template>
    <ElRoute :ability="true" >
       
        <template #title> {{ model.parent_name }}</template>

    </ElRoute>
</template>

<script setup>
import ElRoute from "@/Components/ElRoutes/ElRoute.vue";

const props = defineProps({
    model: {type: Object, default: null},
})
</script>


<style scoped>

</style>
