<?php
if (isset($_POST['submit'])){
$name=$_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
}
$to='gabrielm1571@hstat.org';
$subject='form submission';
$mesg="Name: ".$name."\n". "Wrote the following: "."\n\n".$message';

?>