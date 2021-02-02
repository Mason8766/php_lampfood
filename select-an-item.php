<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>FILL DROPDOWN FROM DB QUERY</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
    <form method="post" action="display-item.php"
          <fieldset>
              <label for="item">Choose an Item:</label>
              <select name="item" id="item">
                  <?php
                    //Connect
                    $user = 'Mason1135879';
                    $database = 'Mason1135879';
                    $passw = 'OtP4VsItvz';
                    $db = new PDO("mysql:host=172.31.22.43;dbname=$database", $user, $passw);
                    //Write query
                    $sql = "SELECT itemId, name FROM items";
                    //Set up command, excute query &store result data
                    $cmd = $db->prepare($sql);
                    $cmd-> execute();
                    $items = $cmd->fetchAll();
                    //loop throught data, and a new item to the dropdown for each one
                    foreach ($items as $item){
                        echo'<option value="'.$item['itemId'].'">'.$item['name'].'</option>';
                    }
                    //disconect
                    $db = null;

                  ?>
              </select>
          </fieldset>
          <button class="btn btn-primary">Find</button>
    </form>

</body>
</html>
