<link href="css/estilos.css" rel="stylesheet" type="text/css">
   <center> 
 <table border="4" >
     <th>
   <div class="group">
   
  
   <?php
       $id=$_REQUEST['id'];
       
    include ("conexion.php");
    
    
    $query="SELECT * FROM usuarios WHERE id='$id'";
    $resultado= $conexion->query($query);
    $row=$resultado->fetch_assoc();
       ?>

    <form action="editar_proceso.php?id=<?php echo $row['id'];?>" method="POST">
       
    
    
        <h3>Editar usuario: </h3>
        <br>
      <input type="text" required name="nombre" placeholder="nombre" value="<?php echo $row['nombre'];?>"/></br></br>
      
 
      <input type="text" required name="apellido" placeholder="apellido" value="<?php echo $row['apellido'];?>"/></br></br>            
      
     
      <input type="telefono" required name="telefono" placeholder="telefono"  value="<?php echo $row['telefono'];?>" /></br></br>
      
     <center> <input type = "submit"  value="Aceptar" /></center></br>

    </table>

    </th>
    <br>
    <a href="visualizar.php"> <img class="photo" src="img/atras.png " ></a>
  </form>
  </center></div>  
   