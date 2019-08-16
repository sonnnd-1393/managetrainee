<template>
    <div>
        <PageComponent></PageComponent>

        <QuickSideBarComponent></QuickSideBarComponent>
        <ScrollTopComponent></ScrollTopComponent>
        <QuickNavComponent></QuickNavComponent>
        <ModalComponent></ModalComponent>

    </div>
</template>

<script>
    import PageComponent from './page/PageComponent.vue';
    import ModalComponent from './ModalComponent.vue';
    import QuickNavComponent from './QuickNavComponent.vue';
    import ScrollTopComponent from './ScrollTopComponent.vue';
    import QuickSideBarComponent from './QuickSideBarComponent.vue';
    export default {
        components: {
            PageComponent,
            ModalComponent,
            QuickNavComponent,
            QuickSideBarComponent,
            ScrollTopComponent,
        },
        mounted() {
            console.log('Component Home mounted.')
        }
    }
</script>
