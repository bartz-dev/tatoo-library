import Homepage from "./components/HomePage";
import AppMenu from "./components/AppMenu";
import AppCollectionsHome from "./components/AppCollectionsHome";
import AppCollectionsDetail from "./components/AppCollectionsDetail";
import AppEditorialInfo from "./components/AppEditorialInfo";
import AppAppointmentHome from "./components/AppAppointmentHome";
import AppAbout from './components/AppAbout'

export const routes = [
    {
        path: '/about',
        name: 'about',
        components: {
            default: AppAbout,
            Menu: AppMenu
        }
    },
    {
        path: '/viewer/:artist_id/p=:payload',
        name: 'three',
        components: {
            Menu: AppMenu
        }
    },
    {
        path: '/',
        name: 'home',
        components: {
            default: Homepage,
        }
    },
    {
        path: '/artistsdetail',
        name: 'artists',
        components: {
            default: AppCollectionsHome,
            Menu: AppMenu
        }
    },
    {
        path: '/artists/:artist=:id',
        name: 'ArtistDetail',
        components: {
            default: AppCollectionsDetail,
            Menu: AppMenu
        }
    },
    // {
    //     path: '/artists/:artist=:id/:collection_id',
    //     name: 'CollectionViewer',
    //     components: {
    //         default: CollectionViewer,
    //         Menu: AppMenu
    //     }
    // },
    {
        path: '/collectiondetail',
        name: 'CollectionDetail',
        components: {
            default: AppCollectionsDetail,
            Menu: AppMenu
        }
    },
    {
        path: '/editorial',
        name: 'Editorial',
        components: {
            default: AppEditorialInfo,
            Menu: AppMenu
        }
    },
    {
        path: '/appointment',
        name: 'Appointment',
        components: {
            default: AppAppointmentHome,
            Menu: AppMenu
        }
    }
];
