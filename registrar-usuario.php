<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "storephonedoctor";
 $tbl_name = "clientes";
 

 $USERNAME_CL = htmlspecialchars($_POST['USERNAME_CL']);
 $EMAIL_CL = htmlspecialchars($_POST['EMAIL_CL']);
 $form_pass = htmlspecialchars($_POST['CONTRASENA_CL']);
 $hash = sha1($form_pass); 
 $NOMBRE_CL = htmlspecialchars($_POST['NOMBRE_CL']);
 $AP_CL = htmlspecialchars($_POST['AP_CL']);
 $AM_CL = htmlspecialchars($_POST['AM_CL']);
 $TEL_CL = htmlspecialchars($_POST['TEL_CL']);
 $MUN_CL = htmlspecialchars($_POST['MUN_CL']);
 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE USERNAME_CL = '$USERNAME_CL'";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{

 $query = "INSERT INTO clientes (USERNAME_CL,EMAIL_CL,CONTRASENA_CL,NOMBRE_CL,AP_CL,AM_CL,TEL_CL,MUN_CL)
           VALUES ('$USERNAME_CL','$EMAIL_CL', '$hash','$NOMBRE_CL','$AP_CL','$AM_CL','$TEL_CL','$MUN_CL')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $USERNAME_CL . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>