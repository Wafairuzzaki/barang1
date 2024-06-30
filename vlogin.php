<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Halaman Login</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        body {
            background-image: url('<?php echo base_url();?>public/images/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .login-heading {
            margin-bottom: 20px;
        }
    </style>

 </head>

  <body> 
    <div class="login-container">
        <h2 class="login-heading text-center">Silahkan Login Ke Toko</h2>
        <?php echo "<center style='color:red'>".$error."</center>"; ?> 
        <form method="post" action="<?php echo base_url();?>index.php/clogin/masuk" id="loginform">
            <div class="mb-3">
                <label for="user" class="form-label">Username</label>
                <input type="text" id="user" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" id="pass" name="password" class="form-control" required>
            </div>
            <div class="d-grid">
                <input type="submit" name="submit" value="Login" id="masuk" class="btn btn-primary"/>
            </div>
        </form>
    </div>

  </body>
</html>
