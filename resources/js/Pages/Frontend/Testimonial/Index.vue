<template>
  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" >
    <div class="container">
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
        <h1 class="mb-5">Our Students Say!</h1>
      </div>
      <Carousel :items-to-show="3" >
        <Slide v-for="(testimonial, index) in testimonials" :key="index">
          <div class="testimonial-item text-center mx-2">
            <img
              class="border rounded-circle p-2 mx-auto mb-3"
              :src="testimonial.image"
              style="width: 80px; height: 80px;"
            />
            <h5 class="mb-3">{{ testimonial.name }}</h5>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">{{ testimonial.text }}</p>
            </div>
          </div>
        </Slide>
        <template #addons>
          <!-- <navigation /> -->
          <pagination />
        </template>
      </Carousel>
    </div>
  </div>
  <!-- Testimonial End -->
</template>

<script>
import { defineComponent } from 'vue';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';

export default defineComponent({
  name: 'Testimonials',
  components: {
      Carousel,
      Slide,
      Pagination,
      Navigation
    },
  data() {
    return {
      testimonials: [
        {
          image: '/theme-front/img/testimonial-1.jpg',
          name: 'Client Name 1',
          text: 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.',
        },
        {
          image: '/theme-front/img/testimonial-2.jpg',
          name: 'Client Name 2',
          text: 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.',
        },
        {
          image: '/theme-front/img/testimonial-3.jpg',
          name: 'Client Name 3',
          text: 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.',
        },
        {
          image: '/theme-front/img/testimonial-4.jpg',
          name: 'Client Name 4',
          text: 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.',
        },
      ],
    };
  },
});
</script>

<style scoped>
/* Add any scoped styles here */
</style>
