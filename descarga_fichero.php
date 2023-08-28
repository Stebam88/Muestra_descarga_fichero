<?php
$file = '/ruta/al/archivo.pdf'; //guardo la ruta del fichero en una variable, tambien puedo pasarla por parametro dentro de una funcion, pero esto
//es un test
$filename = 'archivo.pdf';

// Establece la cabecera X-Sendfile
header('X-Sendfile: ' . $file);

// Establece la cabecera de contenido
header('Content-type: application/pdf');
readfile($file); // Lee el contenido del archivo y envíalo al navegador
?>