<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Break</title>
    </head>
    <body>
        <script>
             var num = 1;
            
            while(num <= 100){
                console.log(num);
                //num = num + 1;
                
                if(num == 50){
                    break;
                }
                
                num++;
                
            }
            
            console.log('se acaba la iteracion');
            console.log('el valor final de num es:' + num);
            
        </script>
    </body>
</html>