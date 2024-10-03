<template>
    <ElContainer>
        <TestimonialsFormCreateUpdate :form-data="data.form_data" :row="data.row"/>
    </ElContainer>
</template>

<script setup>
import TestimonialsFormCreateUpdate from "@/Pages/Testimonials/TestimonialsFormCreateUpdate.vue";
import ElContainer from "@/Components/Card/ElContainer.vue";

const props = defineProps(['data']);
</script>
