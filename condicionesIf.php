<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Condiciones IF</title>
    </head>
    <body>
        <script>
           var distancia = 100; 
           
           if (distancia > 100){
                console.log('lejos');
           }else{
                console.log('cerca');
           }
           
           var condicion = distancia == 100;
           console.log(condicion);
           
           if (condicion){
                console.log('La condicion es verdadera');
           }
           
        </script>
    </body>
</html>