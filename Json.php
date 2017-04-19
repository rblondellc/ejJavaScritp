<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JSON</title>
    </head>
    <body>
        <script>
  
  //JSON
        var usuario = {
            nombre: 'Rakel',
            edad: 28,
            pais: 'Venezuela',
            mascotas: ['Negro','Blanco'],
            perfil: {
                tipo: 'privado',
                cuenta: 'premiun'
                },
            ciudad: 'Iquique'
            };
            
            console.log(usuario);
            
            //acceder al elemento mascotas
            
            console.log(usuario.mascotas);
            console.log(usuario.perfil.cuenta);
            
            //valor undefined
            
            console.log(usuario.ciudad);
            
            if(!usuario.ciudad){
                console.log('hola');
            }
            
            if ('ciudad' in usuario){
                console.log('el usuario tiene ciudad');
            }else{
                console.log('el usuario no tiene ciudad');
            }
            
        </script>
    </body>
</html>