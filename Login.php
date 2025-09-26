<?php
require('koneksi.php');
require('Form.php');
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query ambil user berdasarkan email
    $sql = "SELECT * FROM akun WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION['email'] = $email;
        header("Location: produk.php"); 
        exit();
    } else {
        echo "<p style='color:red;'>Email atau password salah!</p>";
    }
}


$form = new Form($_SERVER['PHP_SELF'], "POST");
$form->open();
$form->Text('email', 'Email');
$form->Login('password', 'Password');
$form->close('Login');
?>