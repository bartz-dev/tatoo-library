<template>
    <div  style="width: 98%; height: 101px; background-size: 100%" class="absolute rounded-[100px]  mx-auto cursor-pointer button-img">
        <div style="top: -1px; height: 100%; width:100%" class="absolute">
            <img class="button-artist" v-if="!reversed" style="height: 103px; width:100%" src="/images/pngnoir.png" />
            <img class="button-artist" v-else style="height: 103px; width:100%" src="/images/png_blanc.png" />
        </div>
        <div class="absolute w-full">
            <div style="width: 100%; height: 101px; background-size: 100%;background-repeat: no-repeat;"></div>
        </div>
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="w-max text-nom-artist centered">{{ text }}</div>
        <div class="w-4/6 centered"></div>
    </div>

</template>

<script>
export default {
    name: "ButtonArtist",
    props: {
        text: '',
        src: {
            required: false,
            default: 'images/button-nav-bar.svg'
        },
        reversed: false
    },
}
</script>

<style scoped>
.button-elarged {
    height: 200px;
}
</style>
