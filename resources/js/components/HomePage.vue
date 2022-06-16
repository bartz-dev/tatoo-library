<template>

    <div style="position:relative">
        <video src="/assets/home_background.mp4" autoplay muted loop></video>
        <app-second-menu />
         <router-link to="/artistsdetail">
            <img style="font-family: 'antiqueLegacy', sans-serif;" class="title-img" src="images/title-screen.svg" alt="title" />
         </router-link>
    </div>
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
}
</script>
<style scoped>
video {
    height: 100vh;
    width: 100%;
    object-fit: fill;
    position: absolute;
}
.title-img {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 75%;
}
</style>
