import {createStore} from "vuex";

export const store = createStore({
    state () {
        return {
            user: null,
        }
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
        },
    },
    getters: {
        getUser (state) {
            return state.user;
        },
    },
})
