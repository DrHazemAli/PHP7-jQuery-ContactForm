<?php

  if (isset($_POST) && !empty($_POST['name']) && !empty($_POST['email']) )  {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $adminMail = "hazem@domain.com";


    $contents = " Name : $name \r\n Email : $email \r\n Msg: $msg";


    if (mail($adminMail, "You got mail", $contents)) {
      echo "Your message has been sent.";
    }else {
      echo "Error";
    }



  }

 ?>
