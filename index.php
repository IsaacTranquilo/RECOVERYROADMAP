<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" type="text/css" href="./css/customstyle.css"/>
</head>
<style>
  body{
    background-image: url(images/background3.jpg);
  }
</style>
<body>
  <header>
    <nav>
      <h1 style="text-align: left;"> For More Information </h1>
      <p style="float: center;">
      <a href="Home_Page.html"> Home </a> |
      <a href="about.html"> About </a> |
      <a href="Contacts.html"> Contact Us </a> |
      <a href="termsofservice.html"> Terms of Services </a> |
      <a href="Privacypolicy.html"> Privacy Policy </a> |
      <a href="login.html"> Login </a>
      </p>
    </nav>
  </header>
  <form action="" method="POST" id="form">
    <?php
    print_r($_POST);
    ?>
    <h1>REGISTRATION FORM</h1>
    <input type="text" id="Firstname" name="Firstname" placeholder="Enter first name" required focused> <br> <br>
    <input type="text" id="Secondname" name="Secondname" placeholder="Enter second name" required focused> <br> <br>
    <input type="number" id="Phonenumber" name="number" placeholder="Enter phone" required focused> <br> <br>
    <input type="email" id="Email" name="email" name="email" placeholder="Enter Email" required focused> <br> <br>
    <input type="password" id="Password" name="pass" placeholder="Enter Password" required focused> <br> <br>
    <input type="password" id="Password_1" name="pass2" placeholder="Re-enter Password" required focused> <br> <br>
    <button type="submit">Login</button>
  </form> 
  <script src="main.js"></script>
</body>
</html>