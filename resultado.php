<?php
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$documento = $_POST ['documento'];
$domicilio = $_POST['domicilio'];
$localidad = $_POST ['localidad'];
$provincia = $_POST ['provincia'];
$fechadenacimiento = $_POST ['fechadenacimiento'];
$telefono = $_POST['telefono'];
$email = $_POST ['email'];


echo 'Los datos ingresados son ' ; 
echo '<br>';
echo 'nombre '.$nombre;
echo '<br>';
echo 'apellido '.$apellido;
echo '<br>';
echo 'documento '. $documento;
echo '<br>';
echo'domicilio '. $domicilio;
echo '<br>';
echo 'localidad '.$localidad;
echo '<br>';
echo 'provincia '.$provincia;
echo '<br>';
echo 'fechadenacimiento '.$fechadenacimiento;
echo '<br>';
echo 'telefono '.$telefono;
echo '<br>';
echo 'email '. $email;


