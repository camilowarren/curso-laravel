var managerScreen = managerScreen || {};
managerScreen = {
    cambiar_color_fondo: function (color) {
        document.body.style.background = color;
    },
    saludar: function () {
        alert("hola muchachos");
    },
    ocultarParrafoConID: function () {
        document.getElementById('parrafo').style.display = 'none';
    },
    ocultarTodosLosParrafos: function (tag) {
        var ps = document.getElementsByTagName("p");
        for (i = 0; i < ps.length; i++) {
            ps[i].style.display = 'none';
        }
    },
    ocultaTodosLosElementosTag: function (tag) {
        $("p").hide();
    },
    desvanecer: function () {

    },
    alertify: function () {
        alertify.alert("Alertify dice hola");
        alertify.log("Notificacion","Success",10000);
        alertify.log("Notificacion","Error",7000);
        alertify.log("Notificacion","Success",8000);
        alertify.log("Notificacion","Success",5000);
        alertify.log("Notificacion","Error",2000);
        
        
    }
};
var ms = managerScreen;

/*JSON*/
//var persona = {
//    nombre: "camilo",
//    apellido: "Warren"
//};
//alert(persona.nombre);
//



//var a = 5;
//
//function menor_edad(edad) {
//    edad = prompt("Ingrese su edad");
//    if (edad < 18) {
//        alert("usted es menor de edad");
//        menor_edad();
//
//    }
//}
//menor_edad();
//
//alert("su edad es " + name);


