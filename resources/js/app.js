import'./bootstrap';

import "primeicons/primeicons.css";
import "vue-awesome-paginate/dist/style.css";
import 'primevue/resources/primevue.css'


import {createApp} from 'vue'

import App from './App.vue'

const app = createApp(App);

import LoaderComponent from './components/LoaderComponent.vue';
app.component('LoaderComponent', LoaderComponent)

import {router} from'./router'
app.use(router)

import PrimeVue from 'primevue/config';
app.use(PrimeVue)

import TabMenu from 'primevue/tabmenu';
app.component('TabMenu', TabMenu)

import Menubar from 'primevue/menubar';
app.component('Menubar', Menubar)

import ScrollTop from "primevue/scrolltop";
app.component('ScrollTop', ScrollTop)

import Button from "primevue/button";
app.component('Button', Button)

import Card from 'primevue/card';
app.component('Card', Card)

import Chip from 'primevue/chip';
app.component('Chip', Chip)

import Dropdown from "primevue/dropdown";
app.component('Dropdown', Dropdown)

import MultiSelect from "primevue/multiselect";
app.component('MultiSelect', MultiSelect)

import InputText from "primevue/inputtext";
app.component('InputText', InputText)

import Calendar from "primevue/calendar";
app.component('Calendar', Calendar)

import Paginator from "primevue/paginator";
app.component('Paginator', Paginator)

import Tag from "primevue/tag";
app.component('Tag', Tag)

import {Qalendar} from "qalendar";
app.use(Qalendar)

import VueAwesomePaginate from "vue-awesome-paginate";
app.use(VueAwesomePaginate)

app.mount("#app")
