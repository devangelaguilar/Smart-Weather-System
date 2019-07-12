<?php
$password="1234";
 // dht11.php
 //Importamos la configuracion
 require("conn.php");
 // Leemos los valores que nos llegan por GET
 if ($_GET['pass'] == $password){
 $Temperatura = mysqli_real_escape_string($conn, $_GET['Temperatura']);
 $Humedad = mysqli_real_escape_string($conn, $_GET['Humedad']);

 // EInsertamos los valores en la tabla
 $query = "INSERT INTO valores(Temperatura, Humedad) VALUES('$Temperatura','$Humedad')";
 // Ejecutamos la instruccion
 mysqli_query($conn, $query);
 mysqli_close($conn);
 echo "Pagina para subir los datos<br />";
 echo "<br />Temperatura = $Temperatura ºC<br />";
 echo "<br />Humedad = $Humedad %<br />";
 }else{
 echo "<br />Nel perro<br />";}
?>

