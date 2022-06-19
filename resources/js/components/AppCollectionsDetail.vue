<template>
    <div style="height: 1px" class="w-full bg-black"></div>
    <div class="ml-4 mt-4 mb-4 flex">
        <Button src="../images/button_artist.svg" class="w-80 mr-6" :text="descriptionCollection.surnom + '\'s 3D Scans Collection'" />
        <div class=" w-80 cursor-pointer button-img">
            <img src="/images/button_artist.svg" />
            <a :href="'https://www.instagram.com/' + descriptionCollection.contact_information" target="_blank" style="font-family: 'antiqueLegacy', sans-serif;" :class="{'text-white': reversed, 'text-black': !reversed}" class="w-full centered">@{{ descriptionCollection.contact_information }}</a>
        </div>
    </div>
    <div class="flex fixed h-full w-full bg-black">
        <div v-for="collection in descriptionCollection.collections" :key="collection.collection_id" style="width: 30%">
                <AppCollectionButton @click="linkCollection(collection)" :description="description(collection)" style="font-family: 'antiqueLegacy', sans-serif;" />
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
            return {
                collectionName: collection.nom_court,
                location: collection.location,
                physiqueLocation: collection.position,
                session: collection.description,
                payload: '../assets/data/' + collection.payload
            }
        },
        linkCollection(element) {
            window.location.href = '/viewer/' + this.$route.params.id + '/p=' + element.payload;
        }
    },
    mounted() {
        this.$http.get('/api/' + this.$route.params.id + '/collections')
            .then(res => this.descriptionCollection = res.data)
        console.log(this.descriptionCollection.contact_information)


    }
}
</script>

<style scoped>
.button-img {
    position: relative;
    text-align: center;
}
</style>
