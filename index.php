<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" type="text/css" href="design.css">
  </head>
  <body style="background-color: black">

    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">Employers</a>

        <ul class="nav_items">
          <li class="nav_item">
            
            <a href="#" class="nav_link"><?php
                  if (isset($_GET['msg'])) {
                    echo "<p style='color:orange'>".$_GET['msg']."</p>";
                  }
                ?>
                  


                </a>
                
            <a href="#" class="nav_link">Contact</a>
          </li>
        </ul>

        <button class="button" id="form-open">Login</button>
      </nav>

      <img src="admin.png" width="90%" height="500vh">
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form action="login.php" method="post">


            <h2>Login</h2>
             <div class="input_box">
              <input type="email" placeholder="Enter your email" required  name="email" />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Enter your password" required name="password" />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
             
            </div>

            <button class="button" name="login">Login Now</button>

            <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>

          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form action="registration.php" method="post">
            <h2>Signup</h2>
            <div class="input_box">
              <center>
                
              </center>
            </div>
            <div class="input_box">
              <input type="text" placeholder="Enter your full name" required name="fullname" />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="email" placeholder="Enter your email" required name="email" />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Create password" required name="password"/>
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
          

            <input class="button" type="submit" value="signup now" name="register">

            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
        </div>
      </div>
    </section>

    <script src="script.js"></script>
  </body>
</html>
<script type="text/javascript">
  const formOpenBtn = document.querySelector("#form-open"),
  home = document.querySelector(".home"),
  formContainer = document.querySelector(".form_container"),
  formCloseBtn = document.querySelector(".form_close"),
  signupBtn = document.querySelector("#signup"),
  loginBtn = document.querySelector("#login"),
  pwShowHide = document.querySelectorAll(".pw_hide");

formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    if (getPwInput.type === "password") {
      getPwInput.type = "text";
      icon.classList.replace("uil-eye-slash", "uil-eye");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("uil-eye", "uil-eye-slash");
    }
  });
});

signupBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.remove("active");
});
</script>