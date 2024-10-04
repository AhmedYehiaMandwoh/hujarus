<template>
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" id="contact">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="#aboutus">About Us</a>
                    <a class="btn btn-link" href="#">Privacy Policy</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                </div>
                <div class="col-md-4">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ settingsObject.location }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ settingsObject.phone }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ settingsObject.email }}</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" :href="settingsObject.instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" :href="settingsObject.facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" :href="settingsObject.tiktok">T</a>
                        <a class="btn btn-outline-light btn-social" :href="settingsObject.youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-white mb-3">About Us</h4>
                    <p>
                        We are an Egyptian Arab academy aimed at teaching the Qur'an in the correct way as taught by the Prophet Muhammad (peace be upon him). We provide high-quality classes, relying on qualified teachers who have memorized the Book of Allah and hold izah as well.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center">
                        &copy; All Rights Reserved.
                        Designed By Hijrah Academy
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps, computed } from 'vue';

const props = defineProps({
    settings: {
        type: Array,
        required: true,
    }
});

// Transform settings array into an object
const settingsObject = computed(() => {
    return props.settings.reduce((acc, setting) => {
        acc[setting.key] = setting.value;
        return acc;
    }, {});
});

console.log(settingsObject.value); // This will log the transformed settings object
</script>

<style scoped>
/* Add any scoped styles here */
</style>
