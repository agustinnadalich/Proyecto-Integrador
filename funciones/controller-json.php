<?php
// Con JSON
//   function getAllUsers(){
//
//       $fileContent=file_get_contents(dirname(__DIR__, 1) . '/data/users.json');
//
//       $allUsers = json_decode ($fileContent, true);
//
//       return $allUsers;
//
//   }
require_once 'conexion.php';

// CON MYSQL
function getAllUsers(){
global $base;
  try {
    //quiero todos los autos, con su chofer y la cantidad de características de cada auto
    $consulta = $base->query("SELECT * from users");
  } catch(PDOException $error) {
    die('Error de base de datos');
  }

  $allUsers = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $allUsers;

}
//
// CREO Q NO HACE FALTA AL SER AUTOINCREMENTAL EN MYSQL
// function generateID() {
//
//       $allUsers = getAllUsers();
//
//       if (count($allUsers) == 0) {
//         return 1;
//       }
//     $lastUser= array_pop($allUsers);
//
//     return $lastUser['id'] +1;
// }

// CON JSON
// function saveUser(){
//
//
//     $_POST['name']= trim($_POST['name']);
//     $_POST['username']= trim($_POST['username']);
//     $_POST['email']= trim($_POST['email']);
//     $_POST['pass']= password_hash(trim($_POST['pass']), PASSWORD_DEFAULT);
//     unset($_POST['rePass']);
//     $_POST['id']=generateID();
//
//     $newUser = $_POST;
//
//     $allUsers = getAllUsers();
//
//     $allUsers[] = $newUser;
//
//     $allUsersJson=json_encode($allUsers);
//
//     file_put_contents(dirname(__DIR__,1) . "/data/users.json", $allUsersJson);
//
//
//     return $newUser;
// }

// CON MYSQL

    function saveUser(){
        global $base;

        $name= trim($_POST['name']);
        $username= trim($_POST['username']);
        $email_trim = trim($_POST["email"]);
        $email = strlower($email_trim);
        $pass= password_hash(trim($_POST['pass']), PASSWORD_DEFAULT);
        unset($_POST['rePass']);
        $pais= trim($_POST['pais']);
        $avatar= trim($_POST['avatar']);

        try {
        	$consulta = $base->prepare("INSERT INTO users (name, username, email, pass, pais, avatar) values (?, ?, ?, ?, ?, ?)");
        	$consulta->execute([$name, $username, $email, $pass, $pais, $avatar]);
        } catch(PDOException $error) {
        	die('Error de base de datos');
        }

         $NewUser = getUserByEmail($email);

        return $NewUser;
          }


function mailexist($email){

  // $email = trim($_POST["email"]);
  $allUsers = getAllUsers();

  foreach ($allUsers as $anyUser) {

    if ($anyUser['email']===$email){
      return true;
    } }
    return false;

    // $mailRepetedError = ($anyUser['email']==$email) ? true : false ;
      // code...
    // }
    // return $mailRepetedError;
  }
// CON JSON
  function userexist($username){

    // $email = trim($_POST["email"]);
    $allUsers = getAllUsers();

    foreach ($allUsers as $anyUser) {

      if ($anyUser['username']===$username){
        return true;
      } }
      return false;

      // $mailRepetedError = ($anyUser['email']==$email) ? true : false ;
        // code...
      // }
      // return $mailRepetedError;
    }
// CON MYSQL

// function userexist($username){
//
//   try {
//     $consulta = $base->prepare("SELECT * from users where username= ?");
//     $consulta->execute([$username]);
//   } catch(PDOException $error)
//   // { die('Error de base de datos'); }


// CON JSON
  // function getUserbyEmail($email){
  //     $allUsers = getAllUsers();
  //
  //     foreach ($allUsers as $anyUser) {
  //       if ($anyUser['email'] == $email) {
  //         return $anyUser;
  //       }
  //     }
  //
  // }
// CON MYSQL
function getUserbyEmail($email){
  global $base;
  try {
    $consulta = $base->prepare("SELECT * FROM users WHERE email = ?");
    $consulta->execute([$email]);
  } catch(PDOException $error) {
    die('Error de base de datos');
  }
  $theUser = $consulta->fetchAll(PDO::FETCH_ASSOC);
  return $theUser["0"];
}

// CON JSON
    // function changeInfo(){
    //
    //   $email = $_POST['email'];
    //   $theUser = getUserByEmail($_POST['email']);
    //
    // // Este if tiene que ir en profile antes de ejecutar la funcion
    //   // if (isset($_POST['name'])){
    //
    //     $allUsers = getAllUsers();
    //
    //     foreach ($allUsers as $pos => $user) {
    //       if ($theUser['email'] == $_POST['email']) {
    //         $thePosition = $pos;
    //         $theUser = $user;
    //       }}
    //
    //
    //     $theUser['name']= trim($_POST['name']);
    //     $theUser['username']= trim($_POST['username']);
    //     $theUser['pais']= trim($_POST['pais']);
    //     // $theUser['pass']= password_hash(trim($_POST['pass']), PASSWORD_DEFAULT);
    //     // unset($_POST['rePass']);
    //     // $theUser['pais']= $_POST(['pais']);
    //
    //     $allUsers[$thePosition] = $theUser;
    //
    //     $_SESSION["userLoged"] = $theUser;
    //
    //     $allUsersJson=json_encode($allUsers);
    //
    //     file_put_contents(dirname(__DIR__, 1) . '/data/users.json', $allUsersJson);
    //
    //     header("location: profile.php");
    //
    //
    //
    //     return $user;
    //
    //     // }
    //   }

// CON MYSQL
      function changeInfo(){
        global $base;
        $email = $_POST['email'];
        $name= trim($_POST['name']);
        $username= trim($_POST['username']);
        $pais= trim($_POST['pais']);


        try {
        	$consulta = $base->prepare("UPDATE users set name = ?, username = ?, pais = ? where email = ?");
        	$consulta->execute([$name, $username, $pais, $email]);
        } catch(PDOException $error) {
        	die('Error de base de datos');
        }

        $theUser = getUserByEmail($email);

        $_SESSION["userLoged"] = $theUser;

          header("location: profile.php");


          return $theUser;


        }






 ?>
