<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <div class="cabecera">
        <h1>Tienda Peluches</h1>
        <h2>6. Sesiones y Cookies</h2>
    </div>

    <div class="productos">
        <p>Productos</p>

        <?php 
            ini_set('display_errors','1');
            error_reporting(E_ALL);

            $conexion = new PDO('mysql:host=localhost;dbname=peluche','dwes','abc123');
            $producto = $conexion->query("SELECT * FROM producto");
            
            while($productoF = $producto->fetch()){

                echo "Nombre: ".$productoF['nombre'];
        ?>
                
                <img width="100" src="data:image/png;base64,<?php echo base64_encode($productoF['imagen']); ?>"></img>

        <?php
                echo "<br>";
                
                echo "Descripcion: ".$productoF['descripcion']."<br>";
                
                
                                        
                //     if($result->num_rows > 0){
                       
                //         //Render image
                //         header("Content-type: image/jpg"); 
                //         echo $imgData['image']; 

                    
                //    }
                
                echo "<br>";
             }
            

             

            

        ?>
    <img alt="">
    </div>
    
</body>
</html>