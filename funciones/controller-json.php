<?php

function getAllUsers(){

    $fileContent=file_get_contents(dirname(__DIR__, 1) . '/data/users.json');

    $allUsers = json_decode ($fileContent, true);

    return $allUsers;

}

function generateID() {

      $allUsers = getAllUsers();

      if (count($allUsers) == 0) {
        return 1;
      }
    $lastUser= array_pop($allUsers);

    return $lastUser['id'] +1;
}

function saveUser(){


    $_POST['name']= trim($_POST['name']);
    $_POST['username']= trim($_POST['username']);
    $_POST['email']= trim($_POST['email']);
    $_POST['pass']= password_hash(trim($_POST['pass']), PASSWORD_DEFAULT);
    unset($_POST['rePass']);
    $_POST['id']=generateID();

    $newUser = $_POST;

    $allUsers = getAllUsers();

    $allUsers[] = $newUser;

    $allUsersJson=json_encode($allUsers);

    file_put_contents(dirname(__DIR__,1) . "/data/users.json", $allUsersJson);


    return $newUser;
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

function getUserbyEmail($email){
    $allUsers = getAllUsers();

    foreach ($allUsers as $anyUser) {
      if ($anyUser['email'] == $email) {
        return $anyUser;
      }
    }

}

function changeInfo(){

  $email = $_POST['email'];
  $theUser = getUserByEmail($_POST['email']);

// Este if tiene que ir en profile antes de ejecutar la funcion
  // if (isset($_POST['name'])){

    $allUsers = getAllUsers();

    foreach ($allUsers as $pos => $user) {
      if ($theUser['email'] == $_POST['email']) {
        $thePosition = $pos;
        $theUser = $user;
      }}


    $user['name']= trim($_POST['name']);
    $user['username']= trim($_POST['username']);
    $user['pais']= trim($_POST['pais']);
    // $theUser['pass']= password_hash(trim($_POST['pass']), PASSWORD_DEFAULT);
    // unset($_POST['rePass']);
    // $theUser['pais']= $_POST(['pais']);

    $allUsers[$thePosition] = $user;

    $_SESSION["userLoged"] = $user;

    $allUsersJson=json_encode($allUsers);

    file_put_contents(dirname(__DIR__, 1) . '/data/users.json', $allUsersJson);

    // header("location: profile.php");

    return $user;

    // }
  }







 ?>
