<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="refresh" content="2;url=http://martyvaughn.com/history.html" />
    <title></title>
  </head>
  <body>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $toemail = "martyjovaughn@gmail.com, 4808686145@vtext.com";
    $subject = "New Message: MartySite";

    mail($toemail, $subject, "Their message: \n \n" . $message,"You got an email
     from your website!  Reply to: " . $email) or die("Error!!!");

    echo "Your message has been sent. This page will redirect automatically.";
     ?>
  </body>
</html>
