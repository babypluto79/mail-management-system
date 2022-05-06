<!-- session destroy karke direct login page pe -->

<?php
// Start the session
session_start();
session_destroy();

header("location: home.php");

?>