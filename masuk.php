<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "ukmbahagia";
$connect = mysqli_connect($host, $user, $password);
mysqli_select_db($connect, $db);

if (isset($_POST['user'])) {

    $uname = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from akun where username='" . $uname . "'AND password='" . $password . "' limit 1";

    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "mantap";
        exit();
    } else {
        echo "gagal, harap coba lagi";
    }
}
