<?php
$id = $_POST['id_user'];
$password = $_POST['password'];
if (isset($_POST['login'])) {
    if ($id == "admin" && $password == "admin") {
        header("location: index.php");
    } else {
        echo "<alert>Username atau Password Salah</alert>";
    }
}
