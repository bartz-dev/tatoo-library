<template>
    <router-link @mouseover="active = true" @mouseleave="active = false" :to="dest" :class="{active: name === activeRoute}" @click="setActiveRoute(name)">
        <div>
            <div class="button-img">
                <img v-if="isActive" width="200" src="/images/button_nav_bar_black.svg">
                <img v-else width="200" src="/images/button-nav-bar.svg" />
                <div style="font-family: 'antiqueLegacy', sans-serif;" :class="{'text-white': isActive}" class="button-size-small w-full centered">{{ description }}</div>
            </div>
        </div>
    </router-link>
</template>

<script>
export default {
    name: 'AppSectionMenu',
    props: {
        name: String,
        description: String,
        src: String,
        activeRoute: String,
        setActiveRoute: Function,
        dest: String,
        active: {
            required: false,
            default: false,
            type: Boolean
        }
    },
    computed: {
        isActive() {
            return this.activeRoute.toLowerCase() === this.name || this.active;
        }
    }
}
</script>
