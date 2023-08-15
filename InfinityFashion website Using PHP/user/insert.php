<?php
$Con = mysqli_connect('localhost', 'root', '', 'ecommerce');

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];

    $duplicateEmailResult = mysqli_query($Con, "SELECT * FROM `user` WHERE Email = '$Email'");
    $duplicateUsernameResult = mysqli_query($Con, "SELECT * FROM `user` WHERE UserName = '$Name'");

    if (mysqli_num_rows($duplicateEmailResult) > 0) {
        echo "Email already taken.";
    } elseif (mysqli_num_rows($duplicateUsernameResult) > 0) {
        echo "Username already taken.";
    } else {
        mysqli_query($Con, "INSERT INTO `user`(`UserName`, `Email`, `Number`, `Password`) 
                            VALUES ('$Name','$Email','$Number','$Password')");
        echo "User registered successfully.";
    }
}
?>
