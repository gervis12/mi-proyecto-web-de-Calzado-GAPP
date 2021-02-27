<?php
include("db.php");
session_unset();
mysqli_close($conn);
header("location: index.php");
?>