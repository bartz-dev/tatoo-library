<template>
    <div class="ml-4 mt-4 mb-4 flex">
        <Button src="../images/button_artist.svg" class="w-80 mr-6" text="Cokney's 3D Scans Collection" />
        <Button src="../images/button_artist.svg" class="w-80" text="@cokney" />
    </div>
    <div class="flex fixed h-full w-full bg-black">
        <div v-for="collection in descriptionCollection.collections" :key="collection.collection_id" class="w-96">
            <!-- <router-link @click="linkCollection(collection)"> -->
                <AppCollectionButton @click="linkCollection(collection)" :description="description(collection)" style="font-family: 'antiqueLegacy', sans-serif;" />
            <!-- </router-link> -->
        </div>
    </div>
</template>

<script>
import Button from "./Button";
import AppCollectionButton from "./AppCollectionButton";
export default {
    name: "AppCollectionsDetail",
    components: {AppCollectionButton, Button},
    data() {
        return {
            descriptionCollection : {}
        }
    },
    methods: {
        description(collection) {
            console.log(collection)
            return {
                collectionName: collection.nom_court,
                location: collection.location,
                physiqueLocation: 'On Malow',
                session: collection.description,
                payload: '../assets/data/' + collection.payload
            }
        },
        linkCollection(element) {
            window.location.href = '/viewer/' + this.$route.params.id + '/p=' + element.payload;
        }
    },
    mounted() {
        this.$http.get('/' + this.$route.params.id + '/collections')
            .then(res => this.descriptionCollection = res.data)


    }
}
</script>

<style scoped>

</style>
