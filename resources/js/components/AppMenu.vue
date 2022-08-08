<template>
    <div style="border-top: 1px solid #101010; border-bottom: 1px solid #101010;" class="mt-4 w-full mb-4 flex h-8">
        <div class="flex items-center w-4/6">
            <AppMenuSection name="home" description="Skinner Project" :activeRoute="activeRoute" :setActiveRoute="setActiveRoute" :src="'/images/button-nav-bar.svg'" dest="/" />
            <AppMenuSection name="artists" description="Artists" :activeRoute="activeRoute" :setActiveRoute="setActiveRoute" :src="'/images/button-nav-bar.svg'" dest="/artistsdetail" />
        </div>

        <div class="flex items-center w-1/3">
            <div class="w-auto ml-auto">
                <AppMenuSection name="about" description="About" :activeRoute="activeRoute" :setActiveRoute="setActiveRoute" :src="'/images/button-nav-bar.svg'" dest="/about" />
            </div>
        </div>
    </div>
</template>

<script>
import AppMenuSection from './AppMenuSection.vue';
export default {
    name: "AppMenu",
    components: { AppMenuSection },
    data() {
        return {
            activeRoute: "home"
        };
    },
    mounted() {
        this.activeRoute = this.$route.name;
    },
    methods: {
        setActiveRoute(routeName) {
            this.activeRoute = routeName;
        },
    },
    components: { AppMenuSection }
}
</script>

<style>
.button-img {
    position: relative;
    text-align: center;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
