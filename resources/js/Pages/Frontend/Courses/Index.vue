<template lang="">
    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses in {{ category.title }}</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Loop through courses -->
                <div 
                    v-for="(course, index) in courses" 
                    :key="course.id" 
                    class="col-lg-4 col-md-6 wow fadeInUp" 
                    :data-wow-delay="`${0.1 * (index + 1)}s`"
                >
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" :src="course.avatar_url" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <Link  :href="`/categories-courses/${category.slug}/course/${course.id}`" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px;">Read More</Link>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">${{ course.price }}</h3>
                          
                            <h5 class="mb-4">{{ course.title }}</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>{{ course.instructor }}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{ course.duration }} Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{ course.student_count }} Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
</template>

<script>
export default {
    props: {
        category: {
            type: Object,
            required: true,
        },
        courses: {
            type: Array,
            required: true,
        },
    },
}
</script>

<style lang="">
    /* Add any specific styles for your course items here */
</style>
