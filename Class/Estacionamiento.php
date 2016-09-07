<?php
	class Estacionamiento
	{
		function __construct()
		{

		}

	 public static function Guardar($patente)
	  {
	  	$miArchivo=fopen("Estacionado.txt","a");//creamos variable del tipo archivo , con a leo escribo y no sobrescribo
	  	$fecha=date("Y-m-d H:i:s");
	  	$renglon="$patente"."=>"."$fecha"."\n";
	  	fwrite($miArchivo,$renglon); //puntero al archivo y el string enviado
	  		echo"<br>";
	  		echo"la patente: ".$patente ." fue guardado!";
	  	fclose($miArchivo);
	  }

 	public static function Leer()
	  {	
		$miArchivo=fopen("Estacionado.txt","r");
		while (!(feof($miArchivo)))
		{
			$renglon=fgets($miArchivo);
			$auto=explode("=>",$renglon);
			echo "<br>".$auto[0];
			echo "<br>".$auto[1];
		}
	  } 
	}
?>