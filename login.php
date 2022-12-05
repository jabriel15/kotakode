<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            echo "Login Berhasil";
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            header("Location: dashboard.php");
        } else{
          echo '<script> alert("Login gagal, password anda salah");</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TanyaKode.com | login</title>

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
                <span class="title">Login</span>
  
                <form action="" method="POST" autocomplete="off">
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Enter your username or email" required>
                        <i class="ri-user-line"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Enter your password" required>
                        <i class="ri-lock-line"></i>
                    </div>
  
                    <div class="input-field button">
                        <input type="submit" name="login" value="Login">
                    </div>
                </form>
  
                <div class="login-signup">
                    <p class="text">Don't have account?</p>
                    <a href="register.php" class="text signup-link">Register Now</a>
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
