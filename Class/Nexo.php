<?php
 $patente = $_POST['patente'];
 $accion=$_POST['accion'];

 echo "Patente: ".$patente;
 echo "<br>";	
  echo "Accion: ".$accion;



include "Estacionamiento.php";
if($accion=="Estacionar")
{
	Estacionamiento::Guardar($patente);

}
//header("location:../index.php"); 
?>