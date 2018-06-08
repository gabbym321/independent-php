<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
<?php
  print('Hello, World!');

  print("\nThe sum of 2 and 3 is 5.");
  $argv = [2,4,6,8];

  $sum = $argv[1] + $argv[2];
  print("\nThe sum of $argv[1] and $argv[2] is $sum.");
 
?>
<br>
<?php
$name = "awaken";
if ($name== "Mario" ){ 
echo "I am $name";
} else {
  echo "Thats not my name!";
}

?>
<br>
<?php
for ($x=0; $x <= 5; $x++) {
  echo "The number is $x <br>"; }

?> <br>
<?php
if(isset($_POST['name'], $_POST['age'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  echo "Your name is {$name} and your age is {$age}"; 
}

?>
<form action="sandbox.php" method="get">
  <input type="text" name="name" >
  <input type="text" name="age">
  <input type="submit">
  
</form>
</body>
</html>