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
</head>

<body>
    <?php include "./navbar.php"?>
    <h1>Signup Section</h1>
    <!-- Signup Normal Form  -->
    <section class="form-container">
        <div class="image-box">
            <img src="./Futsal_images/Form Images/formimg3.jpg" alt="form-image`" class="left-signing-image">
        </div>
        <div class="form-content-box">
            <div class="form-box">
                <h2>Sign Up</h2>
                <form action="get">
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
                        <input type="email" name="Email" id="email" required placeholder="name@email.com">
                    </div>
                    <div class="input-box">
                        <label class="label" for="phoneno">Phone</label>
                        <input type="text-number" name="phoneno" id="phoneno" required value="+977- "
                            placeholder="+977- _ _ _ _ _ _ _ _ _ _">
                    </div>
                    <div class="input-box">
                        <label class="label" for="password" aria-required="true">Password</label>
                        <input type="password" name="Password" id="password" placeholder="-------">
                    </div>
                    <div class="input-box">
                        <label class="label" for="check-password" aria-required="true">Re-enter your Password</label>
                        <input type="password" name="Password" id="check-password" placeholder="-------">
                    </div>

                    <div class="remember">
                        <label class="label" for=""><input type="checkbox" value="remember-me">Remember Me</label>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Sign In">
                    </div>
                    <div class="input-box">
                        <p>Already have an account? <a href="login.html">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>