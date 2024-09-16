<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<style>
    body{
        background-image: url(images/background.jpg);
    }
</style>
<header>
    <nav>
      <h1>More Information</h1>
      <p style="float: center;">
      <a href="Home_Page.html">Home</a> |  
      <a href="about.html"> About </a> |
      <a href="Contacts.html"> Contact Us </a> |
      <a href="termsofservice.html"> Terms of Services </a> |
      <a href="Privacypolicy.html"> Privacy Policy </a> |
      </p>
    </nav>
  </header>
<body>
    <div class="container">
    <form id="form">
        <h1>Login Here</h1>
        <input type="text" id="username" name="username" placeholder="Enter Username" required autofocus> <br> <br>
        <input type="password" id="password" name="password" placeholder="Enter Password" required autofocus> <br>  
        <div class="links">
            <a href="./index.html" value="Don't Have account?">Register Here</a>
        </div>
        <button type="submit" id="style3" >submit </button>    

    </form>
    </div> 
</body>
</html>