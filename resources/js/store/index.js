import Vue from "vue";
import Vuex from "vuex";
import Language from "./Language.module.js";

Vue.use(Vuex);

const store = new Vuex.Store({
    modules: {
        language: Language
    }
});

export default store;
