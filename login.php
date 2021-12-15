<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" />
    <title>UKM Bahagia</title>
    <link rel="icon" href="logo2.png">
    <script src="login.js"></script>
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="logo.png" alt="">
            </div>
            <div class="back">
                <img class="backImg" src="logo.png" alt="">
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="#" id="formlogin" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <input type="text" placeholder="Masukkan Username" required name="user">
                            </div>
                            <div class="input-box">
                                <input type="password" placeholder="Masukkan Password" required name="pass">
                            </div>
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
                            ?>
                            <div class="button input-box">
                                <input type="submit" value="Masuk" name="login">
                            </div>
                            <div class="text sign-up-text">Belum Punya Akun? <label for="flip">Daftar Sekarang</label></div>
                        </div>
                    </form>
                </div>
                <div class="signup-form">
                    <div class="title">Daftar</div>
                    <form action="#" id="formdaftar" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <input type="text" placeholder="Masukkan Nama Anda" required name="name">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Masukkan Username" required name="username">
                            </div>
                            <div class="input-box">
                                <input type="password" placeholder="Masukkan Password" required name="password">
                            </div>
                            <div class="input-box">
                                <input type="password" placeholder="Masukkan Password Kembali" required name="passwordcek">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Masukkan No Telpon" required name="notelp">
                            </div>
                            <?php
                            $host = "localhost";
                            $user = "root";
                            $password = "";
                            $db = "ukmbahagia";
                            $connect = mysqli_connect($host, $user, $password);
                            mysqli_select_db($connect, $db);

                            if (isset($_POST['signup'])) {
                                $name = $_POST['name'];
                                $username = $_POST['username'];
                                $pass = $_POST['password'];
                                $notelp = $_POST['notelp'];
                                $cpass = $_POST['passwordcek'];

                                $s = " select * from akun where username = '$username'";
                                
                                $result = mysqli_query($connect, $s);
                                
                                $num = mysqli_num_rows($result);
                                
                                if($num == 1){
                                    echo "Username Sudah Ada";
                                }
                                else{
                                   if ($cpass == $pass){
                                    $reg = " insert into akun (nama, username, password, notelp) values
                                    ('$name' , '$username' , '$pass', '$notelp')";
                                
                                    mysqli_query($connect, $reg);
                                    header('Location: login.php');
                                   }
                                   else {
                                       echo "Password Tidak Sama";
                                   }
                                }
                            }
                            ?>
                            <div class="button input-box">
                                <input type="submit" value="Daftar" name="signup">
                            </div>
                            <div class="text sign-up-text">Sudah Punya Akun? <label for="flip">Login Sekarang</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

