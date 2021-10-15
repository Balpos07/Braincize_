<?php


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="" method="post">
            <div class="container">
            <div class="imgcontainer">
                <img src="images/avater.png" alt="Avatar" class="avatar">
            </div>
                <label for="email"><b></b></label>
                <input type="email" placeholder="email adress" name="email" required>
                <br>
                <label for="psw"><b></b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <br>
                <button type="submit">Login</button>
                <label>
                <br>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container2" style="background-color:#f1f1f1">
                <a href="signup.php">Or sign up now</a>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        <style>

/* Full-width inputs */
input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: rgba(49, 13, 13, 0.979);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  width: 100%;
}

/* Avatar image */
img.avatar {
  width: 13%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
  width: 40%;
  margin: auto;
  background-color: rgba(145, 137, 137, 0.979);
  margin-top: 8%;
}
.container2{
    padding: 16px;
  width: 40%;
  margin: auto;
  background-color: rgba(145, 137, 137, 0.979);
  margin-top: 0%;
}
.container2 a {
    color: rgba(49, 13, 13, 0.979);
    font-weight: bold;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
} 
        </style>
    </body>
</html>