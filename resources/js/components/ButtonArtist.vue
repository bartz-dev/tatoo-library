<template>
    <div  style="width: 98%; height: 101px; background-size: 100%;background-repeat: no-repeat;" class="absolute rounded-[100px]  mx-auto cursor-pointer button-img">
        <div class="absolute w-full">
            <div style="width: 100%; height: 101px; background-size: 100%;background-repeat: no-repeat;"></div>
        </div>
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-8xl centered">{{ text }}</div>
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
