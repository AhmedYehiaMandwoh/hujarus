<template>
    <ckeditor
      v-if="editor"
      v-model="data"
      :editor="editor"
      :config="config"
    />
  </template>
  
  <script setup>
  import { ref, computed, watchEffect } from 'vue';
  import { Ckeditor, useCKEditorCloud } from '@ckeditor/ckeditor5-vue';
  
  // Initialize CKEditor cloud service with premium version
  const cloud = useCKEditorCloud({
    version: '44.1.0',
    premium: true,  // Use premium version
  });
  
  const data = ref('<p>Hello world!</p>');  // Bound content to editor
  
  // Ref for holding the editor instance
  const editor = ref(null);
  
  // Watch for changes in cloud data and initialize the editor when ready
  watchEffect(() => {
    if (cloud.data.value) {
      editor.value = cloud.data.value.CKEditor.ClassicEditor;
    }
  });
  
  // Config for the CKEditor, including license and plugin settings
  const config = computed(() => {
    if (!cloud.data.value) {
      return {};  // Return empty config if cloud data is not available yet
    }
  
    const { Essentials, Paragraph, Bold, Italic } = cloud.data.value.CKEditor;
  
    return {
      licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjcwNTI3OTksImp0aSI6IjAyYTVmZmFiLTJhZmQtNDM5NC05MzE0LTg1MDdmYjk2ZWZkMSIsImxpY2Vuc2VkSG9zdHMiOlsiMTI3LjAuMC4xIiwibG9jYWxob3N0IiwiMTkyLjE2OC4qLioiLCIxMC4qLiouKiIsIjE3Mi4qLiouKiIsIioudGVzdCIsIioubG9jYWxob3N0IiwiKi5sb2NhbCJdLCJ1c2FnZUVuZHBvaW50IjoiaHR0cHM6Ly9wcm94eS1ldmVudC5ja2VkaXRvci5jb20iLCJkaXN0cmlidXRpb25DaGFubmVsIjpbImNsb3VkIiwiZHJ1cGFsIl0sImxpY2Vuc2VUeXBlIjoiZGV2ZWxvcG1lbnQiLCJmZWF0dXJlcyI6WyJEUlVQIl0sInZjIjoiYTBlMzFkNDgifQ.dBqeetLJESwDIBxXUlvsgiTGbRou9rXva0r6LOoHVkxZ1uwJvGRUOQqyKrrAbCkhSLtzAmZGPJTu1s4FZO251Q',
      plugins: [Essentials, Paragraph, Bold, Italic],  // List of CKEditor plugins
      toolbar: [
        'undo', 'redo', '|',
        'bold', 'italic', 'underline', 'strikethrough', '|',
        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
        'link', 'insertImage', 'imageUpload', 'insertVideo', 'mediaEmbed', '|',
        'bulletedList', 'numberedList', '|',
        'outdent', 'indent', '|',
        'alignment', 'blockQuote', 'horizontalLine', '|',
        'code', 'codeBlock', '|',
        'insertTable', 'tableColumn', 'tableRow', 'mergeTableCells', '|',
        'highlight', '|',
        'findAndReplace', 'selectAll', '|',
        'removeFormat', 'specialCharacters', '|',
        'fontSize', 'subscript', 'superscript', '|',
        'clearFormatting', 'copyFormatting', 'pasteFromWord', '|',
        'comment', 'revisionHistory'
      ]
    };
  });
  </script>
  