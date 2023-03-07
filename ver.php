<?php include("header.php"); ?>


<section class="contenedor_componentes">

<?php include ("conexion.php");
$consulta_db = mysqli_query($conexion_db, "SELECT *FROM componentes");

while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)){

    ?>

     <div class= "caja_componente">

         <h2> <?php echo $mostrar_datos ['nombre']. "\r\n" . $mostrar_datos ['apellido']; ?></h2>

         <h3> <?php echo $mostrar_datos ['funcion']; ?></h3>

         <img src="img/<?php echo $mostrar_datos ['imagen'] ?>" alt="<?php echo $mostrar_datos ['nombre'] ?>">

         <p>
            <?php echo $mostrar_datos['descripcion']; ?>
         </p>
         </div>             
         <a href="eliminar.php?id=<?php echo $mostrar_datos['id']; ?>"> Eliminar </a>

     
     

<?php
 }
 ?>

</section>






