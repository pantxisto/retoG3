
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
// Componente Vue de prueba.

// Filtros con Vue
var filtro = new Vue({
    el: '#filtro',
    data:{
        mensajeFallo: 'Contenido en mantenimiento, disculpen las molestias',
        mensajeEmpresas: '',
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
        mostrar: false,
        
    },
    methods: {
        
        cambiarEstado: function() {
            this.mostrar = !this.mostrar;
            if(this.mostrar) {
                $("#cambiarFiltro").html("Mostrar menos");
               
            }else if(!this.mostrar) {
                $("#cambiarFiltro").html("Mostrar más");
            }
        }
    }
}) ;

var filtroEmpresa = new Vue({
    el: '#filtroEmp',
    data:{
        mensajeEmpresas: '',
        filtroFecha: [
            {fecAlta:'Mas Recientes'},
            {fecAlta:'Últimas 24 horas '},
            {fecAlta:'Últimos 7 días'}
        ],
        filtroProv:[
            {provincia:'Álava/Araba'},
            {provincia:'Vizcaya/Bizkaia'},
            {provincia:'Guipúzcoa/Gipuzkoa'},
        ],
        filtroNom: [
            {nomEmpresa:'A-Z'},
            {nomEmpresa:'Z-A'},
        ],
        mostrar: false,
    },
    
}) ;

new Vue({
    el:'#infoContactos',
    data: {
        infoContactos: 'Si necesitas consultar algo no dudes.'
    }
})


$(document).ready(function() {
    //Validaciones
     $("#name").focusout(function(){
        var elementoContenido = $(this).val();
        var expNom = /[a-zA-Z]{2,25}/;
        if(elementoContenido.length == 0 || !expNom.test(elementoContenido)) {
            $("#errorValidacion").html("<strong>Error!</strong> Compruebe que el campo Nombre este bien escrito.");
            $(this).css('border', ' solid red');
        }  else{
            $(this).css('border', ' solid green');
            $("#errorValidacion").html("");
        }
     })

     $("#surname").focusout(function(){
        var elementoContenido = $(this).val();
        var expApe = /[a-zA-Z]{4,65}/;
        if(elementoContenido.length == 0 || !expApe.test(elementoContenido)) {
            $("#errorValidacion").html("<strong>Error!</strong> Compruebe que el campo Apellidos este bien escrito.");
            $(this).css('border', ' solid red');
        }else{
            $(this).css('border', ' solid green');
            $("#errorValidacion").html();
        }
     })

    $("#email").focusout(function (){
        var elementoContenido = $(this).val();
        var expCor = /\S+@\S+\.\S+/;
        // .test() compara una cadena(El valor del correo) con una expresion regular.
        if(!expCor.test(elementoContenido)) {
            $("#errorValidacion").html("<strong>Error!</strong> Compruebe que el campo Correo este bien escrito");
            $(this).css('border', ' solid red');
        }else{
            $(this).css('border', ' solid green');
            $("#errorValidacion").html();
        }
    })
    $("#password").focusout(function (){ var elementoContenido = $(this).val(); var expCon = /^.{6,}$/; if(elementoContenido.length == 0 || !expCon.test(elementoContenido)) { $("#errorValidacion").html("Error! Compruebe que el campo Pass este bien escrito.(Se necesita 6 caracteres)"); $(this).css('border', ' solid red'); }else{ $(this).css('border', ' solid green'); $("#errorValidacion").html(""); } })
    
    //+DOM & Eventos
    $('.botonOfertas').click(function(){
        $(this).html("Volver a ver");
    })

    $('#contacto').mouseenter(function() {
        $(this).css({
            '-webkit-transform':'scale(1.3)',
            '-moz-transform': 'scale(1.3)',
            '-o-transform': 'scale(1.3)',
            '-ms-transform': 'scale(1.3)'
          });
    })

    $('#contacto').mouseleave(function() {
        $(this).css({
            '-webkit-transform':'scale(1.0)',
            '-moz-transform': 'scale(1.0)',
            '-o-transform': 'scale(1.0)',
            '-ms-transform': 'scale(1.0)',
            border: '50%'
          });
    })
    
});  