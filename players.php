<?php
session_start();
require("db.php");
require("nvbr.php");
$query = "SELECT username FROM users";
$result = mysqli_query($conn, $query);

$usernames = []; 

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $usernames[] = $row["username"]; 
    }
} else {
    $usernames[] = "No usernames found";
}

mysqli_free_result($result);


?>
<style>
.bdy {
    background-color:rgba(81, 137, 206, 1);
    width:100%;
    border:1px solid rgba(10, 10, 19,  0.2);
}




.bdy button {
    padding:10px;
    font: normal 8pt/normal 'Comic Sans MS' , Verdana, sans-serif;
    font-weight:700;
    font-size:13px;
    height:35px;
    border:1px solid rgba(20, 10, 10, 0.3);
    color:white;
    background-color:red;
    margin-bottom:2px;
    cursor:pointer;
}
p {
    display:block;
    color:white;


}
h1 {

    color:white;
}
img {
    display:block;
}

input {

    text-align:center;
    font: normal 8pt/normal 'Comic Sans MS' , Verdana, sans-serif;
    width:200px;
    font-size:16px;

}
</style>
<link rel="stylesheet" href="main.css">
<center>
<div style="margin:60px;">
<div class="bdy">
<h1 style="font-size:34px;">Players!</h1>
<input placeholder="Search for Players!"><button>Search!</button>


<?php foreach($usernames as $username): ?>
<p style="font-size:21px; font-weight:700;"><?php echo '<img src="figure.png" width="100">' .$username ?></p>
<?php endforeach; ?>
</div>
</center>
</div>