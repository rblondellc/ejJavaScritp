<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Else IF else</title>
    </head>
    <body>
        <script>
            var nota = 1;
            
            if (nota > 4){
                console.log('aprobado');
            }
            else if (nota > 3 && nota <= 4){
                console.log('casi reprobado');   
            }
            else if (nota > 2 && nota <= 3){
                console.log('casi casi reprobado');   
            }
            
            else{
                console.log('reprobado');
            }
           
        </script>
    </body>
</html>