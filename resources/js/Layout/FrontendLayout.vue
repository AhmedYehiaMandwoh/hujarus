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
            <Header />
            <Whats />
            <Navbar />
            <slot />
            <Footer :settings="settings" />
            <NotificationAlert />
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import NotificationAlert from "@/Layout/NotificationAlert.vue";
import Whats from "@/Layout/Frontend/Whats.vue";
import Navbar from "@/Layout/Frontend/Navbar.vue";
import Footer from "@/Layout/Frontend/Footer.vue";
import Header from "./Frontend/Header.vue";

const settings = ref({});
const loading = ref(true);

// Fetch settings from the server
onMounted(async () => {
    try {
        const response = await fetch('/getsettings'); // Adjust the URL if needed
        const data = await response.json();
        console.log(data);
        
        settings.value = data.settings;
    } catch (error) {
        console.error('Error fetching settings:', error);
    } finally {
        loading.value = false; // Stop loading
    }
});
</script>

<style scoped>
/* Add any scoped styles here */
</style>
