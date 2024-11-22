<?php 
  // require_once 'connect.php'; 
  
  // if (isset($_POST['username']) && isset($_POST['password'])) {
  //   $username = sanitize($pdo, $_POST['username']);
  //   $password = sanitize($pdo, $_POST['password']);

  //   //use jea statement
  //   $stmt = $pdo->prepare('SELECT forename, surname, username, password FROM users WHERE username = ?');
  //   $stmt->execute([$username]);
  //   $user = $stmt->fetch();

  //   if (!$user) {
  //     die("User not found");
  //   }

  //   $fn  = $user['forename'];
  //   $sn  = $user['surname'];
  //   $un  = $user['username'];
  //   $pw  = $user['password'];

  //   if (password_verify($password, $user['password'])) {
  //     echo htmlspecialchars("$fn $sn : Welcome $fn, you are now logged in as '$un'");
  //   } else {
  //     die("Invalid username/password combination");
  //   }
  // } else {
  //   die("Please enter your username and password.");
  // }

  // function sanitize($pdo, $str) {
  //   $str = htmlentities($str);
  //   return $pdo->quote($str);
  // }

//sessions
require_once 'connect.php'; 
require_once 'slogin.php';

if (isset($_POST['username'])&&isset($_POST['password']))
  {
    $username = sanitize($pdo, $_POST['username']);
    $password = sanitize($pdo, $_POST['password']);
    //use jea statement
    $stmt = $pdo->prepare('SELECT forename, surname, username, password FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if (!$user) {
      die("User not found");
    }

    $fn  = $user['forename'];
    $sn  = $user['surname'];
    $un  = $user['username'];
    $pw  = $user['password'];

  if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['forename'] = $fn;
        $_SESSION['surname']  = $sn;
        echo htmlspecialchars("$fn $sn : Hi $fn,
          you are now logged in as '$un'");
        die ("<p><a href='continue.php'>Click here to continue</a></p>");
  }
  else die("Invalid username/password combination"); }
  else
  {
    die ("Please enter your username and password");
  }

function sanitize($pdo, $str) {
  $str = htmlentities($str);
  return $pdo->quote($str); 
}

?>
