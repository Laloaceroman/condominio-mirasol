<?php  

// Llamando a los campos
$name = $_POST['first_name'];
$apellido = $_POST['last_name'];
$telefono = $_POST['phone'];
$correo = $_POST['email'];
$mensaje = $_POST['message'];


// Datos para el correo
$destinatario  = 'administracion@condominiomirasol.cl' . ', ';
$destinatario .= 'ventas@condominiomirasol.cl';
$title = "Contacto desde nuestra web";
$carta = "Mensaje enviado desde la web Condominio Mirasol \n";
$carta .= "Nombre: $name \n";
$carta .= "Apellido: $apellido \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";


// Enviando Mensaje
mail($destinatario, $title, $carta);
header('Location:index.html#thanks');

?>