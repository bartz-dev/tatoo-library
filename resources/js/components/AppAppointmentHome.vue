<template>
    <AppHomeButton class="text-3xl" :color-reversed="true" :description="description"  text="Appointment" />
</template>

<script>
import AppHomeButton from "./AppHomeButton";
export default {
    name: "AppAppointmentHome",
    components: {AppHomeButton},
    data: function () {
        return {
            description: {
                title: 'Take an appointment',
                des: 'Contact + Projects informations',
                service: 'Online form',
                counted: ''
            }
        }
    }
}
</script>

<style scoped>

</style>
