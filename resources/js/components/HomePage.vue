<template>
    <video src="assets/home_background.mp4" autoplay muted loop></video>
<!--    <video-bg :class="rotate-90" :sources="['assets/home_background.mp4']" img="assets/home_background.mp4">-->
        <app-second-menu />
<!--    </video-bg>-->
<!--    <AppHomeButton  v-bind:description="collectionDescription" text="Collections" @click="goToCollections" />-->
<!--    <AppHomeButton  color-reversed="true" v-bind:description="appointmentDescription" text="Appointment" />-->
</template>
<script>
import AppHomeButton from "./AppHomeButton";
import AppMenu from "./AppMenu";
import AppSecondMenu from "./AppSecondMenu";
export default {
    name: 'homepage',
    components: {AppSecondMenu, AppMenu, AppHomeButton},
    methods: {
        goToCollections() {
            this.$router.push('/collections');
        }
    },
    setup: () => ({
        title: 'Collections 1',
        collectionDescription: {
            title: 'Platform for inkers and inked',
            des: 'Digitalizing artworks and body parts',
            service: 'Online experience',
            counted: 0
        },
        appointmentDescription: {
            title: 'Take an appointment',
            des: 'For tattoo artist and tattooed',
            service: 'Online form',
            counted: ''
        }
    })
}
</script>
<style scoped>
video {
    height: 100vh;
    width: 100%;
    object-fit: fill;
    position: absolute;
}
</style>
