<template>
  <ElPanelCreate :is-transparent="false" v-if="$page.url === '/courses/create'" />
  <form @submit.prevent="submit()">
    <div class="grid md:grid-cols-2 gap-3 p-4">
      <div class="col-span-full w-[150px]">
        <AvatarInput :form="el_form" :old-image-preview="el_form.avatar_url" name="avatar" />
      </div>
      <floating-input required :form="el_form" name="title" />
      <floating-dropdown :form="el_form" name="category_id" :required="1" :options="categoriesDropdownOptions"
        :label="$t('base.categories')" />
      <floating-input required :form="el_form" name="price" type="number" :label="$t('base.price')" />
      <floating-input required :form="el_form" name="instructor" />
      <floating-input required :form="el_form" name="duration" />
      <floating-input :form="el_form" name="student_count" type="number" :label="$t('base.student_count')" />
    </div>
    <div class="grid md:grid-cols-1 gap-3 p-4">
      <!-- Replace the Editor with a Textarea -->
      <textarea v-model="el_form.description" class="w-full p-2 border border-gray-300 text-lg rounded"
        style="height: 350px;" placeholder="Enter course description here..."></textarea>

      <Editor api-key="q2jazfqzv1t24h74c89f9m6wow0egwnzjrzqivcjita5yt2t" :init="{
        toolbar_mode: 'sliding',
        plugins: [
          // Core editing features
          'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
          // Your account includes a free trial of TinyMCE premium features
          // Try the most popular premium features until Jan 21, 2025:
          'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
        ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
      }" :initial-value="el_form.description" />

      <floating-dropdown v-if="!is_create" :form="el_form" name="is_active" :required="1" :options="formData.is_active"
        :label="$t('base.is_active')" />
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
import { ref } from "vue";
import Editor from '@tinymce/tinymce-vue'

// Form data
const props = defineProps({
  categories: {
    type: Array,
    default: () => []
  },
  row: {
    type: Object,
    default: () => ({})
  },
  formData: {
    type: Object,
    default: () => ({})
  }
});

const is_create = !props.row.id;
const el_row = props.row;
const descriptionVal = ref(el_row.description || ''); // Bind initial description

const el_form = useForm({
  id: el_row.id,
  avatar: null,
  avatar_url: el_row.avatar_url ?? null,
  title: el_row.title ?? null,
  description: descriptionVal ?? null, // Bind initial description
  category_id: el_row.category_id ?? '',
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
      if (is_create) el_form.reset();
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

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  #sample {
    display: flex;
    flex-direction: column;
    place-items: center;
    width: 1000px;
  }
}
</style>
