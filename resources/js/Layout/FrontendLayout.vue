<template>
    <div>
        <!-- Spinner Start -->
        <div v-if="loading" id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        
        <!-- Spinner End -->

        <!-- Main Content -->
        <div v-else>
            <Header/>
            <Whats/>
            <Navbar/>
            <slot/>
            <Footer/>
            <NotificationAlert/>
        </div>

        
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import NotificationAlert from "@/Layout/NotificationAlert.vue";
import Whats from "@/Layout/Frontend/Whats.vue";  // Create a separate Navbar component
import Navbar from "@/Layout/Frontend/Navbar.vue";  // Create a separate Navbar component
import Footer from "@/Layout/Frontend/Footer.vue";  // Create a separate Footer component
import Header from "./Frontend/Header.vue";

// Loading state
const loading = ref(true);

// Simulate a loading process
onMounted(() => {
    // Simulate a network request or some async operation
    setTimeout(() => {
        loading.value = false; // Set loading to false after the loading is complete
    }, 2000); // Adjust the duration as needed
});
</script>

<style scoped>
/* Add any scoped styles here */
</style>
