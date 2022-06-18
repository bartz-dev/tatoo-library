<template>
    <div style="width: 98%" class="mx-auto cursor-pointer button-img">
        <div>
            <img style="width: 100%" :src="src" />

        </div>
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-6xl w-4/6 centered">{{ text }}</div>
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
    }
}
</script>

<style scoped>
.button-elarged {
    height: 200px;
}
</style>
