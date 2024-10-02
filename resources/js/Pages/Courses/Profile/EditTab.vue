<template>
    <ElContainer>
        <CoursesFormCreateUpdate :form-data="data.form_data" :row="data.row"/>
    </ElContainer>
</template>

<script setup>
import CoursesFormCreateUpdate from "@/Pages/Courses/CoursesFormCreateUpdate.vue";
import ElContainer from "@/Components/Card/ElContainer.vue";

const props = defineProps(['data']);
</script>
