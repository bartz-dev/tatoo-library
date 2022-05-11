<template>
    <div style="font-family: 'antiqueLegacy', sans-serif;" class="relative bg-black pt-6 h-4/6 w-1/4 text-xs">
        <div class="pl-4 grid grid-cols-2 rounded-t-2xl h-8 bg-white">
            <div>{{ description.collectionName }}</div>
            <div>{{ description.location }}</div>
            <div>{{ description.physiqueLocation }}</div>
            <div>{{ description.session }}</div>
        </div>
        <div style="height:95%" class="relative">

        </div>
        <div class="rounded-b-2xl mt-4 h-8 w-full bg-white flex justify-center items-center">Click on the + to explore the 3D Scan</div>
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

</style>
