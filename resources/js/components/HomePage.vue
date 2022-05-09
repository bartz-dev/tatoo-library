<template>
    <AppHomeButton  v-bind:description="collectionDescription" text="Collections" />
    <AppHomeButton  color-reversed="true" v-bind:description="appointmentDescription" text="Appointment" />
</template>
<script>
import AppHomeButton from "./AppHomeButton";
export default {
    name: 'homepage',
    components: {AppHomeButton},
    setup: () => ({
        title: 'Collections 1',
        collectionDescription: {
            title: 'Platform for inkers and inked',
            des: 'Digitalizing artworks and body parts',
            service: 'Online experience',
            counted: 0
        },
        appointmentDescription: {
            title: 'Take an appointment',
            des: 'For tattoo artist and tattooed',
            service: 'Online form',
            counted: ''
        }
    })
}
</script>
