<?php

    echo $Id = $_GET['ID'];
    include 'Config.php';
    mysqli_query($con, "DELETE FROM `product` WHERE 0$Id);
    header("location:index.php");
?>