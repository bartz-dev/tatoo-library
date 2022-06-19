<template>
<div>
    <div class="absolute flex border-t border-black w-full h-full">
        <div class="text-3xl flex-col border-r-2 border-black w-96">
            <div class="m-4">
                <Button style="width: 99%" :reversed="activeList === 0"  :src="activeList === 1 ? '/images/filters.svg' : '/images/filters.svg'" text="Filters" @click="activeList = 0" />
            </div>
            <div class="m-4">
                <Button style="width: 99%" src="/images/style-bodypart.svg" text="Style" />
            </div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-blue-700 text-center">All</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Japanese</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Tribal</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">BlackWork</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Floral</div>
            <div class="m-4">
                <Button style="width: 99%" src="/images/style-bodypart.svg" text="Body Part" />
            </div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Arms</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Legs</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Torso</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Shoulders</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Back</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Glutes</div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="text-3xl text-center">Calves</div>
        </div>
        <div class="w-full">
            <div class="m-3" v-for="(artist, index) in artists" :key="artist.artist_id">
                <router-link class="relative" :to="'/artists/' + artist.nom.toLowerCase() + '=' + artist.artist_id">
                    <!-- <img class="absolute" src="/images/rectangle_border.svg" />
 -->
                    <div style="top: -1px; height: 100%; width:100%" class="absolute">
                        <img v-if="pair(index)" style="height: 103px; width:100%" src="/images/pngnoir.png" />
                        <img v-else style="height: 103px; width:100%" src="/images/png_blanc.png" />
                    </div>
                    <ButtonArtist v-if="pair(index)" :reversed="pair(index)" :src="'/assets/' + artist.payload+ '.jpg'" v-bind:class="'rounded-[100px] bg-black text-white hover:bg-[url(/assets/' + artist.payload + '.jpg)]'" :text="artist.nom" />
                    <ButtonArtist v-else :reversed="!pair(index)" v-bind:class="'rounded-[100px] bg-white text-black hover:bg-[url(/assets/' + artist.payload + '.jpg)]' " :src="'/assets/' + artist.payload + '.jpg'"   :text="artist.nom" />
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
            console.log(num)
            return (num + 1) % 2 <= 0;
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
