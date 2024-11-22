<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Login</title>
  <style>

    body{
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
      padding-bottom : 10px;
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
            <h3 class="font-weight-bold">Login</h3>
            
          </div>
          <form method="POST" action="login.php">
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
                <button class="btn btn-primary" name="submit" type="submit" >Confirm</button>
                <a class="small text-black-50 pl-2 ml-2 border-left" href="#">Forgot Password?</a>
              </div>
            </div>
            <div class="d-inline text-left mb-1">
              <div class="form-group mx-auto mb-0">
                <label class="text-black-50 small">Or doesnt have account?</label>
              </div>
            </div>
            
            <div class="d-inline text-left mt-3">
              <div class="form-group mx-auto mb-0">
                <a class="text-black font-weight-bold regStr" href="register.php">Register new account</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>