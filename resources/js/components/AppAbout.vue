<template>
    <div>
    <AppHomeButton class="text-9xl h-2/6" color-reversed="true" v-bind:description="buttonDescription" text="About" />
        <!--    first  -->
    <div class="divide-gray-900 divide-y-[2px]">
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="leading-none divide-gray-900 divide-y-[2px] text-center text-[144px]">
            Preserving Tattooed Skin After Death
        </div>
        <div>
            <br>
        </div>
        <div></div>
    </div>
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="superpose">
                <div style="z-index: 3;" class="antiqueLegacy bg-black pl-4 p-5 rounded-3xl text-2xl text-white child">
                    {{ firstEdit.description }}
                </div>
                <div style="z-index: 2;" @Click="isActive = !isActive" :class="{'slide-right': isActive }"  class="bg-transparent ml-4 child other-child w-full h-full">
                    <img class="img-background" src="/images/drm.jpg" alt="drm">

                </div>
            <div @Click="secIsActive = !secIsActive" :class="{'slide-right': secIsActive }" class="ml-4 child w-full h-full last-child">
                <img class="img-background" src="/images/tattoo-time-vol-4-dr-fukushi-2.jpg" alt="tattoo-time">
            </div>
        </div>
        <div class="h-8 w-full bg-black"></div>
    </div>
    <!--    second  -->-
    <div class="divide-gray-900 divide-y-[2px]">
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="leading-none divide-gray-900 divide-y-[2px] text-center text-[144px]">
            Archiving, Scanning, Digititalization
        </div>
        <div>
            <br>
        </div>
        <div></div>
    </div>
    <div style="font-family: 'antiqueLegacy', sans-serif;" class="superpose">
        <div style="z-index: 3;" class="antiqueLegacy bg-black pl-4 p-5 rounded-3xl text-2xl text-white child">
            {{ secondEdit.description }}
        </div>
        <div style="z-index: 2;"  @Click="thirdIsActive = !thirdIsActive" :class="{'slide-right': thirdIsActive }" class="bg-transparent ml-4 child other-child w-full h-full">
            <img class="img-background" src="/images/metashape.jpg" alt="metashape">
        </div>
<!--        <div @Click="thirdIsActive = !thirdIsActive" :class="{'slide-right': thirdIsActive }" class="pl-4 pt-3 rounded-3xl text-xl rounded-3xl child last-child">-->
<!--            <div style="font-family: 'antiqueLegacy', sans-serif;" class="inline-block h-full text-xl ml-8 pt-4 mr-8">-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <div class="h-8 w-full bg-black"></div>

<!--    third  -->
    <div class="divide-gray-900 divide-y-[2px]">
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="leading-none divide-gray-900 divide-y-[2px] text-center text-[144px]">
            Open Access For A Cultural Heritage
        </div>
        <div>
            <br>
        </div>
        <div></div>
    </div>
    <div style="font-family: 'antiqueLegacy', sans-serif;" class="superpose">
        <div style="z-index: 3;" class="bg-black pl-4 p-5 rounded-3xl text-2xl text-white child">
            {{ thirdEdit.description }}
        </div>
        <div style="z-index: 2;" @Click="isActive = !isActive" :class="{'slide-right': isActive }" class="pl-4 pt-3 rounded-3xl text-xl pr-8 child other-child">

        </div>
        <div @Click="secIsActive = !secIsActive" :class="{'slide-right': secIsActive }" class="pl-4 pt-3 rounded-3xl text-xl rounded-3xl child last-child">
<!--            <div style="font-family: 'antiqueLegacy', sans-serif;" class="inline-block h-full text-xl ml-8 pt-4 mr-8">-->
<!--            </div>-->
        </div>
    </div>
    <div class="h-8 w-full bg-black"></div>

    <div>
        <div class="bg-black border-b-2 border-white">
            <div class="h-6"><br></div>
        </div>
        <AppAboutButton :description="first" :text="first.text" :secondText="first.description" :colorReversed="true" />
        <div class="text-cols border-b-2 border-black">
            <div class="h-6"><br></div>
        </div>
        <AppAboutButton :description="second" :text="second.text" :colorReversed="false" />
        <div class="border-t-2 border-black bg-white">
            <div class="h-6"><br></div>
        </div>
        <div class="border-b-2 bg-black">
            <div class="h-6"><br></div>
        </div>
        <AppAboutButton :description="third" :text="third.text" :colorReversed="true" />
    </div>
</template>

<script>
import AppAboutButton from "./AppAboutButton";
import AppHomeButton from "./AppHomeButton";
export default {
    name: "app-about",
    components: { AppAboutButton, AppHomeButton },
    data() {
        return {
            isActive: false,
            secIsActive: false,
            thirdIsActive: false
        }
    },
    setup: () => ({
        first: {
            title: 'About',
            text: "Skinner Project is a platform allowing tattoo artists from all over the world to present their works in 3D using photogrammetry technology. Facing a long-standing problem in the communication of tattoo artists, namely the classic photos, this platform offers a new innovative way to discover tattoos in three dimensions.",
            description : "This project began in March 2022 as part of Tanguy Morvan's practical bachelor's degree at HEAD (Haute École d'Art et de Design) in Geneva with the support of his brother Malow Morvan",
            des: 'Info',
            service: 'Context',
            counted: ''
        },
        second: {
            title: '',
            text: 'Born from the mix of passions (tattoos and digital design) of the graphic designer Tanguy Morvan, the project [InkedIn] Ànds its place in an experimental initiative but remains completely functional and can serve each artist who wishes it. Don\'t hesitate to get in in touch to talk about this project and how you could be scanning your tattoos tomorrow in the Skinner',
            des: '',
            service: '',
            counted: ''
        },
        third: {
            title: 'Contact',
            text: 'Don\'t hesitate to get in in touch to talk about this project and how you could be scanning your tattoos tomorrow in the Skinner Project',
            des: '',
            service: '',
            counted: ''
        },
        buttonDescription: {
            title: 'History & Context',
            des: 'Short',
            service: 'Online experience',
            counted: ''
        },
        firstEdit: {
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
        secondEdit : {
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
        thirdEdit: {
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

<style>

.img-background {
    border-radius: 20px;
    width: 100%;
    height: 100%;
}
.superpose {
    position: relative;
    width: 50%;
    height: 450px;
    margin-left: 10px;
}
.child {
    z-index: 2;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
.other-child {
    z-index: 1;
    margin-left: 30px;
}
.last-child {
    z-index: 1;
    margin-left: 60px;
    background-color: transparent;
}

.slide-right {
	-webkit-animation: slide-right 1.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) forwards;
	        animation: slide-right 1.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) forwards;
}

@-webkit-keyframes slide-right {
  0% {
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
  }
  100% {
    -webkit-transform: translateX(90%);
            transform: translateX(90%);
  }
}
@keyframes slide-right {
  0% {
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
  }
  100% {
    -webkit-transform: translateX(90%);
            transform: translateX(90%);
  }
}
</style>
