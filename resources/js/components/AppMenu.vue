<template>
    <div style="border-top: 1px solid #101010; border-bottom: 1px solid #101010;" class="mt-4 w-full inline-flex h-7">
        <div class="flex items-center w-4/6" style="overflow: hidden;">
            <router-link to="/" :class="{active: 'home' === activeRoute}" @click="setActiveRoute('home')">
                <div>
                    <div class="button-img">
                        <img v-if="activeRoute.toLowerCase() === 'home'" width="200" src="/images/button_nav_bar_black.svg">
                        <img v-else width="200" src="/images/button-nav-bar.svg" />
                        <div :class="{'text-white': activeRoute.toLowerCase() === 'home'}" class="w-full centered">Skinner Project</div>
                    </div>
                </div>
            </router-link>

            <router-link to="/artistsdetail" :class="{active: 'artists' === activeRoute}" @click="setActiveRoute('artists')">
                <div>
                    <div class="button-img">
                        <img v-if="activeRoute.toLowerCase() === 'artists'" width="200" src="/images/button_nav_bar_black.svg">
                        <img v-else width="200" src="/images/button-nav-bar.svg" />
                        <div :class="{'text-white': activeRoute.toLowerCase() === 'artists'}" class="w-full centered">Artists</div>
                    </div>
                </div>
            </router-link>
        </div>

        <div class="flex items-center w-1/3" style="overflow: hidden">
            <div class="w-auto ml-auto">
                <router-link to="/about" :class="{active: 'about' === activeRoute}" @click="setActiveRoute('about')">
                    <div class="button-img">
                        <img v-if="activeRoute.toLowerCase() === 'about'" width="200" src="/images/button_nav_bar_black.svg">
                        <img v-else width="200" src="/images/button-nav-bar.svg" />
                        <div :class="{'text-white': activeRoute.toLowerCase() === 'about'}" class="w-full centered">About</div>
                    </div>
                </router-link>
            </div>
        </div>
    </div>
    <!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/library" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'library' === activeRoute}" @click="setActiveRoute('library')">-->
<!--&lt;!&ndash;                <div class="w-full h-full" style="background-color: transparent;">Library</div>&ndash;&gt;-->
<!--&lt;!&ndash;                <a href=""></a>&ndash;&gt;-->
<!--                <div class="button-img">-->
<!--                    <img width="200" src="../images/button-nav-bar.svg" />-->
<!--                    <div class="centered">Library</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->

<!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/editorial" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'editorial' === activeRoute}" @click="setActiveRoute('editorial')">-->
<!--                <div class="button-img">-->
<!--                    <img width="200" src="../images/button-nav-bar.svg" />-->
<!--                    <div class="centered">Editorial</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->

<!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/appointment" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'appointment' === activeRoute}" @click="setActiveRoute('appointment')">-->
<!--                <div class="button-img">-->
<!--                    <img width="200" src="../images/button-nav-bar.svg" />-->
<!--                    <div class="centered">Appointment</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->

<!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/about" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'about' === activeRoute}" @click="setActiveRoute('about')">-->
<!--                <div class="button-img">-->
<!--                    <img width="200" src="../images/button-nav-bar.svg" />-->
<!--                    <div class="centered">About</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->

<!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/contactform" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'contactform' === activeRoute}" @click="setActiveRoute('contactform')">-->
<!--                <div class="button-img">-->
<!--                    <img width="200" src="../images/button-nav-bar.svg" />-->
<!--                    <div class="centered">Contact</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->
<!--    <div class="h-20 grid grid-cols-1 divide-gray-900 divide-y-[2px]">-->
<!--        <div><br></div>-->
<!--        <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-6xl">Collections 1</div>-->
<!--        <div><br></div>-->
<!--    </div>-->
</template>

<script>
export default {
    name: "AppMenu",
    data() {
      return {
        activeRoute: 'home'
      }
    },
    mounted() {
      this.activeRoute = this.$route.name;
        console.log(this.activeRoute)
    },
    methods: {
        setActiveRoute(routeName) {
            this.activeRoute = routeName;
            console.log(this.activeRoute)
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
