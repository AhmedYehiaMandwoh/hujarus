<template>
  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp">
    <div class="container">
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
        <h1 class="mb-5">Our Students Say!</h1>
      </div>
      <Carousel :items-to-show="itemsToShow">
        <Slide v-for="(testimonial, index) in testimonials" :key="index">
          <div class="testimonial-item text-center mx-2">
            <img
              class="border rounded-circle p-2 mx-auto mb-3"
              :src="testimonial.avatar_url"
              alt="testimonial avatar"
              style="width: 80px; height: 80px;"
            />
            <h5 class="mb-3">{{ testimonial.title }}</h5>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">{{ testimonial.description }}</p>
            </div>
          </div>
        </Slide>
        <template #addons>
          <pagination />
        </template>
      </Carousel>
    </div>
  </div>
  <!-- Testimonial End -->
</template>

<script>
import { defineComponent } from 'vue';
import { Carousel, Slide, Pagination } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';

export default defineComponent({
  name: 'Testimonials',
  props: {
    testimonials: {
      type: Array,
      required: true,  // Ensure that testimonials are passed to the component
    },
  },
  data() {
    return {
      itemsToShow: 3,  // Default is 3 items
    };
  },
  mounted() {
    this.updateItemsToShow();
    window.addEventListener('resize', this.updateItemsToShow);
  },
  beforeUnmount() {
    window.removeEventListener('resize', this.updateItemsToShow);
  },
  methods: {
    updateItemsToShow() {
      // Change the number of items based on screen width
      if (window.innerWidth <= 768) {
        this.itemsToShow = 1; // Show 1 item on mobile
      } else {
        this.itemsToShow = 3; // Default to 3 items on larger screens
      }
    }
  },
  components: {
    Carousel,
    Slide,
    Pagination
  }
});
</script>

<style scoped>
/* Add any scoped styles here */
</style>
