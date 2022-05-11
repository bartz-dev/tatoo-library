<template>
    <AppHomeButton  v-bind:description="artistaDescription" text="Cokney" @click="$router.push('/collectiondetail')" />
    <AppHomeButton  color-reversed="true" v-bind:description="artistbDescription" text="Appointment" />
</template>

<script>
import AppHomeButton from "./AppHomeButton";
export default {
    name: "AppCollectionsHome",
    components: {AppHomeButton},
    setup: () => ({
        artistaDescription: {
            title: 'Cokney',
            des: '4A6 May 2022',
            service: 'Japanese + Tribal',
            counted: 'Collection 3'
        },
        artistbDescription: {
            title: 'Bastian Blau',
            des: '12A15 April 2022',
            service: 'Ornemental',
            counted: 'Collection 2'
        }
    })
}
</script>

<style scoped>

</style>
