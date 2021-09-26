<?php
$connection=mysqli_connect('localhost','root','');
if($connection)
{
    echo("connection created");
}
else{
    echo "problem in connection";
}
if(mysqli_select_db($connection,'sectiongmt')){
echo" database connected";
}
else{
    echo "problem in database selection";
}
$uname=$_POST['fnum'];
$password=$_POST['snum'];

$insert_query= "INSERT INTO registration(username,pass) VALUES ('$uname','$pass')";
if((mysqli_query($connection, $insert_query)){
    echo "data inserted";
}
else{
    echo "error in data insertion";
}

?>