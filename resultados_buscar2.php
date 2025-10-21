<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MySQL</title>
</head>

<body>
<section>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM empleado WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<article style="width:60%;margin:0 auto;border:solid;padding:10px">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] . " --> ";
			echo "<a href='mailto:".$resultados['email']."'>".$resultados['email']."</a>";
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>

</body>
</html>