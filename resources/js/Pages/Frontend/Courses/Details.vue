<template lang="">
    <!-- Course Details Start -->
    <div class="container-xxl py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        
            <h6 class="section-title bg-white text-center text-primary px-3">{{category.title}}</h6>
          </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <img class="img-fluid" :src="course.avatar_url" alt="Course Image" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">{{ course.title }}</h1>
                    <p class="mb-4" v-html="course.description"></p> <!-- Change here -->
                    <h5 class="mb-4">Instructor: <span class="text-primary">{{ course.instructor }}</span></h5>
                    <h5 class="mb-4">Price: <span class="text-success">${{ course.price }}</span></h5>
                    <h5 class="mb-4">Duration: <span class="text-info">{{ course.duration }}</span></h5>
                    <h5 class="mb-4">Students Enrolled: <span class="text-warning">{{ course.student_count }}</span></h5>
                    <Link href="/enroll" class="btn btn-primary py-2 px-5 mt-2">Request Free Trial </Link>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Details End -->
</template>

<script>
export default {
    props: {
        category: Object,
        course: Object
    }
}
</script>

<style>
    /* Add any specific styles for your course details here */
    .section-title {
        font-size: 1.5rem;
    }
    h1 {
        font-size: 2.5rem;
    }
    p {
        font-size: 1.2rem;
        line-height: 1.6;
    }
    .btn-primary {
        transition: background-color 0.3s;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
