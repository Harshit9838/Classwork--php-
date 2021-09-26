<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Convert</title>
    <link rel="stylesheet" href="">
<?php
    $mydata=$_POST['mystring'];
    $Rtrim=$_POST['mystring10'];
    $tr_replace=$_POST['string2'];
    $steplace=$_POST['mystring7'];
    $strasecmp=$_POST['mystring3'];
    $stros=$_POST['mystr4'];
    $substr=$_POST['mystring5'];
    $chop=$_POST['mystring16'];
    $operator = $_POST['operator'];
    $result='';

    switch ($operator) {
        case "Encrypt using Md5":
            $result = md5($mydata);
            break;
        case "Number_format":
            $result= number_format($mydata);
            break;
        case "Ord":
            $result= ord($mydata);
            break;
        case "Rtrim":
            $result= rtrim($mydata,$Rtrim);
            break;
        case "Str_replace":
            $result= str_replace($tr_replace,$steplace,$mydata);
            break;
        case "Str_len":
            $result= strlen($mydata);
            break;
        case "Strcasecmp":
            $result= strcasecmp($mydata,$strasecmp);
            break;
        case "Strrpos":
            $result= strpos($mydata,$stros);
            break;
        case "subStr":
            $result= substr($mydata,$substr);
            break;
        case "Str-to-Lower":
            $result= strtolower($mydata);
            break;
        case "Bin_to_Hex":
            $result = bin2hex($mydata);
            break;
        case "Chop":
            $result= chop($str,$chop);
            break;
    }
?>

    
    <style>
        body {
            background: -webkit-gradient(linear, left top, left bottom, from(#474A8A), to(#000000))fixed;
        }

        .container input:hover {
            background-color: rgb(83, 104, 41);
            color: rgb(247, 188, 188);
        }

        .container2 input:hover {
            background-color: rgb(39, 39, 33);
            color: rgb(228, 119, 119);
        }

        .container {
            margin-left: 400px;
        }

        .container3 {
            margin-left: 500px;
            font-size: large;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color:brown;
        }
        p{
            margin-left: 550px;
        }
        .container4{
            margin: 50px;
            align-self: auto;
            column-gap:20px;
            row-gap: 20px;
        }
    </style>
    
</head>

<body>
    <form action="assignment4.php" method="POST">
        <div class="container3">
            <label for="">Try to Write Something Here:</label>
            <input type="text" name="mystring" value="">
        </div> <br>
        <div class="container4">
            <table style="background-color:goldenrod;font-family: Georgia, 'Times New Roman', Times, serif;font-size: large;">
            <tr>
                <td><label for="">Enter text if you want Rtrim:</label></td>
                <td><input type="text" name="mystring10" value=""></td>
            </tr>
            <tr>
                <td><label for="">Enter text if you want string_Replace:</label></td>
                <td><input type="text" name="string2" value=""> </td>
            </tr>
            <tr>
                <td><label for="">Enter text if you want string_Replace with:</label></td>
                <td><input type="text" name="mystring7" value=""> </td>
            </tr>
            <tr>
                <td><label for="">Enter text if you want Strcasecmp:</label></td>
                <td><input type="text" name="mystring3" value=""> </td>
            </tr>
            <tr>
                <td><label for="">Enter text if you want Strpos:</label></td>
                <td><input type="text" name="mystr4" value=""> </td>
            </tr>
            <tr>
                <td><label for="">Enter text if you want subString:</label></td>
                <td><input type="text" name="mystring5" value=""> </td>
            </tr>
            <tr>
                <td><label for="">Enter text if you want chop:</label></td>
                <td><input type="text" name="mystring16" value=""> </td>
            </tr>
            <br>
            
    </table>
        </div>
        <br>
        <div class="container">
            <input name="operator" type="submit" value="Encrypt using Md5">
            <input name="operator" type="submit" value="Number_format">
            <input name="operator" type="submit" value="Ord">
            <input name="operator" type="submit" value="Rtrim">
            <input name="operator" type="submit" value="Str_replace">
            <input name="operator" type="submit" value="Str_len">
        </div>
        <br><br>
        <div class="container">
            <input name="operator" type="submit" value="Strcasecmp">
            <input name="operator" type="submit" value="Strrpos">
            <input name="operator" type="submit" value="subStr">
            <input name="operator" type="submit" value="Str-to-Lower">
            <input name="operator" type="submit" value="Bin_to_Hex">
            <input name="operator" type="submit" value="Chop">
        </div>
        <br><br>
        <p>
        <b>Result</b>  <input type ="text" name="result" value= ? echo($result)> 
            </p>
            <br>
            <br>

        <div style="margin-left: 600px;" class="container2">
            <input type="reset" value="Reset Now">
        </div>
    </form>
    
</body>

</html>