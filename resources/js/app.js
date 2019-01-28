
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

// Filtros con Vue
var filtro = new Vue({
    el: '#filtro',
    data:{
        filtroFecha: [
            {fecha:'Mas Recientes'},
            {fecha:'Últimas 24 horas '},
            {fecha:'Últimos 7 días'}
        ],
        filtroProv:[
            {provincia:'Álava/Araba'},
            {provincia:'Vizcaya/Bizkaia'},
            {provincia:'Guipúzcoa/Gipuzkoa'},
        ],
        filtroCat: [
            {categoria:'Desarrollo Web'},
            {categoria:'Multiplataforma'},
            {categoria:'Servicios en Red'},
        ],
        filtroCat2: [
            {categoria2:'Quimica'},
            {categoria2:'Gestion de Ventas'},
            {categoria2:'Administacion y Finanzas'},
        ],
        filtroEstudios: [
            {estudios: 'Grado Superior'},
            {estudios: 'Grado Medio'},
        ],
        mostrar:                
             false,
        
    }
}) ;