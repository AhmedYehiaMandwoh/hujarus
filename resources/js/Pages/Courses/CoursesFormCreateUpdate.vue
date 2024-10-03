<template>
    <ElPanelCreate :is-transparent="false" v-if="$page.url == '/courses/create'" />
    <form @submit.prevent="submit()">
        <div class="grid md:grid-cols-2 gap-3 p-4">
            <div class="col-span-full w-[150px]">
                <AvatarInput :form="el_form" :old-image-preview="el_form.avatar_url" name="avatar" />
            </div>
            <floating-input required :form="el_form" name="title" />
            <floating-dropdown 
                :form="el_form" 
                name="category_id" 
                :required="1"
                :options="categoriesDropdownOptions" 
                :label="$t('base.categories')" 
            />
            <floating-input required :form="el_form" name="price" type="number" :label="$t('base.price')" />
            <floating-input required :form="el_form" name="instructor" />
            <floating-input required :form="el_form" name="duration" />
            <floating-input :form="el_form" name="student_count" type="number" :label="$t('base.student_count')" />
        </div>
        <div class="grid md:grid-cols-1 gap-3 p-4">
            <Editor v-model="el_form.description" editorStyle="height: 320px" />

            <floating-dropdown v-if="!is_create" :form="el_form" name="is_active" :required="1"
                :options="formData.is_active" :label="$t('base.is_active')" />

            <div>
                <submit-button :text="$t('base.save')" :form="el_form" />
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import FloatingInput from "@/Components/Form/FloatingInput.vue";
import SubmitButton from "@/Components/Buttons/SubmitButton.vue";
import route from "ziggy-js";
import AvatarInput from "@/Components/Form/AvatarInput.vue";
import FloatingDropdown from "@/Components/Form/FloatingDropdown.vue";
import ElPanelCreate from "@/Components/ElPanelCreate.vue";
import Editor from 'primevue/editor';

// Form data
const props = defineProps({
    categories: {
        type: Array,
        default: () => [] // Provide a default empty array
    },
    row: {
        type: Object, // Change to Object for better type matching
        default: () => ({})
    },
    formData: {
        type: Object,
        default: () => ({})
    }
});

const is_create = !props.row.id;
const el_row = props.row;

const el_form = useForm({
    id: el_row.id,
    avatar: null,
    avatar_url: el_row.avatar_url ?? null,
    title: el_row.title ?? null,
    description: el_row.description ?? null,
    category_id: el_row.category_id ?? '', // Get category_id from row data
    price: el_row.price ?? null,
    instructor: el_row.instructor ?? null,
    duration: el_row.duration ?? null,
    student_count: el_row.student_count ?? 0,
    is_active: is_create ? true : el_row.is_active,
});

// Prepare categories for the dropdown
let categoriesDropdownOptions = [];
if (is_create) {
    categoriesDropdownOptions = props.categories.map(category => ({
        id: category.id,
        name: category.title,
    }));
} else {
    categoriesDropdownOptions = Array.isArray(props.formData.categories)
        ? props.formData.categories.map(category => ({
            id: category.id,
            name: category.title,
        }))
        : [];
}

// Submit the form
const submit = () => {
    el_form.post(is_create ? route('courses.store') : route('courses.update', el_form.id), {
        onSuccess: () => {
            is_create && el_form.reset();
        },
    });
};
</script>

<style>
.form-select {
    width: 100%;
    padding: 0.5rem;
    font-size: 1rem;
}
</style>
