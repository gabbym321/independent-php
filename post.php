<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
 

 <h1>Contact us</h1>
<form action="post.php" method="post">
 Name:<input type="text" name="name" > <br>
 enter your email:<input type="text" name="email" > <br>
  Enter messaage:<textarea name="message"></textarea> <br>
  <input type="submit" value="submit">
  
</form>
<?php 
    if(isset($_POST['submit'])) {#If you press submit all of this happens. Store the text inside of the form into a var msg
    echo "Your email has been submitted thank you";
      $msg = 'Name: ' .$_POST['name'] ."\n" 
      .'Email: ' .$_POST['email'] ."\n" 
      .'Message: ' .$_POST['message'];
      mail('gabrielm1571@hstat.org', 'Sample contact us form', $msg); #Mail has the email its getting sent to, the subject for the email and then the varible made earlier
     
    } 
?>

</body>
</html> 