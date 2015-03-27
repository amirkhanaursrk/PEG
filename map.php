<?php
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}
?>

<html>
<head>
<title>HI</title>
</head>
<body>
Login Successful
</body>
</html>
