
<?php
//include the session to notice that the session is already in progres
session_start();
//after the logout button clicked destroy the session.
session_destroy();
header('Location: login.php');
?>