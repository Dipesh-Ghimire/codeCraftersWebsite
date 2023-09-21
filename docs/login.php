<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $login = false;
        $showError = "";
        include "./loginsystem/subsystem/_dbconnect.php";
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM users_table WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num==1){
            $row = $result->fetch_assoc();
            $login = true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['email']=$email;
            $_SESSION['username']=strstr($row["name"], ' ', true);
            // redirect to home page
            header("location: index.php");
        }else{
            $showError = "Invalid Credentials";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/media.queries.navbar.css" />
    <link rel="stylesheet" href="./CSS/additional.css" />
    <script defer src="./script.js"></script>
</head>

<body>
    <?php include "./navbar.php"?>
    <?php
    if($showError){
            session_start();
            $_SESSION['msg']=$showError;
            include "./alert.php";
        }elseif($login){
            session_start();
            $_SESSION['msg']="Logged In Successfully!";
            include "./alert.php";
            }
    ?>
    <h1 style="display: flex; justify-content:center;" >Login Section</h1>
    <!-- Login Normal Form  -->
    <section class="form-container">
        <div class="image-box">
            <img src="./Futsal_images/Form Images/formimg2.jpg" alt="form-image`" class="left-signing-image">
        </div>
        <div class="form-content-box">
            <div class="form-box">
                <h2>Login</h2>
                <form action="./login.php" method="POST" id="form-main" >
                    <!-- <div class="input-box">
                            <label class="label" for="name">Name</label>
                            <input type="text" name="Name" id="name">
                        </div> -->
                    <div class="input-box">
                        <label class="label" for="email">Email</label>
                        <input type="email" name="email" id="email" required placeholder="name@email.com">
                    </div>
                    <div class="input-box">
                        <label class="label" for="password" aria-required="true">Password</label>
                        <input type="password" name="password" id="password" placeholder="-------">
                    </div>

                    <div class="remember">
                        <label class="label" for=""><input type="checkbox" value="remember-me">Remember Me</label>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Log In">
                    </div>
                    <div class="input-box">
                        <p>Don't have an account? <a href="./signup.html">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End of Login -->
    <?php include "./footer.php"?>
    <script
      src="https://kit.fontawesome.com/5bab80a2b0.js"
      crossorigin="anonymous"
    ></script>
</body>

</html>