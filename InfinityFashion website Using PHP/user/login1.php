

<?php

    $Name = $_POST['name'];
    $Password = $_POST['password'];

    $Con = mysqli_connect('localhost', 'root', '', 'ecommerce');

    $result = mysqli_query($Con," SELECT * FROM `user` WHERE (UserName = '$Name' OR Email = '$Name') AND Password = '$Password'" );

    if(mysqli_num_rows($result)){

        echo"
            <script>
                alert('Successfully Login');
                window.location.href='index.php';
            </script>
        ";
    } else {

        echo"
            <script>
                alert('Incorrect email/username/password');
                window.location.href='login.php';
            </script>
        ";
    }

?>