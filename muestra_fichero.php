<?php
$pdf_test = 'puntos5_6_7Bis.pdf'; //guardo la ruta del archivo que voy a utilizar, tambien puedo hacer una funcion en la cual pase por parametro la 
//direccion, pero esto es un ejemplo
$nombre_titulo='nuevo_titulo_test.pdf';//guardamos el nombre del titulo que queremos
header('Content-type: application/pdf');//establecemos la cabecera del contenido
header('Content-Disposition: inline; filename="' . $nombre_titulo . '"');//modificamos el titulo con la variable que tiene el valor del titulo qu queremos
readfile($pdf_test);//leemos el fichero
?>