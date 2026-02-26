<?php

require('nvbr.php');


?>


<style>
button {
  font:normal 8pt/normal 'Comic Sans MS' , Verdana, sans-serif;
  padding:10px; 
  width:168px; 
  font-size:19px;
  font-weight:700;
display:block;
border:2px solid rgba(10, 8, 10, 0.3);
margin:6px;
transition:all 0.2s;

}

button:hover {

background-color:rgba(103, 158, 210, 1);
}

</style>


<link rel="stylesheet" href="main.css">
<center>
<h1>Welcome To FuzBlox</h1>
<button onclick="window.location.href='/sign-up.php'">Sign-Up</button><button onclick="window.location.href='/sign-in.php'">Sign-In</button>
</center>
