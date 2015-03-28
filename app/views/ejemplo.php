<html>
    <head>
        <!--       inicio pickadate-->

        <script src="./libs/pickadate/lib/picker.date.js" ></script>

        <!-- Add the stylings *after* the pickadate theme files -->
        <link rel="stylesheet" href="lib/themes/rtl.css">

        <!-- Add the language *after* the pickadate script files -->
        <script src="lib/translations/ar.js"></script>
        
        <link rel="stylesheet" type="text css"href="./libs/pickadate/lib/themes/default.date.css">
        
        <!--       fin pickadate-->        

        <script src="./libs/alertify/lib/alertify.min.js" ></script>

        <script src = "../public/assets/js/app.js" ></script>
<!--        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>-->
        <script src="//code.jquery.com/jquery-2.0.0.min.js"></script>
        
        
        <link rel="stylesheet" type="text css"href="./libs/alertify/themes/alertify.default.css">
        <link rel="stylesheet" type="text css"href="./libs/alertify/themes/alertify.core.css">


        <script type="text/javascript" src="./../assets/js/jquery.complexify.js"></script>
        <script type="text/javascript">

                    $("#password").complexify({}, callback(valid, complexity){
            alert("Password complexity: " + complexity);
            });</script>


    </head>

    <body>
        <button onclick="ms.saludar()">saludar </button> 
        <button onclick="ms.cambiar_color_fondo('green')">verde </button>
        <button onclick="ms.cambiar_color_fondo('red')">rojo </button>
        <button onclick="ms.ocultarParrafoConID()">ocultar </button>
        <button onclick="ms.ocultarTodosLosParrafos('')">ocultar todos </button>
        <button onclick="ms.mostrarTodosLosParrafos('')">mostrar </button>
        <button onclick="ms.ocultaTodosLosElementosTag('tag')">ocultar todos tag</button>
        <button onclick="ms.desvanecer()">desvanecer </button>
        <button onclick="ms.alertify()">aletify </button>
        <button onclick="ms.pickadate()">pickadate </button>
        <p>esto es un parrafo</p>

    </body>
</html>