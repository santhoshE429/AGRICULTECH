
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>login-page</title>
</head>
<body>
<div class="glass-container ">
    <div class="container-fluid mt-4 mb-4">
        <h1 class="text-center">LOGIN</h1>
    </div>
    <div class="container-fluid m-auto" style="width: 80%;" class ="login-box" >
<form action="" method="POST">
  <div class="mb-3">
  <input type="text" id="phoneNumber" name="phoneNumber" required placeholder="phonenumber">
                
                <input type="password" id="password1" name="password1" required placeholder="Password">
                
  <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>
</div>
<p>Not registered yet? Please <a href="registration.php">Register</a> here!</p>
</>
<?php include('loginServer.php'); ?>
<?php include('errors.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>