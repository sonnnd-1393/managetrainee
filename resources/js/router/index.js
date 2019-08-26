import Vue from "vue";
import VueRouter from "vue-router";

import ProfileContentComponent from '../components/home/page/body/content/profile/ProfileContentComponent.vue'
import TrackingContentComponent from '../components/home/page/body/content/tracking/TrackingContentComponent.vue'
import LanguageAdminContentComponent from '../components/home/page/body/content/language/LanguageAdminContentComponent.vue'

Vue.use(VueRouter);

const routes = [
    {
        path: '/profile',
        component: ProfileContentComponent,
        name: "profile",
    },
    {
        path: '/tracking',
        component: TrackingContentComponent,
        name: "tracking",
    },
    {
        path: '/language',
        component: LanguageAdminContentComponent,
        name: 'language',
    },
]

const router = new VueRouter({
    routes,
    linkActiveClass: "active",
    mode: "history"
});

export default router;
