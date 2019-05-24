<?php
//FUNCION PARA VALIDAR LOS CAMPOS DE LA REGISTARCION
	session_start();
	define('ALLOWED_IMAGE_FORMATS', ['jpg', 'jpeg', 'png', 'gif']);

	//si esta seteada la cookie y si no esta logueado, lo pongo en sesion
	if ( isset($_COOKIE['userLoged']) && !isLogged() ) {
		// Busco al usuario por el email que tengo almacenado en la cookie
		$theUser = getUserByEmail($_COOKIE['userLoged']);

		// Guardo en sesión al usuario que bisqué anteiormente
		$_SESSION['userLoged'] = $theUser;
	}

function registerValidate(){

  // global $name;
  // global $username;
  // global $email;
	// global $avatar;
  $name = trim($_POST["name"]);
  $username = trim($_POST["username"]);
  $email = trim($_POST["email"]);
  $pass = trim($_POST["pass"]);
  $rePass = trim($_POST["rePass"]);
	$avatar = $_FILES["avatar"];

  $errores = [];

  if ( $name === "" ) {
    $errores ["name"] = "Error. El nombre es obligatorio <br>";
  }

  if ( $username === "" ) {
    $errores ["username"] = "Error. El usuario es obligatorio <br>";
  } elseif ( userexist($username) === true ) {
    $errores["username"] = "Ese usuario ya está registrado";
  }

  if ( $email === "" ) {
    $errores ["email"] = "Error. El email es obligatorio <br>";
  } elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    $errores ["email"] = "Error. El email debe tener un formato válido <br>";
  } elseif ( mailexist($email) === true ) {
    $errores["email"] = "Ese correo ya está registrado";
  }

  if ( $pass === "" ) {
    $errores["pass"] = "Error. El password es obligatorio <br>";
  } elseif ( strlen($pass) < 5 ) {
    $errores["pass"] = "Error. El password debe tener más de 5 letras <br>";
  } elseif ( !contieneDH($pass) ) {
    $errores["pass"] = "Error. El password debe tener las letras DH en él <br>";
  }

  if ( $rePass === "" ) {
    $errores["rePass"] = "Error. El password es obligatorio <br>";
  } elseif ( $rePass != $pass ) {
    $errores["rePass"] = "Error. Las contraseñas deben coincidir <br>";
  }

	if ( $avatar['error'] != UPLOAD_ERR_OK ) {
		$errores["avatar"] = "Imagen no subida";
	} else {
		$ext = pathinfo($avatar["name"], PATHINFO_EXTENSION);

	if ( !in_array($ext, ALLOWED_IMAGE_FORMATS) ) {
		$errores["avatar"] = "Formato no permitido";
	}
	}

  return $errores;
}
//FUNCION PARA VER SI LA PASSWORD CONTIENE "DH"
function contieneDH($pass){

  $pass = trim($_POST["pass"]);

  //PARA HACER CON STRPOS
  // if ( strpos($pass, 'DH') === false || strpos($pass, 'DH') < 0 ) {

  if ( preg_match("/DH/", $pass) ) {
    return true;
  }
  return false;

}

function saveImage(){
    // Obtengo el nombre de la imagen
    $nombreDeLaImagen = $_FILES["avatar"]["name"];
    // Del nombre de la imagen obtengo la extensión
    $ext = pathinfo($nombreDeLaImagen, PATHINFO_EXTENSION);

    // obtenemos el archivo temporal
    $archivoTemporal = $_FILES["avatar"]["tmp_name"];

    // Nos creamos un nombre de imagen único usando la extensión que capturamos
    $nombreImagenFinal = uniqid("img_") . "." . $ext;

    // Definimos el destino en donde se guardará la imagen
    // dirname(__FILE__) nos deja ubicados en la posición de este archivo
    $destino = dirname(__FILE__) . "data/avatars/" . $nombreImagenFinal;

    // Subimos finalmente la imagen a donde deseamos
    move_uploaded_file($archivoTemporal, $destino);

    //echo "Imagen se subió";

		return $nombreImagenFinal;

  }

// function passHash(){
//   $_POST["pass"] = password_hash($_POST["pass"], PASSWORD_DEFAULT);
// }

function debug($dato) {
  echo "<pre>";
  var_dump($dato);
  echo "</pre>";
  exit;
}

function isLogged() {
  return isset($_SESSION["userLoged"]);
}

function loginValidate(){
  $errores= [];
  $email= trim($_POST["email"]);
  $pass= trim($_POST["pass"]);

  if ( empty($email) ) {
    $errores["email"] = "El campo email es obligatorio";
  } elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    $errores["email"] = "Introducí un formato de email válido";
  } elseif ( !mailExist($email) ) {
    $errores["email"] = "Las credenciales no coinciden";
  } else {
    $usuario = getUserByEmail($email);
    // verifico el pass que puso con el del usuario que saque recien, que sé que existe y no tiene errores
    if ( !password_verify($pass, $usuario["pass"]) ) {
      $errores["pass"] = "Las credenciales no coinciden";
    }
  }

  if ( empty($pass) ) {
    $errores["pass"] = "El campo password es obligatorio";
  }

  return $errores;

}

function login($userToLogin){
  $_SESSION["userLoged"] = $userToLogin;


}



?>
