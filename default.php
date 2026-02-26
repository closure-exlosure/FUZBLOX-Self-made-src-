<?php
require("db.php");
require("nvbr.php");


session_start();

if (!isset($_SESSION['username'])) {
    header("location:/sign-up.php");
    exit;
}


$query = "SELECT power, friend_count FROM users WHERE username='{$_SESSION['username']}'";
$result = mysqli_query($conn, $query);


$userData = mysqli_fetch_assoc($result);
$_SESSION['power'] = $userData['power'];
$friendCount = $userData['friend_count']; 

?>
<link rel="stylesheet" href="main.css">

<style>
 body {

     background-image:url('fullbck.png');
     background-position:center;
     background-size:120%;
 }
.hmbr {

height:390px;

width:250px;

background-color:rgba(69, 147, 192, 0.8);

border:1px solid rgba(255, 255, 255, 0.8);

}

h3 {

font-size:19px;

text-align:center;

}

.hmbr a {

display:block;

text-decoration:none;

}

</style>
<div style="height:136px;margin-top:10px;"  class="hmbr">
<h1>Category</h1>
<p> View <a href="/players.php" style="color:green; display:inline-block;">Users</a></p>
<p> Play <a href="/games.php" style="color:green; display:inline-block;">Games</a></p>
<p> Join Our <a href="/discord" style="color:blue; display:inline-block;">Discord</a></p>
</div>
<div class="hmbr">

<h3> Welcome, <?php echo $_SESSION['username'] ?></h3>

<img src="figure.png">

<h3 style="color:rgba(12, 177, 3, 1); font-size:14px;">Online</h3>

<center>

<a style="font-size:19px;">Customize</a>

<a href="logout.php" style=" color:red; font-size:19px;">Logout</a>

<?php if (isset($_SESSION['power']) && $_SESSION['power'] >= 2): ?>

<a href="admin.php" style="color:red;">Admin</a>

<?php endif ?>

   <?php
        if ($friendCount > 0) {
            echo "You have $friendCount friend" . ($friendCount > 1 ? "s" : "") . "!";
        } else {
            echo "Oh no! You have no friends!";
        }
        ?>
    
</center>

</div>

<div style="height:107px;" class="hmbr">

<center><h1>Blog</h1></center>

<center><p>Great News! we just added Friends. later we are going to add friend request which are team is gonna work on!</p></center>

</div>



