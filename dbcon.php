<?php 

$username = "root";
$pass = "";
$server = "localhost";
$db = "book_library";

$con = mysqli_connect($server,$username,$pass,$db);

if(!$con){
?> <script>alert("Database connection Failed");</script>
<?php
}
// else
//     {echo "Connection done";}
