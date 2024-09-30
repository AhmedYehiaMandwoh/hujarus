<template>
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button
            type="button"
            class="navbar-toggler me-4"
            @click="toggleNavbar"
            aria-expanded="isNavbarOpen" 
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div :class="['collapse navbar-collapse', { show: isNavbarOpen }]" id="navbarCollapse"> <!-- Bind class to control visibility -->
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
</template>

<script setup>
import { ref } from 'vue'; // Import Vue's ref for reactive state

const isNavbarOpen = ref(false); // Create a reactive ref for navbar state

// Function to toggle the navbar open/close state
const toggleNavbar = () => {
    isNavbarOpen.value = !isNavbarOpen.value;
};
</script>

<style scoped>
.collapse { 
    visibility: revert;
}
</style>
