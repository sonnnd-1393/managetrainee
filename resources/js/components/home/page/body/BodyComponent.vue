<template>
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <LeftAsideComponent></LeftAsideComponent>

        <AsideMenuComponent></AsideMenuComponent>
        
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <SubHeaderComponent></SubHeaderComponent>

            <router-view>

            </router-view>
        </div>
    </div>
    <!-- end:: Body -->
</template>

<script>
    import LeftAsideComponent from './LeftAsideComponent.vue';
    import AsideMenuComponent from './AsideMenuComponent.vue';
    import SubHeaderComponent from './SubHeaderComponent.vue';
    import ProfileContentComponent from './content/ProfileContentComponent.vue';
    import TrackingContentComponent from './content/TrackingContentComponent.vue';

    export default {
        components: {
            LeftAsideComponent,
            AsideMenuComponent,
            SubHeaderComponent,
            ProfileContentComponent,
            TrackingContentComponent,
        },
        mounted() {
            console.log('Component Body mounted.')
        }
    }
</script>
