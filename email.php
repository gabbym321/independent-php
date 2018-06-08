<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
  
<form method="post" name="myemailform" action="form-to-email.php">


Enter Name: <input type="text" name="name"> <br>
Enter Email Address:<input type="text" name="email"> <br>

Enter Message:<textarea name="message"></textarea> <br>

<input type="submit" value="Send Form">

</form>

<?php
#if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
#}
?>
<?php
$email_from = 'gabbym321@github.com';
$email_subject = 'New Form Submission';
$email_body = "You have recived a new message from the user $name. \n". "Here is the message: $message \n.";

?>
<?php
$to= 'gabrielm1571@hstat.org';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
?>
<?php
function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>
</body>
</html>