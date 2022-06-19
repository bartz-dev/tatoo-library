<template>
    <div v-bind:class="{'revert-style': colorReversed}">
        <div  class="p-6 bg-white text-4xl 2xl:text-3xl antiqueLegacy flex w-full">
            <div class="w-4/6 flex-initial text-center">
                <p class="ml-4 text-left inline-block">{{ text }}</p>
            </div>
            <div class="w-2/6 flex-initial ml-12 mr-12 w-full">
                <p>{{ secondText }}</p>
            </div>
        </div>
        <div v-if="colorReversed" v-bind:class="{'text-cols': colorReversed, 'border-black border-y-2': colorReversed}" class="background-white">
            <div class="h-6"><br></div>
        </div>

        <div style="font-family: 'antiqueLegacy', sans-serif;" v-bind:class="{'text-cols': colorReversed}" class="text-md flex">
            <div class="h-10"><br></div>
            <div class="text-black flex items-center w-1/2">
                <div class="ml-4">{{ description.title }}</div>
                <div class="mx-auto">{{ description.des }}</div>

            </div>
            <div class="text-black flex items-center w-1/2">
                <div class="mx-auto">{{  description.counted ?? '' }}</div>
                <div class="mr-4">{{ description.service }}</div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "AppAboutButton",
    props: {
        text: String,
        secondText: {
            required: false,
            default: ''
        },
        description: {},
        colorReversed: false,
    },


}
</script>

<style scoped>

.antiqueLegacy {
    font-family: 'antiqueLegacy', sans-serif;
}

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
    height: auto;
    border-bottom: 2px solid rgb(16, 16, 16);
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
    height: 25vh;
}

</style>
