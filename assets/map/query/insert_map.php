<?php
header("Acces-Control_Allow-Origin: *");

				
  $mysqli = new mysqli("innovapedidos.innovapedidos.innovapplications.com", "dbapedidos", "innova_3309", "innovapedidos");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];
$direccion_map=$_POST['direccion_map'];

      if ($mysqli->query("insert map SET latitud ='$latitud',longitud ='$longitud', direccion_map='$direccion_map'") === TRUE) 
                {
                  printf($mysqli->affected_rows." Filas afectadas");
                }
                  else
                  echo "Error al ejecutar el comando:".$mysqli->error;
				  
				  $resultado->free();
/*
$query = "select men.id, men.mensaje, men.estado, mov.id_movil, mov.so
from mensajes_enviados men, moviles mov
where men.id_movil = mov.id";
$resultado=$mysqli->query($query);
print("<table>");
while ($rows = $resultado->fetch_assoc()) {
  print("<tr>");
  print("<td>".$rows["id"]."</td>");
  print("<td>".$rows["mensaje"]."</td>");
  print("<td>".$rows["estado"]."</td>");
  print("<td>".$rows["id_movil"]."</td>");
  print("<td>".$rows["so"]."</td>");
  print("</tr>");
  }
  print("</table> <BR>");
  $resultado->free();
*/
// ENVIANDO NOTIFICACION

?>