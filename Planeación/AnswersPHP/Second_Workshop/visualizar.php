<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link href="css/estilos.css" rel="stylesheet" type="text/css">
<title>Formulario de Registro</title>

</head>

<body>

<center><div class="tabla" >
    <table border="4" >
        <thead>
            <tr>
                <th colspan="1"><a href="formulario.php"><img class="photo" src="img/nuevo.png"></a></th>
                <th colspan="5"lista de usuarios inscriptos</th>
         <h3><img class="left" src="img/izquierda.png " > Agregar nuevo usuario</h3>
    </tr>
    </thead>
    <tbody>
        </tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Telefono</td>
    <td colspan="2" >Operaciones</td>
   
    </tr>
    <?php
    include ("conexion.php");
    $query="SELECT * FROM usuarios";
    $resultado= $conexion->query($query);
    while ($row=$resultado->fetch_assoc()){
       ?>
    
    <tr>
        <td><?php echo $row['id'];?> </td>
           <td><?php echo $row['nombre'];?></td>
           <td><?php echo $row['apellido'];?></td>
           <td><?php echo $row['telefono'];?></td>
           
           <td><a href="editar.php?id=<?php echo $row['id'];?>"><img class="photo" src="img/editar.png " ></a></td>
           <td><a href="eliminar.php?id=<?php echo $row['id'];?>"><img class="photo" src="img/eliminar.png " ></a></td>

    </tr>
    <?php
    }
      ?>
    </tbody>
    </table>
        <br>
        <a href="formulario.php"> <img class="photo" src="img/atras.png " ></a>

</center></div>
</body>
</html>