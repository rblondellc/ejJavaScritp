<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones</title>
    </head>
    <body>
        <script>
            
            function convertidor(grados_celcius){
                var grados_f = grados_celcius * 9/5 + 32;
                return grados_f;
            }
           
           console.log(convertidor(30));
           console.log(convertidor(40));
           console.log(convertidor(20));
           console.log(convertidor(35));
           
        </script>
    </body>
</html>