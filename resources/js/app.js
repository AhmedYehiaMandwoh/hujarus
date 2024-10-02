import './bootstrap';
import '../css/app.css';
import 'primevue/resources/themes/lara-dark-teal/theme.css';
import 'primevue/resources/themes/lara-light-teal/theme.css';
import 'primeicons/primeicons.css';

import { createI18n } from 'vue-i18n';
import ar from './Lang/ar.js';
import en from './Lang/en.js';
import { ability_if, ability_else } from "@/ability_directive";

import Text from "@/Components/Text/Text.vue";
import ElPanel from "@/Components/ElPanel.vue";

import { createApp, h } from 'vue';
import { createInertiaApp, Link } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Ziggy } from "@/ziggy.js";

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
import PrimeVue from 'primevue/config';
import ToastService from "primevue/toastservice";

import MasterLayout from "./Layout/MasterLayout.vue";
import LoginLayout from "./Layout/LoginLayout.vue";
import FrontendLayout from "./Layout/FrontendLayout.vue";

// Function to load styles for FrontendLayout
const loadFrontendStyles = () => {
    const stylesheets = [
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css",
        "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css",
        "/theme-front/lib/animate/animate.min.css",
        "/theme-front/lib/owlcarousel/assets/owl.carousel.min.css",
        "/theme-front/css/bootstrap.min.css",
        "/theme-front/css/style.css"
    ];

    stylesheets.forEach((href) => {
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = href;
        document.head.appendChild(link);
    });
};

createInertiaApp({
    title: (title) => title ? `${title} - ${appName}` : appName,
    resolve: name => {
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        );
        page.then((module) => {
            // Check if layout is FrontendLayout
            if (name.startsWith('Frontend/Home')  || name.startsWith('Frontend/Enroll')) {
                module.default.layout = FrontendLayout;
                loadFrontendStyles(); // Load styles for FrontendLayout
                return null;
            }
            // Apply LoginLayout for login-related pages
            if (name.startsWith('User/Login') ||
                name.startsWith('HospitalityProviders/Register') ||
                name.startsWith('HospitalityProviders/Login') ||
                name.startsWith('HospitalityProviders/ForgetPassword') ||
                name.startsWith('HospitalityProviders/ChangePassword')) {
                module.default.layout = LoginLayout;
                return null;
            }
            // Default to MasterLayout
            module.default.layout = MasterLayout;
        });
        return page;
    },
    setup({ el, App, props, plugin }) {
        const i18n = createI18n({
            locale: props.initialPage.props.locale,
            messages: { ar: ar, en: en },
            legacy: false,
        });
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(i18n)
            .use(PrimeVue)
            .use(ToastService)
            .use(ZiggyVue, Ziggy)
            .component('Link', Link)
            .component('Text', Text)
            .component('ElPanel', ElPanel)
            .directive('ability', ability_if)
            .directive('else-ability', ability_else)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
}).then();
