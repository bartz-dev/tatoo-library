<template>
    <div>
        <AppHomeButton class="text-9xl h-2/6" color-reversed="true" v-bind:description="buttonDescription" text="Editorial" />
        <div class="divide-gray-900 divide-y-[2px]">
            <div style="font-family: 'antiqueLegacy', sans-serif;" class="divide-gray-900 divide-y-[2px] text-center text-9xl">
                Preserving Tattooed Skin After Death
            </div>
            <div>
                <br>
            </div>
            <div></div>
            <div style="z-index: 3;" class="h-96 absolute divide-white divide-y text-white w-1/3 rounded-r-3xl bg-black">
                <div style="font-family: 'antiqueLegacy', sans-serif;" class="h-full  text-xl ml-8 pt-4 pr-8">
                    {{ first.description }}
                </div>
<!--                <br>-->
<!--                <div class="mr-8"><br></div>-->
            </div>
            <div class="h-96 absolute ml-8 bg-white divide-white divide-y text-white w-1/3 rounded-r-3xl">
                    {{ second.description }}

<!--                <div class="mr-8"><br></div>-->
<!--                <div></div>-->
            </div>
            <div class="h-96 ml-16 bg-black divide-white divide-y text-white w-1/3 rounded-r-3xl">
                <div style="font-family: 'antiqueLegacy', sans-serif;" class="h-full text-xl ml-8 pt-4 mr-8">
                    {{ third.description }}
                </div>
<!--                <div class="mr-8"><br></div>-->
<!--                <div></div>-->
            </div>
        </div>
    </div>
</template>

<script>
import AppHomeButton from "./AppHomeButton";

export default {
    name: "AppEditorialInfo",
    components: { AppHomeButton },
    setup: () => ({
        buttonDescription: {
            title: 'History & Context',
            des: 'Short',
            service: 'Online experience',
            counted: ''
        },
        first: {
            description:
                "As mentioned in the title of the editorial, the\n" +
                        "conservation of tattoo and tattooed skin has\n" +
                    "been a challenge for previous generations.\n" +
                    "Some forward thinkers such as Dr. Masaichi\n" +
                    "Fukushi1 tried to answer this problem in the\n" +
                    "years 1930A40, in Japan. This doctor's goal\n" +
                    "was to collect and preserve the skins of\n" +
                    "tattooed Japanese2. Originally, Japanese\n" +
                    "tattooing, also called \"Irezumi\" was a practice\n" +
                    "dedicated to the Yakuzas. Masaichi Fukushi\n" +
                    "was one of the precursors of this practice of\n" +
                    "tattoo conservation and some of his pieces\n" +
                    "are today exposed in a private collection at\n" +
                    "Tokyo University's Medical Pathology Museum.",
            title: 'Preserving Tattooed Skin After Death'
        },
        second : {
                    description:
                        'To preserve the tattoo and the works of art\n' +
                                'realized by tattoo artists around the globe\n' +
                            'turns out to be a complex and tedious task if\n' +
                            'we should use the method of Masaichi\n' +
                            'Fukushi. But today, thanks to the new\n' +
                            'techniques and the new digital production\n' +
                            'tools that we have at our disposal, it is now\n' +
                            'possible to archive and preserve these tattoos.\n' +
                            'Through photogrammetry1 (taking a picture of\n' +
                            'an object from all angles with a digital\n' +
                            'camera), we can digitize a tattoo in three\n' +
                            'dimensions and allow anyone to consult and\n' +
                            'discover it online. This platform aims to\n' +
                            'provide everyone with free access to\n' +
                            'numerous works of art made by artists of\n' +
                            'various reputations and from di¿erent\n' +
                            'backgrounds.',
            title: 'Archiving, Scanning, Digititalization'
        },
        third: {
            description:
                'With the rise of social networks and especially\n' +
                'Instagram, the visibility of tattoo art has grown\n' +
                'exponentially. However, some problems arise\n' +
                'when we talk about conservation, archiving\n' +
                'and consultation of these tattoos (censorship\n' +
                'of instagram towards genital parts, etc). Given\n' +
                'the inherent materiality of the tattoo (ink in the\n' +
                'skin, around a leg, an arm), photography\n' +
                'remains a medium too limited for a complete\n' +
                'conservation of the tattoo. This platform aims\n' +
                'at answering these numerous problems thanks\n' +
                'to new technologies (photogrammetry and 3D).',
            title: 'Preserving Tattooed Skin After Death'
        },
    })
}
</script>

<style scoped>

</style>
