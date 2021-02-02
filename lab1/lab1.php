<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Lab 1 - Mason Douglas</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

</head>
<body>
<?php
//Connect to DB
$user = 'Mason1135879';
$database = 'Mason1135879';
$passw = 'OtP4VsItvz';
$db = new PDO("mysql:host=172.31.22.43;dbname=$database", $user, $passw);

//sql Querry & CMD
$sql = "SELECT * FROM relatives";
$cmd = $db->prepare($sql);
$cmd->execute();

//sql fetch
$family = $cmd->fetchAll();

//table
echo '<table class="table table-striped table-dark"><thead><th>Name</th><th>Age</th><th>Occupation</th></thead>';

foreach ($family as $members)
{
    echo '<tr><td>' . $members['name'] . '</td>
        <td>' . $members['age'] . '</td>
        <td>' . $members['occupation'] . '</td></tr>';
}

// close the table
echo '</table>';
// 6. Disconnect from the database
$db = null;

?>
</body>
</html>