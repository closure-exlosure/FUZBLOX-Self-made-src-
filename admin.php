<?php

require("Opanel.php");
session_start();
if (!isset($_SESSION['username']) ||  !isset($_SESSION['power'])  ||  $_SESSION['power'] < 2) {  header("location:/default.php"); exit;
}
?>



<link rel="stylesheet" href="main.css">
<style>

body {


    margin:0;
color:white;
    padding:0;
}
.rightnav {
display:block;
    background-color:rgba(4, 154, 207, 1);
    height:100%;
width:250px;
}

.rightnav a {
text-align:center;
    display:block;
    font-size:16px;
}


.rightnav i {
font-size:20px;
    display:block;
    text-align:center;
}

</style>







