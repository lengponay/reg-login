<?php
  require_once 'connect.php';

  if (isset($_POST['forename']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['password'])) {

    $forename = sanitize($pdo, $_POST['forename']);
    $surname = sanitize($pdo, $_POST['surname']);
    $username = sanitize($pdo, $_POST['username']);
    $password = sanitize($pdo, $_POST['password']);
    $hash = password_hash($password, PASSWORD_DEFAULT);

    add_user($pdo, $forename, $surname, $username, $hash);
  }


  function add_user($pdo, $fn, $sn, $un, $pw) {
      $stmt = $pdo->prepare('INSERT INTO users (forename, surname, username, password) VALUES (?, ?, ?, ?)');
      $stmt->bindParam(1, $fn, PDO::PARAM_STR, 32);
      $stmt->bindParam(2, $sn, PDO::PARAM_STR, 32);
      $stmt->bindParam(3, $un, PDO::PARAM_STR, 32);
      $stmt->bindParam(4, $pw, PDO::PARAM_STR, 255);
      $stmt->execute();
  }


  function sanitize($pdo, $str) {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Register</title>
  <style>

    body {
      height: 100px;
      font-family: sans-serif;
      background: #e9eef7;
    }

    .spContainer {
      border : 2px solid black;
      border-radius : 30px;

      padding : 30px 20px 20px 30px;
      margin : 60px 30px 30px 60px;
      width: 100%;
      display : flex;
      flex-direction: row;
      justify-content : center;
      max-width: 300px;
    }
    h3 {
      margin-top: 10px;
      padding-bottom: 10px;
      /* text-decoration: underline; */
      color: black;
    }
    .card {
      border-radius: 8px;
      transition: .5s;
    }
    .card:hover {
      transition: .5s;
    }
    .btn-primary {
      border-radius: 4px;
      border: none;
      background-color: #ff425f;
      box-shadow: 0 rgba(34, 36, 38, 0.15) inset, 0px 1px 0px 0px rgba(34, 36, 38, 0.15) inset;
    }
    .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
      background-color: #de2c48;
      box-shadow: none;
    }
    .inpSp {
      background-color: #ebebeb;
      border: none;
      transition: .5s;
      padding-left: 25px;
      font-weight: light;
      font-family: sans-serif;
      border-radius: 4px;
    }
    .inpSp:hover {
      transition: .5s;
      background-color: #dbdbdb;
    }
    .inpSp:focus {
      background-color: #ebebeb;
      box-shadow: 0 8px 8px 0px #f1f1f1;
    }
    .regStr {
      padding-bottom: 4px;
      border-bottom: 2px solid gray;
      transition: .5s;
      color: #212519;
    }
    .regStr:hover {
      border-bottom: 2px solid #ff425f;
      padding-bottom: 8px;
      transition: .5s;
      text-decoration: none;
      color: #212519;
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="spContainer mx-auto">
        <div class="card px-4 py-5 border-0 shadow">
          <div class="d-inline text-left mb-3">
            <h3 class="font-weight-bold">Register Here</h3>
          </div>
          <form method="POST" action="register.php">
            <div class="d-inline text-center mb-0">
              <div class="form-group mx-auto">
                <input class="form-control inpSp" type="text" name="forename" placeholder="First Name" required>
              </div>
            </div>
            <div class="d-inline text-center mb-3">
              <div class="form-group mx-auto">
                <input class="form-control inpSp" type="text" name="surname" placeholder="Last Name" required>
              </div>
            </div>
            <div class="d-inline text-center mb-0">
              <div class="form-group mx-auto">
                <input class="form-control inpSp" type="text" name="username" placeholder="Username" required>
              </div>
            </div>
            <div class="d-inline text-center mb-3">
              <div class="form-group mx-auto">
                <input class="form-control inpSp" type="password" name="password" placeholder="Password" required>
              </div>
            </div>
            <div class="d-inline text-left mb-3">
              <div class="form-group mx-auto">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
            </div>
            <div class="d-inline text-left mt-3">
              <div class="form-group mx-auto mb-0">
                <a class="text-black font-weight-bold regStr" href="login.php">Back to Login</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
