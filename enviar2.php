<?php
  $email_to = "rrhh@buho.la";
  $email_subject ="Contacto desde la web";

  $email_menssage= "Correo registrado:";
  $email_menssage.= "Nombre y Apellido: " .$_POST['nombre']."\n";
  $email_menssage.= "Numero de partida: " .$_POST['partida']."\n";
  $email_menssage.= "Numero de asiento: " .$_POST['asiento']."\n";
  $email_menssage.= "Archivo: " .$_POST['adjunto']."\n";


  @mail($email_to, $email_subject , $email_menssage);
    header('Location: index.php');


?>