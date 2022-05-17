<template>
    <div class="w-full items-center flex h-8 view left-sidebar">
        <div class="flex items-center w-2/4">
            <router-link to="/collections" class="w-max mx-auto" :class="{active: 'collections' === activeRoute}" @click="setActiveRoute('collections')">
                <div class="w-auto mx-auto">
                    <div style="filter: invert(100%)" class="button-img">
                        <img width="200" src="images/button_nav_bar_black.svg" />
                        <div class="text-white centered">Artists</div>
                    </div>
                </div>
            </router-link>

            <div class="w-auto mx-auto">
                <router-link to="/editorial" class=" w-max mx-auto" :class="{active: 'editorial' === activeRoute}" @click="setActiveRoute('editorial')">
                    <div style="filter: invert(100%)" class="button-img">
                        <img width="200" src="images/button_nav_bar_black.svg" />
                        <div class="text-white centered">Editorial</div>
                    </div>
                </router-link>
            </div>
        </div>

        <div class="flex-initial w-2/3">

        </div>

        <div class="flex items-center w-1/3">
            <div class="w-1/3"></div>
            <div class="w-auto mx-auto">
                <router-link to="/about" class=" w-max mx-auto" :class="{active: 'about' === activeRoute}" @click="setActiveRoute('about')">
                    <div style="filter: invert(100%)" class="button-img">
                        <img width="200" src="images/button_nav_bar_black.svg" />
                        <div class="text-white centered">About</div>
                    </div>
                </router-link>
            </div>
        </div>


<!--        <router-link to="/" class="py-8  border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'home' === activeRoute}" @click="setActiveRoute('home')">-->
<!--            <div class="w-full mx-auto">-->
<!--                <div style="filter: invert(100%)" class="button-img">-->
<!--                    <img width="200" src="../images/button_nav_bar_black.svg" />-->
<!--                    <div class="text-white centered">Home</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </router-link>-->

<!--        <router-link to="/collections" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'collections' === activeRoute}" @click="setActiveRoute('collections')">-->
<!--            <div class="w-auto mx-auto">-->
<!--                <div style="filter: invert(100%)" class="button-img">-->
<!--                    <img width="200" src="../images/button_nav_bar_black.svg" />-->
<!--                    <div class="text-white centered">Collections</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </router-link>-->


<!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/library" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'library' === activeRoute}" @click="setActiveRoute('library')">-->
<!--                &lt;!&ndash;                <div class="w-full h-full" style="background-color: transparent;">Library</div>&ndash;&gt;-->
<!--                &lt;!&ndash;                <a href=""></a>&ndash;&gt;-->
<!--                <div style="filter: invert(100%)" class="button-img">-->
<!--                    <img width="200" src="../images/button_nav_bar_black.svg" />-->
<!--                    <div class="text-white centered">Library</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->

<!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/editorial" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'editorial' === activeRoute}" @click="setActiveRoute('editorial')">-->
<!--                <div style="filter: invert(100%)" class="button-img">-->
<!--                    <img width="200" src="../images/button_nav_bar_black.svg" />-->
<!--                    <div class="text-white centered">Editorial</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->

<!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/appointment" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'appointment' === activeRoute}" @click="setActiveRoute('appointment')">-->
<!--                <div style="filter: invert(100%)" class="button-img">-->
<!--                    <img width="200" src="../images/button_nav_bar_black.svg" />-->
<!--                    <div class="text-white centered">Appointment</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->

<!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/about" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'about' === activeRoute}" @click="setActiveRoute('about')">-->
<!--                <div style="filter: invert(100%)" class="button-img">-->
<!--                    <img width="200" src="../images/button_nav_bar_black.svg" />-->
<!--                    <div class="text-white centered">About</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->

<!--        <div class="w-auto mx-auto">-->
<!--            <router-link to="/contactform" class="py-8 border-[#35395a] w-max mx-auto main-menu-link" :class="{active: 'contactform' === activeRoute}" @click="setActiveRoute('contactform')">-->
<!--                <div style="filter: invert(100%)" class="button-img">-->
<!--                    <img width="200" src="../images/button_nav_bar_black.svg" />-->
<!--                    <div class="text-white centered">Contact</div>-->
<!--                </div>-->
<!--            </router-link>-->
<!--        </div>-->
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
    color: black;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
