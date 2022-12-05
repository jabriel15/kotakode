<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TanyaKode.com</title>

    <!-- ==== STYLE.CSS ==== -->
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-grid.css">

    <!-- ====  REMIXICON CDN ==== -->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />

    <!-- =====Link Font ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet">

    <!-- ==== ANIMATE ON SCROLL CSS CDN  ==== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    </head>

  <body>
    <div class="page-start">
        <div class="login-register">
            <div class="forms">
                <div class="form login">
                    <span class="title">Register</span>
      
                    <form name="form-login" method="POST" action="" autocomplete="off">

                        <div class="input-field">
                            <input type="text" placeholder="Name" name="name" required>
                            <i class="ri-user-line"></i>
                        </div>

                        <div class="input-field">
                            <input type="text" placeholder="Username" name="username" required>
                            <i class="ri-user-line"></i>
                        </div>

                        <div class="input-field">
                            <input type="email" placeholder="Enter your email" name="email" required>
                            <i class="ri-mail-line"></i>
                        </div>

                        <div class="input-field">
                            <input type="password" name="password" placeholder="Enter your password" required>
                            <i class="ri-lock-line"></i>
                        </div>
      
                        <div class="input-field button">
                            <input type="submit" name="register" value="Register">
                        </div>
                    </form>
      
                    <div class="login-signup">
                        <p class="text">Already have account?</p>
                        <a href="login.php" class="text signup-link">Login Now</a>
                    </div>
                </div>
      
            </div>
          </div>
    </div>

    <!-- ==== ANIMATE ON SCROLL JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ==== GSAP CDN ==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!-- ==== SCRIPT.JS ==== -->
    <script src="assets/js/main.js" defer></script>
  </body>
</html>