<template>
    <div class="w-full items-center flex h-8 view left-sidebar pt-8">
        <div class="flex items-center w-3/6">
            <div class="ml-4 w-auto">
                <div class="button-img">
                    <img width="175" src="/images/skinner_project_home.svg" />
                    <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-white w-full centered">Skinner Project</div>
                </div>
            </div>

            <router-link to="/artistsdetail" class="w-max" :class="{active: 'artists' === activeRoute}" @click="setActiveRoute('collections')">
                <div class="w-auto mx-auto">
                    <div style="filter: invert(100%)" class="button-img">
                        <img width="200" src="/images/button_nav_bar_black.svg" />
                        <div class="text-white centered">Artists</div>
                    </div>
                </div>
            </router-link>
        </div>
        <div class="flex w-2/6"></div>
            <router-link to="/about" class="ml-auto" :class="{active: 'about' === activeRoute}" @click="setActiveRoute('about')">
                    <div style="filter: invert(100%)" class="button-img">
                        <img width="200" src="/images/button_nav_bar_black.svg" />
                        <div class="text-white centered">About</div>
                    </div>
            </router-link>
        </div>
</template>

<script>
export default {
    name: "AppSecondMenu",
    data() {
        return {
            activeRoute: 'home'
        }
    },
    mounted() {
        this.activeRoute = this.$route.name;
    },
    methods: {
        setActiveRoute(routeName) {
            this.activeRoute = routeName;
        },
    }

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
