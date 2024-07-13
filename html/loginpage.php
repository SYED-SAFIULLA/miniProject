<?php 
  require("loginP.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <?php
      if($error != null){
        ?><style>.error{display: block;}</style><?php
      } ?>
    
    <img src="../images/minilogo.png" />
    <form action="" method="post">
      <h2 class="hed1">Login to Your Account</h2>
      <br />
      <label>Email</label><br />
      <input type="text" name="email" required /><br /><br />
      <label>Password</label><br />
      <input type="password" name="password" required /><br /><br /><br />
      <button type="submit" name="submit" id="button1"><centre><a id="lg" >LOGIN</a></centre></button><br /><br />
      <p class="error">
        <?php echo $error; ?>
      </p>
      <button type="reset" id="button2">RESET</button>
      <span class="l1"><a href="signin.php">sign up</a></span>
    </form>
  </body>
  </html>
  
<div id="google_translate_element"></div>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en', 
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
  }
  </script>        
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../lang.js"></script>

<style>
  #google_translate_element {
    display: none;
  }
</style>