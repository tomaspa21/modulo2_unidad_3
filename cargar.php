<?php

session_start();


if(isset($_SESSION['admin'])){
include("header.php");
       
    $nro1 = rand(0, 9);
    $nro2 = rand(0, 9);
    $nro3 = rand(0, 9);
    $letra = array('a', 'h', 'g', 'l', 'd', 'm', 'k');
    $simbolo = array('%', '$', '/', '@', '#');
    $mezcla_letra = rand(0, 6);
    $mezcla_simbolo = rand(0, 4);
    
    $_SESSION['codigo_captcha'] = $nro1 . $letra[$mezcla_letra] . $nro2 . $simbolo[$mezcla_simbolo] . $nro3;
    
    ?>

        <section class= "contenedor_carga">
            <h3> Carga de Componentes</h3>
            <form action="cargar_componente.php" method="post" class= "formulario">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellido" placeholder="Apellido">
                <input type="text" name="funcion" placeholder="Funcion">
                <input type="text" name="imagen" placeholder="Imagen">
                <textarea name="descripcion" id="" cols="19" rows="10"></textarea>
                
               
                <img src="captcha.php" alt="captcha">
                <input type="text" name="captcha" placeholder="Ingresa Captcha">
                <input type="submit" value="Cargar Componente">

            </form> 
            
     
        </section>

        <?php 
         
         if (isset ($_GET['error_codigo'])){
              
            echo "<h3> Codigo de verificacion incorrecto </h3>";
        }


        if (isset ($_GET['ok'])){
              
            echo "<h3> Componente Cargado con Exito </h3>";
        } 
        }else{
           header("Location:index.php");
        }
   
    ?>
    
</body>
</html>
