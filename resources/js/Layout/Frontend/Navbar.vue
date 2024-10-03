<template>
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <Link href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="/theme-front/img/logo.png" class="img-logo">
        </Link>
        <button
            type="button"
            class="navbar-toggler me-4"
            @click="toggleNavbar"
            aria-expanded="isNavbarOpen" 
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div :class="['collapse navbar-collapse', { show: isNavbarOpen }]" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <Link href="/" class="nav-item nav-link active">Home</Link>
                <Link href="/about" class="nav-item nav-link">About</Link>
                <Link href="#categories" class="nav-item nav-link">Courses</Link> <!-- Change href here -->
                <Link href="/contact" class="nav-item nav-link">Contact</Link>
            </div>
            <Link href="/enroll" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                Join Now<i class="fa fa-arrow-right ms-3"></i>
            </Link>
        </div>
    </nav>
</template>

<script setup>
import { ref } from 'vue';

const isNavbarOpen = ref(false);

const toggleNavbar = () => {
    isNavbarOpen.value = !isNavbarOpen.value;
};
</script>

<style scoped>
.collapse { 
    visibility: revert;
}

.img-logo {
    width: 200px;
    margin-top: 20px;
}
</style>
