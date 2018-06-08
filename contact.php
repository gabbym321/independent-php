

<?php 
    if(isset($_POST['submit'])) { #If you press submit all of this happens. Store the text inside of the form into a var msg
      $msg = 'Name: ' .$_POST['name'] ."\n" 
      .'Email: ' .$_POST['email'] ."\n" 
      .'Message: ' .$_POST['message'];
      mail('gabrielm1571@hstat.org', 'Sample contact us form', $msg); #Mail has the email its getting sent to, the subject for the email and then the varible made earlier
     
    } else {
        exit(0);
    }
?>



