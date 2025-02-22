<template>
    <ElPanelCreate :is-transparent="false" v-if="$page.url == '/categories/create'" />
    <form @submit.prevent="submit()">
        <div class="grid md:grid-cols-2 mt-2 gap-3 p-4">
            <div class="col-span-full w-[150px]">
                <AvatarInput :form="el_form" :old-image-preview="el_form.avatar_url" name="avatar" />
            </div>
            <floating-input required :form="el_form" name="title"  />
            <floating-input required :form="el_form" name="slug" @input="updateSlug"/>
            <floating-input required :form="el_form" name="description" />


                <floating-dropdown 
                :form="el_form" 
                name="icon" 
                :required="1"
                :options="iconsDropdownOptions" 
                :label="$t('base.icons')" 
            />

            <floating-dropdown v-if="!is_create" :form="el_form" name="is_active" :required="1"
                :options="formData.is_active" :label="$t('base.is_active')" />

            <div class="">
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

// Form data
const props = defineProps({
    icons: {
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

const is_create = !props?.row?.id;
const el_row = props?.row;

const el_form = useForm({
    id: el_row?.id,
    avatar: null,
    avatar_url: el_row?.avatar_url ?? null,
    title: el_row?.title ?? null,
    slug: el_row?.slug ?? null,
    description: el_row?.description ?? null,
    icon: el_row?.icon ?? '', // Use icon from the row
    is_active: is_create ? true : el_row?.is_active,
});
console.log('formData.icons:', props.formData.icons);

// Method to update slug from title
const updateSlug = (event) => {
    const titleValue = event.target.value;
    // Replace spaces with dashes and convert to lowercase
    el_form.slug = titleValue.replace(/\s+/g, '-').toLowerCase();
}


// Prepare categories for the dropdown
let iconsDropdownOptions = [];
if (is_create) {
    iconsDropdownOptions = props.icons.map(icon => ({
        id: icon.id,
        name: icon.name,
    }));
} else {
    iconsDropdownOptions = Array.isArray(props.formData.icons)
        ? props.formData.icons.map(icon => ({
            id: icon.id,
            name: icon.name,
        }))
        : [];
}

// Submit the form
const submit = () => {
    
    el_form.post(is_create ? route('categories.store') : route('categories.update', el_form.id), {
        onSuccess: () => {
            is_create && el_form.reset();
        },
    });
}
</script>

<style>
.form-select {
    width: 100%;
    padding: 0.5rem;
    font-size: 1rem;
}
</style>
