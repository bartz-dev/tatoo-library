import Homepage from "./components/HomePage";

export const routes = [
    {
        path: '/',
        name: 'home',
        components: {
            default: Homepage,
        }
    },
];
