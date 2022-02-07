<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@100&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="cabecera">
        <h1>Tienda Peluches</h1>
        <h2>6. Sesiones y Cookies</h2>
    </div>

    <div class="productos">
        

        <?php 
            // ini_set('display_errors','1');
            // error_reporting(E_ALL);
            
            $contador = 0;
            $p1 = $_POST['p1'];
            $p2= $_POST['p2'];
            $p3 = $_POST['p3'];
            $p4 = $_POST['p4'];

            $conexion = new PDO('mysql:host=localhost;dbname=peluche','dwes','abc123');
            $producto = $conexion->query("SELECT * FROM producto");
            
            echo "<div class='container'>";
            
            while($productoF = $producto->fetch()){
                echo "<div class='producto'>";
                $contador += 1;
                
            ?>
                <img width="100" src="data:image/png;base64,<?php echo base64_encode($productoF['imagen']); ?>"></img>
            <?php
                
                echo "<div class='nombre'>".$productoF['nombre']."</div>";
        
                echo "<div class='desc'><p>".$productoF['descripcion']."</p></div>";

                echo "<div class='precio'><p>".$productoF['precio']."€ </p></div>";

                
                if($contador == 1){
                    ?>
                <form action="#" method="POST">
                    <input type="hidden" name="p1" value="<?php echo $productoF['cod'];?>">
                    <input type="submit" value="COMPRAR">
                </form>
                    <?php
                }else if($contador == 2){
                    ?>
                <form action="#" method="POST">
                    <input type="hidden" name="p2" value="<?php echo $productoF['cod'];?>">
                    <input type="submit" value="COMPRAR">
                </form>
                    <?php
                }else if($contador == 3){
                    ?>
                <form action="#" method="POST">
                    <input type="hidden" name="p3" value="<?php echo $productoF['cod'];?>">
                    <input type="submit" value="COMPRAR">
                </form>
                    <?php
                }else if($contador == 4){
                    ?>
                <form action="#" method="POST">
                    <input type="hidden" name="p4" value="<?php echo $productoF['cod'];?>">
                    <input type="submit" value="COMPRAR">
                </form>

                <?php
                }
                
                
                echo "</div>";
            }
                
            echo "</div>";
        ?>
    </div>
        <?php 

        if(isset($p1) || isset($p2) || isset($p3) || isset($p4) ){
            ?>
                <div class="carrito">
                    <p class="carritoTitulo">Carrito</p>

                    <?php 
                    
                    if(isset($p1)){
                        $showP1 = $conexion->query("SELECT nombre,precio,imagen FROM producto WHERE cod=1");
                        $sp1 = $showP1 ->fetch();

                    echo "<div class='sp1'>";
                        ?>
                            <img width="100" src="data:image/png;base64,<?php echo base64_encode($sp1['imagen']); ?>"></img>
                        <?php
                            echo "<div> <p class='carritoP'>".$sp1['nombre']."</p> </div>";
                            echo "<div><p class='carritoPrecio'>Precio: ".$sp1['precio']."€</p></div>";
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="e1">
                                <input id="eliminar" type="submit" value="ELIMINAR">
                            </form>
                        <?php
                    echo "</div>";

                    }
                    
                    if(isset($p2)){
                        $showP2 = $conexion->query("SELECT nombre,precio,imagen FROM producto WHERE cod=2");
                        $sp2 = $showP2 ->fetch();

                    echo "<div class='sp2'>";
                        ?>
                            <img width="100" src="data:image/png;base64,<?php echo base64_encode($sp2['imagen']); ?>"></img>
                        <?php
                            
                            echo "<div> <p class='carritoP'>".$sp2['nombre']."</p> </div>";
                            echo "<div><p class='carritoPrecio'>Precio: ".$sp2['precio']."€</p></div>";
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="e2">
                                <input id="eliminar" type="submit" value="ELIMINAR">
                            </form>

                        <?php
                    echo "</div>";
                    }

                    if(isset($p3)){
                        $showP3 = $conexion->query("SELECT nombre,precio,imagen FROM producto WHERE cod=3");
                        $sp3 = $showP3 ->fetch();
                    echo "<div class='sp3'>";
                        ?>
                            <img width="100" src="data:image/png;base64,<?php echo base64_encode($sp3['imagen']); ?>"></img>
                        <?php
                            
                            echo "<div> <p class='carritoP'>".$sp3['nombre']."</p> </div>";
                            echo "<div><p class='carritoPrecio'>Precio: ".$sp3['precio']."€</p></div>";
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="e3">
                                <input id="eliminar" type="submit" value="ELIMINAR">
                            </form>
                        <?php
                    echo "</div>";
                    }

                    if(isset($p4)){
                        $showP4 = $conexion->query("SELECT nombre,precio,imagen FROM producto WHERE cod=4");
                        $sp4 = $showP4 ->fetch();
                        
                    echo "<div class='sp4'>";
                        ?>
                            <img width="100" src="data:image/png;base64,<?php echo base64_encode($sp4['imagen']); ?>"></img>
                        <?php
                            
                            echo "<div> <p class='carritoP'>".$sp4['nombre']."</p> </div>";
                            echo "<div><p class='carritoPrecio'>Precio: ".$sp4['precio']."€</p></div>";
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="e4">
                                <input id="eliminar" type="submit" value="ELIMINAR">
                            </form>
                        <?php
                    echo "</div>";
                    }
                
                    ?>
                </div>
            <?php
            
        }
        
        
        ?>
    
</body>
</html>