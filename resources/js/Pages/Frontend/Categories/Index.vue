<template lang="">
  <!-- Categories Start -->
  <div id="categories" class="container-xxl py-5">
      <div class="container">
          <div class="row g-4">
              <!-- Loop through the categories array and render each one -->
              <div 
                  v-for="(category, index) in categories" 
                  :key="category.id" 
                  class="col-lg-3 col-sm-6 wow fadeInUp" 
                  :data-wow-delay="`${0.1 * (index + 1)}s`"
              >
                  <div 
                      class="service-item text-center pt-3" 
                  >
                  <Link :href="`/categories-courses/${category.slug}`">
                      <div class="p-4">
                          <!-- Render icon dynamically -->
                          <i :class="`fa fa-3x ${category.icon} text-primary mb-4`"></i>
                          <!-- Render title and description dynamically -->
                          <h5 class="mb-3">{{ category.title }}</h5>
                          <p>{{ category.description }}</p>
                      </div>
                    </Link>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Categories End -->
</template>

<script>
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/vue3';
export default {
  props: {
      categories: {
          type: Array,
          required: true,  // Ensure that categories are passed to the component
      },
  },
  components: {
    Link
  },
}
</script>

<style>
.category-item {
  text-align: center;
}
</style>
