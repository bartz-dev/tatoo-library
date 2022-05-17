<template>
<!--    <AppHomeButton  class="text-9xl" v-bind:description="artistaDescription" text="Cokney" @click="$router.push('/collectiondetail')" />-->
<!--    <AppHomeButton  class="text-9xl" color-reversed="true" v-bind:description="artistbDescription" text="Appointment" />-->
    <div class="flex mt-4 border-t-2 border-black w-full h-full">
        <div class="flex-col border-r-2 border-black w-1/6">
            <div class="mt-4">
                <Button  :reversed="activeList === 0"  :src="activeList === 1 ? 'images/button_artist.svg' : 'images/button_artist_black.svg'" text="Filters" @click="activeList = 0" />
            </div>
            <div class="mt-4">
                <Button :reversed="activeList === 1"  :src="activeList === 1 ? 'images/button_artist_black.svg' : 'images/button_artist.svg'" text="Style" @click="activeList = 1" />
            </div>
        </div>
        <div class="mt-4">
            <ButtonArtist src="images/button_artist.svg"  text="Cokney" />
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
    }
}
</script>

<style scoped>
</style>
