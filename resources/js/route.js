import Homepage from "./components/HomePage";
import AppMenu from "./components/AppMenu";

export const routes = [
    {
        path: '/',
        name: 'home',
        components: {
            default: Homepage,
            Menu: AppMenu
        }
    },
];
