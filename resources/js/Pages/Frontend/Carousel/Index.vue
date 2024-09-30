<template>
    <!-- Carousel Start -->
    <carousel :autoplay="true" :loop="true" :items-to-show="1" :nav="true"  :autoplayTimeout="3000">
      <slide v-for="item in carouselItems" :key="item.id">
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid w-100" :src="item.image" alt="Image">
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
            <div class="container">
              <div class="row">
                <div class="col-sm-10 col-lg-8 text-left">
                  <h5 class="text-primary text-uppercase mb-3 animated slideInDown">{{ item.title }}</h5>
                  <h1 class="display-3 text-white animated slideInDown">{{ item.subtitle }}</h1>
                  <p class="fs-5 text-white mb-4 pb-2">{{ item.description }}</p>
                  <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                  <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </slide>
  
      <template #addons>
        <!-- <navigation /> -->
        <pagination />
      </template>
    </carousel>
    <!-- Carousel End -->
  </template>
  
  <script>
  // Import the carousel components and styles
  import 'vue3-carousel/dist/carousel.css';
  import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
  
  export default {
    components: {
      Carousel,
      Slide,
      Pagination,
      Navigation
    },
    data() {
      return {
        carouselItems: [
          {
            id: 1,
            image: "/theme-front/img/carousel-2.jpg",
            title: "Best Online Courses",
            subtitle: "The Best Online Learning Platform",
            description: "Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr."
          },
          {
            id: 2,
            image: "/theme-front/img/carousel-1.jpg",
            title: "Best Online Courses",
            subtitle: "Get Educated Online From Your Home",
            description: "Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr."
          }
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .owl-carousel-item {
    position: relative;
    width: 100%;
  }
  
  img.img-fluid.w-100 {
    width: 100%; /* Ensure the image takes up full width */
    height: auto; /* Maintain aspect ratio */
  }
  
  /* Custom arrow styles */
  .carousel__prev,
  .carousel__next {
    margin: 0;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    background-color: rgba(0, 0, 0, 0.5);
    border: 2px solid #ffffff;
    font-size: 20px;
    transition: background-color 0.3s ease;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    cursor: pointer;
  }
  
  .carousel__prev {
    left: 15px;
  }
  
  .carousel__next {
    right: 15px;
  }
  
  .carousel__prev:hover,
  .carousel__next:hover {
    background-color: #ffffff;
    color: #000;
  }
  
  /* Ensure text and buttons are left-aligned */
  .text-left {
    text-align: left;
  }
  
  h5, h1, p {
    text-align: left; /* Apply to headers and paragraphs for consistent alignment */
  }
  
  </style>
  