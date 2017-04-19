<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Objetos</title>
    </head>
    <body>
        <script>
       
            var obj = new Object();
            
            obj.nombre = 'Rakel';
            obj['edad'] = 28;
            
            console.log(obj.nombre);
            console.log(obj['nombre']);
            
            console.log(obj.edad);
            console.log(obj['edad']);
            
            //metodos
            
            obj.sumar = function(x, y){
                return x+y;
            }
            
            var a = obj.sumar(1, 10);
            console.log(a);
            
        </script>
    </body>
</html>