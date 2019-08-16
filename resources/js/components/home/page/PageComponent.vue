<template>
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <HeaderComponent></HeaderComponent>
        <BodyComponent></BodyComponent>
        <FooterComponent></FooterComponent>
    </div>
    <!-- end:: Page -->
</template>

<script>
    import HeaderComponent from './header/HeaderComponent.vue'
    import BodyComponent from './body/BodyComponent.vue'
    import FooterComponent from './footer/FooterComponent.vue'

    export default {
        components: {
            HeaderComponent,
            BodyComponent,
            FooterComponent,
        },
        mounted() {
            console.log('Component Page mounted.')
        }
    }
</script>
