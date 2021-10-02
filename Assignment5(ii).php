<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Number</title>

    <?php

$a= $_POST['number_entered'];
$submitbutton= $_POST['submit'];
$square= ($a * $a);

$snum = (string) $square;
$revstr = strrev($snum);
$reverse = (int) $revstr;

$underoot = sqrt($reverse);

$snum2 = (string) $underoot;
$revstr2 = strrev($snum2);
$reverse2 = (int) $revstr2;

?>

</head>
<body>
<form action="assignment5(part-2).php" method="POST">
Enter a number to check Its a Adam or not: 
<input type="text" name="number_entered" value=''/> 
<input type="submit" name="submit" value="Check"/><br><br>
<?php
if ($a==$reverse2)
echo "Adam Number";
else
echo "Not a Adam Number";
?>
</form>
</body>
</html>