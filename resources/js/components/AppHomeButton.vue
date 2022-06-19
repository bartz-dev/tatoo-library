<template>
    <div v-bind:class="{'revert-style': colorReversed}">
        <div v-bind:class="{'text-cols': colorReversed}" class="grid grid-cols-1 divide-gray-900 divide-y-[2px]">
            <div class="h-6"><br></div>
        </div>
        <div  class="relative button-border main-menu-link flex items-center justify-center h-40 w-full">
            <div style="height: 25vh;display: contents" class="text-center w-full">
                <img style="width: 99%; height: 100%;" class="revert-style mx-auto" src="/images/bouton-about-final.svg" />
                <div :class="{'text-white': reversed, 'text-black': !reversed}" style="font-family: 'antiqueLegacy', sans-serif;" class="w-4/6 centered">{{ text }}</div>

                <!-- <button class="button-border-in">{{ text }}</button> -->
            </div>
        </div>

        <div v-bind:class="{'text-cols': colorReversed}" class="grid grid-cols-1 divide-gray-900 divide-y-[2px]">
            <div class="h-6"><br></div>
            <div class="text-xl text-black flex items-center">
                <div class="mx-auto">{{ description.title }}</div>
                <div class="mx-auto">{{ description.des }}</div>
                <div class="mx-auto">{{ description.service }}</div>
                <div class="mx-auto">{{ description.counted !== '' ? description.counted + ' Collections' : '' }}</div>
            </div>
<!--            <div><br></div>-->
        </div>
    </div>

</template>

<script>
import Button from "./Button";
export default {
    name: "AppHomeButton",
    components: { Button },
    props: {
        text: String,
        description: {},
        colorReversed: false,
    }

}
</script>

<style scoped>

.main-menu-link p {
    opacity: 0.3;
    transition: opacity 0.4s;
}

.main-menu-link:hover p,
.main-menu-link.active p {
    opacity: 1;
}

.button-border {
    background-color: white;
    height: 25vh;
    border-top: 2px solid rgb(16, 16, 16);
    border-bottom: 2px solid rgb(16, 16, 16);
    font-size: 7.75rem;
    line-height: 1;
}

.text-cols {
    background-color: white;
    --tw-text-opacity: 1;
    color: rgb(0 0 0 / var(--tw-text-opacity));
}

.revert-style {
    filter: invert(100%);
}

/* filter: invert(100%); */
.button-border-in {
    font-family: 'antiqueLegacy';
    /*font-size: 10.5rem;*/
    line-height: 100px;
    border-radius: 200px;
    height: 25vh;
    padding-right: 20%;
    padding-left: 20%;
    border-right: 40px solid black;
    border-left: 40px solid black;
}

</style>
