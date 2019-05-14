<?php

function getAllUsers(){

    $fileContent=file_get_contents(dirname(__FILE__) . '/data/users.json');

    $allUsers = json_decode ($fileContent, true);

    return $allUsers;

}

function generateID() {

      $allUsers = getAllUsers();

      if (count($allUsers)=0) {
        return = 1;
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

    file_put_contents(dirname(__FILE__) . '/data/users.json', $allUsersJson);

    return $newUser;
}


function mailexist(){

  $allUsers = getAllUsers($email);

  foreach ($allUsers as $anyUser) {
    $mailRepetedError = ($anyUser['email']==$email) ? true : false ;
      // code...
    }
    return $mailRepetedError;
  }




function getUserbyEmail($email){
    $allUsers = getAllUsers();

    foreach ($allUsers as $anyUser) {
      if ($anyUser['email'] == $email) {
        return $anyUser;
      }
    }

}
 ?>
