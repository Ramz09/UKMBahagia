<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "ukmbahagia";

$connect = mysqli_connect($host, $user, $password);
mysqli_select_db($connect, $db);

$name = $_POST['name'];
$username = $_POST['username'];
$pass = $_POST['password'];
$notelp = $_POST['notelp'];

$s = " select * from akun where username = '$username'";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Sudah Ada";
}
else{
    $reg = " insert into akun(nama, username, password, notelp) values
    ('$name' , '$username' , '$pass', '$notelp')";

    mysqli_query($connect, $reg);
    header('Location: login.php');
}
?>