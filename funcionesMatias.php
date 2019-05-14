<?php

function registerValidate(){

  global $name;
  global $username;
  global $email;
  $name = trim($_POST["name"]);
  $username = trim($_POST["username"]);
  $email = trim($_POST["email"]);
  $pass = trim($_POST["pass"]);
  $rePass = trim($_POST["rePass"]);

  $errores = [];

  if ( $name === "" ) {
    $errores ["name"] = "Error. El nombre es obligatorio <br>";
  }

  if ( $username === "" ) {
    $errores ["username"] = "Error. El usuario es obligatorio <br>";
  }

  if ( $email === "" ) {
    $errores ["email"] = "Error. El email es obligatorio <br>";
  } elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    $errores ["email"] = "Error. El email debe tener un formato válido <br>";
  }

  if ( $pass === "" ) {
    $errores ["pass"] = "Error. El password es obligatorio <br>";
  } elseif ( strlen($pass) < 5 ) {
    $errores ["pass"] = "Error. El password debe tener más de 5 letras <br>";
  } elseif ( !contieneDH($pass) ) {
    $errores ["pass"] = "Error. El password debe tener las letras DH en él <br>";
  }

  function contieneDH($stringPassword){
    if (strpos($stringPassword, 'DH')) {
    return true;}
  }

  if ( $rePass === "" ) {
    $errores ["rePass"] = "Error. El password es obligatorio <br>";
  } elseif ( $rePass != $pass ) {
    $errores ["rePass"] = "Error. Las contraseñas deben coincidir <br>";
  }

  return $errores;

}

function saveImage(){
  // Si el error de subida es igual a 0
  if ($_FILES["avatar"]["error"] === UPLOAD_ERR_OK) {
    // Obtengo el nombre de la imagen
    $nombreDeLaImagen = $_FILES["avatar"]["name"];
    // Del nombre de la imagen obtengo la extensión
    $ext = pathinfo($nombreDeLaImagen, PATHINFO_EXTENSION);
    // Si la extesión de la imagen NO es JPG, NO es png ni tampoco gif
    if ($ext != "jpg" && $ext != "png" && $ext != "gif") {
      echo "Formato invalido";
    } else {
      // Si se cumple con el formato valido obtenemos el archivo temporal
      $archivoTemporal = $_FILES["avatar"]["tmp_name"];

      // Nos creamos un nombre de imagen único usando la extensión que capturamos
      $nombreImagenFinal = uniqid("img_") . "." . $ext;

      // Definimos el destino en donde se guardará la imagen
      // dirname(__FILE__) nos deja ubicados en la posición de este archivo
      $destino = dirname(__FILE__) . "data/avatars/" . $nombreImagenFinal;

      // Subimos finalmente la imagen a donde deseamos
      move_uploaded_file($archivoTemporal, $destino);

      echo "Imagen se subió";
    }
    }
  }

function passHash(){
  $_POST["pass"] = password_hash($_POST["pass"], PASSWORD_DEFAULT);
}


?>
