<template>
    <div style="width: 99%" class="cursor-pointer button-img">
        <img :src="src" />
        <div :class="{'text-white': reversed, 'text-black': !reversed}" class="w-4/6 centered">{{ text }}</div>
    </div>
</template>

<script>
export default {
    name: "Button",
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

<style >
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
