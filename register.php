<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TanyaKode.com</title>

    <!-- ==== STYLE.CSS ==== -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- ====  REMIXICON CDN ==== -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- =====Link Font ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet">

    <!-- ==== ANIMATE ON SCROLL CSS CDN  ==== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>

  <?php
    include("connection.php");

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if($user == "" || $pass == "" || $name == "" || $email == "") {
            echo "Gagal. Pastikan semua kolom sudah terisi!.";
            echo "<br/>";
            echo "<a href='register.php'>Go back</a>";
        } else {
            mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
            or die("Could not execute the insert query.");
			
            echo "Registrasi Berhasil!";
            echo "<br/>";
            echo "<a href='login.php'>Login</a>";
        }
    } else {

    }
?>

    <div class="page-start">
        <div class="login-register">
            <div class="forms">
                <div class="form login">
                    <span class="title">Register</span>
      
                    <form name="form-login" method="post" action="">
                        <div class="input-field">
                            <input type="text" placeholder="Name" name="name" required>
                            <i class="uil uil-user icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Username" name="username" required>
                            <i class="uil uil-user icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" name="email" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" name="password" placeholder="Enter your password" required>
                            <i class="uil uil-lock icon"></i>
                        </div>
      
                        <div class="input-field button">
                            <input type="submit" name="submit" value="Register">
                        </div>
                    </form>
      
                    <div class="login-signup">
                        <p class="text">Already have account?</p>
                        <a href="login.html" class="text signup-link">Login Now</a>
                    </div>
                </div>
      
            </div>
          </div>
    </div>

    <!-- ==== ANIMATE ON SCROLL JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ==== GSAP CDN ==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <!-- ==== SCRIPT.JS ==== -->
    <script src="./script.js" defer></script>
  </body>
</html>