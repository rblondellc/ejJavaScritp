<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones</title>
    </head>
    <body>
        <script>
            
            function decorar(texto){
                return '###' + texto + '###';
            }
           
           console.log(decorar('Hola'));
           
           function decorar_mucho(texto){
                var a = decorar(texto);
                return '------' + a +'-------';
           }
           console.log(decorar_mucho('hola'));
        </script>
    </body>
</html>