import Homepage from "./components/HomePage";
import AppMenu from "./components/AppMenu";
import AppCollectionsHome from "./components/AppCollectionsHome";
import AppCollectionsDetail from "./components/AppCollectionsDetail";

export const routes = [
    {
        path: '/',
        name: 'home',
        components: {
            default: Homepage,
            Menu: AppMenu
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
        path: '/collectiondetail',
        name: 'CollectionDetail',
        components: {
            default: AppCollectionsDetail,
            Menu: AppMenu
        }
    }
];
