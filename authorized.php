<?php
session_start();
$name = $_SESSION['LOGGED_IN_USER'];
var_dump($_SESSION['LOGGED_IN_USER']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
    <h1><?php echo $session_id;?></h1>

</head>
<body>
<h1></h1>
</body>
</html>