<?php
  $email_to = "rrhh@buho.la";
  $email_subject ="Contacto desde la web";

  $email_menssage= "Correo registrado:";
  $email_menssage.= "DNI: " .$_POST['name']."\n";
  $email_menssage.= "FICHA RUC: " .$_POST['ruc']."\n";
  $email_menssage.= "Titulo: " .$_POST['vigencia']."\n";


  @mail($email_to, $email_subject , $email_menssage);

header('Location: index.php');

?>