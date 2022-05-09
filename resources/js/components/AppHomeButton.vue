<template>
    <div v-bind:class="{'revert-style': colorReversed}">
        <div  class="button-border main-menu-link flex items-center justify-center h-40 w-full">
            <div class="text-center w-full">
                <button class="button-border-in">{{ text }}</button>
            </div>
        </div>

        <div v-bind:class="{'text-cols': colorReversed}" class="grid grid-cols-1 divide-gray-900 divide-y-[2px]">
            <div><br></div>
            <div class="text-black flex items-center">
                <div class="mx-auto">{{ description.title }}</div>
                <div class="mx-auto">{{ description.des }}</div>
                <div class="mx-auto">{{ description.service }}</div>
                <div class="mx-auto">{{ description.counted !== '' ? description.counted + ' Collections' : '' }}</div>
            </div>
            <div><br></div>
        </div>
    </div>

</template>

<script>
export default {
    name: "AppHomeButton",
    props: {
        text: String,
        description: {},
        colorReversed: false,
    }

}
</script>

<style>

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
    height: 35vh;
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
    border-radius: 200px;
    height: 35vh;
    padding-right: 20%;
    padding-left: 20%;
    border-right: 40px solid black;
    border-left: 40px solid black;
}

</style>
