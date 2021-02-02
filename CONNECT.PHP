<!DOCTYPE html>
<html>
<head>
<title>Database Connection</title>
</head>
<body>
<?php
$db = new PDO('mysql:host=172.31.22.43;dbname=Mason1135879', 'Mason1135879', 'OtP4VsItvz');
if (!$db) { echo 'could not connect';}
else { echo 'connected to the database';}
$db = null
?>
</body>
</html>