<!-- Conectar usando mysqli -->
<!-- Agregar el servidor de la DB como localhost,el usuario root y la pass sin constraseña, y el nombre de la tabla-->
<?php

session_start();


$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'crud_php'
);

// if(isset($connection)){
//     echo 'Estamos conectados';
// }

?>