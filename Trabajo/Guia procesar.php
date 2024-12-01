<?php

include('clsConexion.php');

$miconexion = new ConexionMysql();

$miconexion->CrearConexion();

$id=$_POST['id'];
$nombre=$_POST['nombre'];


/////////////
//INSERT////
////////////
if($_POST['btnRegistrar']){
    $sql = "insert into usuario(id,nombre) values('".$id."','".$nombre."')";
$result = $miconexion->EjecutarSQL($sql);
if($result){
    $numfila = $miconexion->ObtenerColumnasAfectadas();
    if($numfila>0){
        echo "Registro Ejecutado Exitoso.<br>";
    }else{
        echo"<h2>Error ejecutando registro</h2>";
    }
}
}

////////////
///SELECT///
///////////

if($_POST['btnIngreso']){
    $sql = "select * from usuario where id=".$id;
$result = $miconexion->EjecutarSQL($sql);
if($result){
    while ($row = $miconexion->ObtenerFilas($result)){
        echo "El nombre es: ".$row[1];
    }
} else{
    echo"<h2>El usuario no existe</h2>";
}
}

///////////////
///Eliminar////
///////////////

if($_POST['btnEliminar']){
    $sql = "delete from usuario where id=".$id;
$result = $miconexion->EjecutarSQL($sql);
if($result){
   $numfila = $miconexion->ObtenerColumnasAfectadas();
   if($numfila>0){
    echo "<br>Se ha eliminado exitosamente.<br>";
   }
} else{
    echo "<h2>Error eliminando el usuario.</h2>";
}
}


?>