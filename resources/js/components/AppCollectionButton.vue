<template>
<!--  Button collection  -->
    <div style="font-family: 'antiqueLegacy', sans-serif;" class="ml-4 mr-4 mt-4 text-xs">
        <div class="pl-4 grid grid-cols-2 rounded-t-2xl h-8 bg-white">
            <div>{{ description.collectionName }}</div>
            <div>{{ description.location }}</div>
            <div>{{ description.physiqueLocation }}</div>
            <div>{{ description.session }}</div>
        </div>
        <div class="border-x-2 border-black relative inline-block">
            <video :src="description.payload + '.mp4'" autoplay muted loop></video>
            <div class="icon-plus collection-hover hover:bg-[url(/images/button-plus-noir.png)] bg-[url(/images/button-plus.png)]"></div>
        </div>
        <div class="rounded-b-2xl h-8 w-full bg-white flex justify-center items-center">Click on the + to explore the 3D Scan</div>
    </div>
</template>

<script>
export default {
    name: "AppCollectionButton",
    props: {
        description: {}
    }
}
</script>

<style scoped>
.icon-plus {
    position: absolute;
    transform: translateY(-50%);
    background-size: contain;
    background-repeat: no-repeat;
    height: 84px;
}
</style>
