<?php

  
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "gabrielm1571@hstat.org"; //Who the email gets sent to 
  $email = $_REQUEST['email']; //request function into a variable 
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
    ini_set("SMTP", "aspmx.l.google.com");//SMTP is what varify the email to be sent 
    ini_set("sendmail_from", "gabrielm1571@hstat.org");

    $message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = gabrielm1571@hstat.org";

    $headers = "From: gabrielm1571@hstat.org";


    mail("gabrielm1571@hstat.org", "Testing", $comment, $header);
  
//if "email" variable is filled out, send email
  //Email response
  echo "Thank you for contacting us";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
      $error_message= "";
         $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-a]{2,4}$/'; //regex. This pretty much gives the charecters that should be in the email. an error occurs if it does not follow this. 
         
         if(!preg_match($email_exp, email_form))
         
       
?>

 <form method="post"> 

  Email: <input name="email" type="text" /> <br>

  Subject: <input name="subject" type="text" /> <br>

  Message:

  <textarea name="comment" rows="15" cols="40"></textarea> <br>

  <input type="submit" value="Submit" /> <br>
  </form>
  
<?php
  }
?>