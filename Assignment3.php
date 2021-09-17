<?php
// uppercase letters
print(strtoupper(" i am harsiht dixit , can you help me out."))."\n";
echo'<br>';
//lowercase letters
print(strtolower(" I AM HARSHIT DIXIT , CAN YOU HELP ME OUT"))."\n";
echo'<br>';
// string's first character uppercase
print(ucfirst("  i am harsiht dixit , can you help me out."))."\n";
echo'<br>';
// string's first character of all the words uppercase
print(ucwords("  i am harsiht dixit , can you help me out"))."\n";

echo'<br>';

$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";

echo'<br>';

$str1 = 'My Name is Harshit.';
if (strpos($str1,'Harshit') !== false) 
 {
    echo ' The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }

 echo'<br>';

 $str1 = 'rayy@example.com';
echo substr($str1, -3)."\n";
echo'<br>';

$value1 = 65.45;
$value2 = 104.35;
echo sprintf("%1.2f", $value1+$value2)."\n";
echo'<br>';

$str = 'the name of boss is always denoted by block letter.';
echo preg_replace('/the/', 'That', $str, 1)."\n";
echo'<br>';

$str1 = 'facebook';
$str2 = 'faceboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
echo'<br>';

$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
echo'<br>';



?>