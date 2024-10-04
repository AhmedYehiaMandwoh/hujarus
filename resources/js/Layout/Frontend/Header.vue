<template>
    <header>
      <meta charset="utf-8">
      <title> {{ pageTitle }} </title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="keywords" content="your, keywords, here">
      <meta name="description" content="your description here">
  
      <!-- Favicon -->
      <link href="/theme-front/img/favicon.ico" rel="icon">
  
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    </header>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  
  const pageTitle = ref('Hijrah Online Academy'); // Change this dynamically if needed
  
  onMounted(() => {
    // Dynamically set the document title
    document.title = pageTitle.value;
  });
  </script>
