import Homepage from "./components/HomePage";
import AppMenu from "./components/AppMenu";
import AppCollectionsHome from "./components/AppCollectionsHome";
import AppCollectionsDetail from "./components/AppCollectionsDetail";
import AppEditorialInfo from "./components/AppEditorialInfo";
import AppAppointmentHome from "./components/AppAppointmentHome";
import ImagePreview from "./components/ImagePreview"

export const routes = [
    {
        path: '/',
        name: 'home',
        components: {
            default: Homepage,
        }
    },
    {
        path: '/collections',
        name: 'Collections',
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
