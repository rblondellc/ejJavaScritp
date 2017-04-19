<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operaciones Booleanas</title>
    </head>
    <body>
        <script>
            var edad = 26;
            var tiempo_carrera = 10;
            var es_deportista = true;
            var es_fumador = false;
            
            // and "y" &&
            console.log(es_deportista && es_fumador);
           
           // or "o" //
           console.log(es_deportista || es_fumador);
           
           if(es_deportista && edad>20){
            console.log('gana premio');
           }
           
           if(es_fumador && edad>20){
                console.log('tiene mucha suerte');
           }
           
        </script>
    </body>
</html>