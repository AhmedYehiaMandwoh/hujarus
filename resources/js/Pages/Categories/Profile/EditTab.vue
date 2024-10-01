<template>
    <ElContainer>
        <CategoriesFormCreateUpdate :form-data="data.form_data" :row="data.row"/>
    </ElContainer>
</template>

<script setup>
import CategoriesFormCreateUpdate from "@/Pages/Categories/CategoriesFormCreateUpdate.vue";
import ElContainer from "@/Components/Card/ElContainer.vue";

const props = defineProps(['data']);
</script>
