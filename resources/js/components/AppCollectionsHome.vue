<template>
<div>
    <div class="absolute artist-menu border-t border-black w-full h-full">
        <div class="text-3xl flex-col border-filter border-black md:w-full w-96">
            <div class="m-4">
                <Button style="width: 99%" :reversed="activeList === 0"  :src="activeList === 1 ? '/images/filters.svg' : '/images/filters.svg'" text="Filters" @click="activeList = 0" />
            </div>
            <div class="m-4">
                <Button style="width: 99%" src="/images/style-bodypart.svg" text="Style" />
            </div>
            <div style="font-family: 'antiqueLegacy', sans-serif;" :class="{'text-blue-700': active === 0}" @click="resetArtists" class="cursor-pointer text-3xl text-center">All</div>
            <div v-for="tag in tags" @click="sortArtists(tag)" :class="{'text-blue-700': active === tag.tag_id}" style="font-family: 'antiqueLegacy', sans-serif;" class="cursor-pointer text-3xl text-center">
                <div v-if="tag.type === 'style'">
                    {{ tag.nom }}
                </div>
            </div>

            <div class="m-4">
                <Button style="width: 99%" src="/images/style-bodypart.svg" text="Body Part" />
            </div>
            <div v-for="tag in tags" @click="sortArtists(tag)" :class="{'text-blue-700': active === tag.tag_id}" style="font-family: 'antiqueLegacy', sans-serif;" class="cursor-pointer text-3xl text-center">
                <div v-if="tag.type === 'body'">
                    {{ tag.nom }}
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="m-3" v-for="(artist, index) in filteredArtists" :key="artist.artist_id">
                <router-link class="relative" :to="'/artists/' + artist.nom.toLowerCase() + '=' + artist.artist_id">
                    <ButtonArtist v-if="pair(index)" :reversed="pair(index)" :src="'/assets/' + artist.payload+ '.jpg'" v-bind:class="'rounded-[100px] bg-black text-white ' + backgrounding(artist)" :text="artist.nom" />
                    <ButtonArtist v-else :reversed="!pair(index)" v-bind:class="'rounded-[100px] bg-white text-black ' + backgrounding(artist)" :src="'/assets/' + artist.payload + '.jpg'"   :text="artist.nom" />
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
    components: { ButtonArtist, Button, AppHomeButton },
    data() {
        return {
            artists: [],
            filteredArtists: [],
            tags: [],
            active: 0
        }
    },
    props: {
        activeList: {
            default: 0
        }
    },
    methods: {
        resetArtists() {
            this.active = 0;
            this.filteredArtists = this.artists;
        },
        sortArtists(tag) {
            var matchedKeys = [];
            var notMatchedKeys = [];
            this.active = tag.tag_id

            for (var artist of this.artists) {
                for (var index in artist.tags) {
                    if (tag.tag_id.toString().match(artist.tags[index].tag_id)) {
                        //dummy logic
                        matchedKeys.push(artist); //push on the basis of order
                        break;
                    } else {
                        notMatchedKeys.push(artist);
                    }
                }
            }

            this.filteredArtists = matchedKeys;
        },
        pair(num) {
            return (num + 1) % 2 <= 0;
        },
        backgrounding(artist) {
            return window.screen.width > 768 ? 'hover:bg-[url(/assets/' + artist.payload + '.jpg)]' : '';
        }

    },
    mounted() {
        this.$http.get('/api/artists')
            .then(res => {
                this.artists = res.data
                this.filteredArtists = res.data;
            });

        this.$http.get('/api/tags')
            .then(res => this.tags = res.data);
    }
}
</script>

<style scoped>
</style>
