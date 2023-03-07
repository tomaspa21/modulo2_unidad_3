<?php include("header.php"); ?>


    <section class= "contenedor_carga">
        <h3> Ingreso </h3>
        <form action="validar.php" method="post" class= "formulario">
            <input type="text" name="usuario" required placeholder="Usuario">
            <input type="password" name="clave" placeholder="Clave">
            <input type="submit" value=" Ingresar ">

        </form> 


    </section>
    <?php 
    if (isset ($_GET['error'])){

        echo "<h3> Datos incorrectos </h3>";
    }
    
    ?>



</body>
</html>