<template>
<div class="fixed h-full">
    <div class="flex border-t border-black w-full h-full">
        <div class="flex-col border-r-2 border-black w-96">
            <div class="mt-4">
                <Button style="width: 99%" :reversed="activeList === 0"  :src="activeList === 1 ? 'images/button_artist.svg' : 'images/button_artist_black.svg'" text="Filters" @click="activeList = 0" />
            </div>
            <div class="mt-4">
                <Button style="width: 99%" :reversed="activeList === 1"  :src="activeList === 1 ? 'images/button_artist_black.svg' : 'images/button_artist.svg'" text="Style" @click="activeList = 1" />
            </div>
        </div>
        <div class="flex-col">
            <div class="mt-4" v-for="(artist, index) in artists" :key="artist.artist_id">
                <router-link :to="'/artists/' + artist.nom.toLowerCase() + '=' + artist.artist_id">
                    <ButtonArtist v-if="!pair(index)" :reversed="pair(index)" src="images/button_artist_black.svg"  :text="artist.nom" />
                    <ButtonArtist v-else src="images/button_artist.svg"  :text="artist.nom" />
                </router-link>
            </div>
        </div>

    </div>
</div>
</template>

<script>
import AppHomeButton from "./AppHomeButton";
import Button from "./Button";
import ButtonArtist from "./ButtonArtist";
export default {
    name: "AppCollectionsHome",
    components: {ButtonArtist, Button, AppHomeButton},
    data() {
        return {
            artists: [],
            tags: []
        }
    },
    setup: () => ({
        artistaDescription: {
            title: 'Cokney',
            des: '4-6 May 2022',
            service: 'Japanese + Tribal',
            counted: 'Collection 3'
        },
        artistbDescription: {
            title: 'Bastian Blau',
            des: '12-15 April 2022',
            service: 'Ornemental',
            counted: 'Collection 2'
        }
    }),
    props: {
        activeList: {
            default: 0
        }
    },
    methods: {
        pair(num) {
            return num % 2 == 0;
        }
    },
    mounted() {
        this.$http.get('/api/artists')
            .then(res => this.artists = res.data);
        this.$http.get('/api/tags')
            .then(res => this.tags = res.data);
    }
}
</script>

<style scoped>
</style>
