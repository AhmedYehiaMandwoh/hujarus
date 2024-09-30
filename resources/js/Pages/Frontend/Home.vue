<template>
      <div>
        
        <Carousel />
        <Service />
        <Aboutus />
        <Categories />
        <Courses />
        <Instructors />
        <Testimonial />
      </div>

  </template>
  
  <script>

  import Carousel from "@/Pages/Frontend/Carousel/Index.vue"; // Import your service here
  import Service from "@/Pages/Frontend/Services/Index.vue"; // Import your service here
  import Aboutus from "@/Pages/Frontend/Aboutus/Index.vue"; // Import your service here
  import Categories from "@/Pages/Frontend/Categories/Index.vue"; // Import your service here
  import Courses from "@/Pages/Frontend/Courses/Index.vue"; // Import your service here
  import Instructors from "@/Pages/Frontend/Instructors/Index.vue"; // Import your service here
  import Testimonial from "@/Pages/Frontend/Testimonial/Index.vue"; // Import your service here
  
  export default {
    name: 'App',
    components: {
      Carousel,
      Service,
      Aboutus,
      Categories,
      Courses,
      Instructors,
      Testimonial,
    },
  };
  </script>
  

  <style scoped>
  .full-width-carousel {
    width: 100vw; /* Full viewport width */
    overflow: hidden; /* Prevent overflow issues */
  }
  
  .owl-carousel-item {
    width: 100vw; /* Full width for each item */
    position: relative;
  }
  
  .carousel__slide {
    scroll-snap-stop: auto;
    flex-shrink: 0;
    margin: 0;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translateZ(0);
  }
  
  .img-fluid {
    width: 100%; /* Full width for images */
    height: auto; /* Maintain aspect ratio */
  }
  
  /* Navigation Arrows */
  .carousel__prev,
  .carousel__next {
    margin: 0;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    background: transparent;
    border: 2px solid #FFFFFF; /* Border color */
    border-radius: 50%; /* Circular shape */
    font-size: 22px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    transition: 0.5s;
    z-index: 10; /* Make sure they are above the image */
  }
  
  .carousel__prev {
    left: 20px; /* Position from the left */
  }
  
  .carousel__next {
    right: 20px; /* Position from the right */
  }
  
  .carousel__prev:hover,
  .carousel__next:hover {
    background: rgba(255, 255, 255, 0.2); /* Background change on hover */
  }
  
  /* Optional: Add some additional styles for better visibility */
  .carousel__prev, .carousel__next {
    cursor: pointer; /* Pointer cursor for hover effect */
  }
  
  /* Services Section Styles */
  .services {
    padding: 50px 0;
    background-color: #f8f9fa;
  }
  
  .service-item {
    text-align: center;
  }
  
  /* Testimonials Section Styles */
  .testimonials {
    padding: 50px 0;
    background-color: #fff;
  }
  
  .testimonial-item {
    text-align: center;
  }
  </style>
  