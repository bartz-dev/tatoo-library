<template>
    <div>
        <video v-if="isNotViewer" src="/assets/homepage-background.mp4" autoplay muted loop></video>
        <app-second-menu />
         <router-link v-if="isNotViewer" to="/artistsdetail">
            <img style="font-family: 'antiqueLegacy', sans-serif;" class="title-img" src="/images/artist_home.png" alt="title" />
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
        },
        isNotViewer() {
            console.log(window.location.href)
            return window.location.href.indexOf('viewer') !== -1;
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
