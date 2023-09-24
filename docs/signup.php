<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "./loginsystem/subsystem/_dbconnect.php";
        $showAlert= false;
        $showError = "";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        // to check if email or phone already exist
        $exist_sql = "SELECT * FROM users_table WHERE email = '$email' OR phone  = '$phone';";
        $exist_result = mysqli_query($conn,$exist_sql);
        $exist_row = mysqli_num_rows($exist_result);
        ($exist_row>0)?$exist=true:$exist = false;
        // if rows exist, exist is true and email not accepted

        if($exist == false){
            if(($password==$cpassword)){
                $hash = password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users_table` (`user_id`, `name`, `email`, `phone`, `password`, `date`) VALUES (NULL, '$name', '$email', '$phone', '$hash', current_timestamp());";
                $result = mysqli_query($conn,$sql);
                if($result){
                    $showAlert = true;
                }
            }else{
                $showError = "Password do not match!";
            }
        }else{
            $showError = "Email or Phone already Registered!";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./CSS/signup.css">
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/media.queries.navbar.css" />
    <script defer src="./script.js"></script>
</head>

<body>
    <?php include "./navbar.php"?>
    <h1 style="display:flex;justify-content:center;">Signup Section</h1>
    <!-- Signup Normal Form  -->
    <?php
    if($showError){
            if (!isset($_SESSION)) {session_start();}
            $_SESSION['msg']=$showError;
            include "./alert.php";
        }elseif($showAlert){
            if (!isset($_SESSION)) {session_start();}
            $_SESSION['msg']="Account Created Successfully!";
            include "./alert.php";
            }
    ?>
    <section class="form-container">
        <div class="image-box">
            <img src="./Futsal_images/Form Images/formimg3.jpg" alt="form-image'" class="left-signing-image">
        </div>
        <div class="form-content-box">
            <div class="form-box">
                <h2>Sign Up</h2>
                <form action="./signup.php" method="POST" id="form-main">
                    <!-- <div class="input-box">
                            <label class="label" for="name">Name</label>
                            <input type="text" name="Name" id="name">
                        </div> -->
                    <div class="input-box">
                        <label class="label" for="name">Name</label>
                        <input type="text" name="name" id="name" required placeholder="John Doe">
                    </div>
                    <div class="input-box">
                        <label class="label" for="email">Email</label>
                        <input type="email" name="email" id="email" required placeholder="name@email.com">
                    </div>
                    <div class="input-box">
                        <label class="label" for="phoneno">Phone</label>
                        <input type="text" name="phone" id="phone" required value="+977-"
                            placeholder="+977- _ _ _ _ _ _ _ _ _ _">
                    </div>
                    <div class="input-box">
                        <label class="label" for="password" aria-required="true">Password</label>
                        <input type="password" name="password" id="password" placeholder="-------">
                    </div>
                    <div class="input-box">
                        <label class="label" for="check-password" aria-required="true">Re-enter your Password</label>
                        <input type="password" name="cpassword" id="check-password" placeholder="-------">
                    </div>

                    <div class="remember">
                        <label class="label" for=""><input type="checkbox" value="remember-me">Remember Me</label>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Create New Account">
                    </div>
                    <div class="input-box">
                        <p>Already have an account? <a href="login.html">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include "./footer.php"?>
    <script
      src="https://kit.fontawesome.com/5bab80a2b0.js"
      crossorigin="anonymous"
    ></script>
</body>

</html>