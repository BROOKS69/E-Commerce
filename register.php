<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>

<body class="body">
    <div id="container-register">
            <div id="title">
            <i class='bx bx-lock'></i> Register
            </div>

            <form>
                <div class="input">
                    <div class="input-addon">
                    <i class='bx bx-envelope'></i>
                    </div>
                    <input id="email" placeholder="Email" type="email" required class="validate" autocomplete="off">
                </div>

                <div class="clearfix"></div>

                <div class="input">
                    <div class="input-addon">
                    <i class='bx bx-user-circle'></i>
                    </div>
                    <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
                </div>

                <div class="clearfix"></div>

                <div class="input">
                    <div class="input-addon">
                    <i class='bx bx-key'></i>
                    </div>
                    <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
                </div>

                <div class="remember-me">
                    <input type="checkbox">
                    <span style="color: #00abf0">I accept Terms of Service</span>
                </div>

                <input type="submit" value="Register" />
            </form>

            <div class="privacy">
                <a href="#">Privacy Policy</a>
            </div>

            <div class="register">
                <span style="color: #00abf0">Do you already have an account?</span>
                <a href="login.php"><button id="register-link">Log In here</button></a>
            </div>
        </div>

<!-- Footer section -->
<footer class="footerDwn">
          <!-- Footer content -->
        <p>Copyright &copy; 2024 E-commerce Platform by BROOKS. All rights reserved.</p>
</footer>

</body>

</html>