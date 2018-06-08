<h1>Contact us</h1>
<form action="post.php" method="post">
 Name:<input type="text" name="name" > <br>
 enter your email:<input type="text" name="email" > <br>
  Enter messaage:<textarea name="message"></textarea> <br>
  <input type="submit" value="submit">
  
</form>
<?php 
if(isset($_POST['email'])){
    $email_to = "gabrielm1571@hstat.org"; 
    $email_subject = "Your email subject line";
    
    function died($error) {
        echo "we are sorry but there was an error we found with the form you submitted. ";
        echo "These errors are below. <br /> <br /> ";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors <br ?><br />";
        die();
    }
    if(!isset($_POST['name']) || //making sure that the expected data exists. 
        !isset($_POST['email'] ||
        !isset($_POST['message'])) {
        died('We are sorry, there appers to be an issue with the form that you submitted');
          
         $name = $_POST['name']; //Make a variable for each post 
         $email = $_POST['email'];
         $message = $_POST['message'];
         
         $error_message= "";
         $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-a]{2,4}$/'; //regex. This pretty much gives the charecters that should be in the email. an error occurs if it does not follow this. 
         
         if(!preg_match($email_exp, email_form))
         
        }
    

?>