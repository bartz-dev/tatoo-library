<template>
    <div class="flex">
        <Button class="w-80" text="Cokney's 3D Scans Collection" />
        <Button class="w-80" text="@cokney" />
    </div>
    <div style="height: 100%; position:fixed" class="w-full bg-black">
        <AppCollectionButton :description="descriptionCollection" style="font-family: 'antiqueLegacy', sans-serif;" />
    </div>
</template>

<script>
import Button from "./Button";
import AppCollectionButton from "./AppCollectionButton";
export default {
    name: "AppCollectionsDetail",
    components: {AppCollectionButton, Button},
    data: function () {
        return {descriptionCollection : {}}
    },
    methods: {
        description() {
            return {
                collectionName: 'Tribal Sleeve made in 2022',
                location: 'Annecy + Barcelone',
                physiqueLocation: 'On Malow',
                session: 'WIP - 1 Session'
            }
        }
    },
    mounted() {
        this.descriptionCollection = {
            collectionName: 'Tribal Sleeve made in 2022',
            location: 'Annecy + Barcelone',
            physiqueLocation: 'On Malow',
            session: 'WIP - 1 Session'
        }
    }
}
</script>

<style scoped>

</style>
