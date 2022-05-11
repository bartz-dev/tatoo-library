<template>
    <div class="button-img">
        <img src="../images/button-nav-bar.svg" />
        <div class="w-4/6 centered">{{ text }}</div>
    </div>
</template>

<script>
export default {
    name: "Button",
    props: {
        text: ''
    }
}
</script>

<style >
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
