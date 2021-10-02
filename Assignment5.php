<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

 
</head>
<body>
<form action="assignment5.php" method="POST">
    Guess a Number Between 1 and 100: 
<input type="text" name="num" value=''/> 
<input type="submit" name="submit" value="Check"/>
<br><br>
<?php 
$randomnumber = rand(1,100);    
    
$number= $_POST['num'];
if(isset($_POST['submit'])){
if($number == $randomnumber)
    {
    echo "Bdhai Ho.. You Guessed a Right Number";
    }
elseif($number > $randomnumber){
    echo "Hey..!! You Guessed a  higher Number,Try again";
}
elseif($number < $randomnumber){
    echo "Hey..!! You Guessed a  Lower Number,Try again";
    }
 }
?>

  
</form>
</body>
</html>