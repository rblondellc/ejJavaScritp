<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Combinando Funciones con Condiciones</title>
    </head>
    <body>
        <script>
               
                
            function mensaje_final(nota){
                switch (nota){
                    
                    case 'A':
                        console.log('muy bien!!');
                        return 'muy bien!';
                        break;
                    
                    case 'B':
                        console.log('bien');
                        break;
                    
                    case 'C':
                        console.log('mmm mas o menos :S');
                        break;
                    
                    default:
                        console.log('no se que decir');
                        break;
                }
            }
            
            var resultado = mensaje_final('A');
            
            console.log(resultado);
            
            mensaje_final('C');
            mensaje_final('B');
            
            function decorador(nombre, genero){
                    if (genero == 'M'){
                        return 'Sr. ' + nombre;
                    }
                    else if (genero == 'F'){
                        return 'ingresar M  o  F';
                    }
            }
            
            console.log(decorador('Pablo', 'F'));
            
        </script>
    </body>
</html>