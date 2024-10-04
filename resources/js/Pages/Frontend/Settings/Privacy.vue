<template lang="">
    <!-- Course Details Start -->
    <div class="container-xxl py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        
            <h6 class="section-title bg-white text-center text-primary px-3">{{privacy_policy.key}}</h6>
          </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12">
                    <p>
                        {{privacy_policy.value}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Details End -->
</template>

<script>
export default {
    props: {
        privacy_policy: Object,
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
