<?php
require('db.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST" &&  isset($_POST['users'])) {

    $users = $_POST['users'];
    $password = $_POST['password'];
    $usrmail =  $_POST['usrmail'];



$hash_password =  password_hash($password,  PASSWORD_DEFAULT);

$sql = "INSERT INTO `users`(`username`, `password`, `email`, `power`) VALUES ('$users','$hash_password','$usrmail', '0')";
  

if (mysqli_query($conn, $sql)) {
  $_SESSION['username'] = $users;

header("location:/default.php");


}

}



?>



<style>

body {
font: normal 8pt/normal 'Comic Sans MS' , Verdana, sans-serif;
    margin:0;
    padding:0;
}
.oldnavbar {

    text-align: center;
    background-color:rgb(0, 105, 165);
    height:180px;
    border:2px double rgba(10, 8, 10, 0.3);

box-shadow:5px 5px 10px solid rgba(0,0,0, 0.2);
}




.oldnavbar a {
font-size:21px;
font-weight:700;
    
}





input {
    display:flex;
    font:normal 8pt/normal 'Comic Sans MS' , Verdana, sans-serif;
    border-radius:2px;
    font-size:15px;
    padding:5px;
    border:2px double rgba(10, 8, 10, 0.3);
    margin:5px;
    
}

button {
  font:normal 8pt/normal 'Comic Sans MS' , Verdana, sans-serif;
  padding:10px;
  width:168px;
  font-size:15px;
  font-weight:700;
  background-color:red;
border:2px solid rgba(10, 8, 10, 0.3);
}

button:hover {

    background-color:rgba(226, 4, 4, 1);
}


.oldnavbar img {
height:120px;

}


</style>
<link rel="stylesheet" href="main.css">
<div class="oldnavbar">

<img src="banner.png"style="width: 100%;">
<a>My FuzBlox: A Free To Play Game! |</a>


<a> Catalog |</a>


<a> Group |</a>

<a> BuildersClub! </a>


</div>
<center>
<div style="margin:60px;">
<form method="POST" action="">
<h2 style="font-size:39px; color:red;">FuzBlox</h2>
<input placeholder="username"name="users" Required>
<input placeholder="password" name="password" Required>
<input placeholder="email" name="usrmail" type="email" Required>
<button name="btn">Sign-Up</button>
</form>
</div>
</center>
