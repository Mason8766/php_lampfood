<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<title>USER REGESTRATION</title>
    </head>
    <body>
    <h1>ITEM DETTAILS</h1>
       <Form method="post" action="save-item.php">
        <fieldset>
            <label for="name">Name: </label>
            <input name="name" id="name" required/>
        </fieldset>
        <fieldset>
            <label for="quantity">Quantity</label>
            <input name="quantity" id="quantity" required type="number"/>
        </fieldset>
           <fieldset>
               <label for="categoryId">Category: </label>
               <select name="categoryId" id="categoryId">
                   <?php
                   // connect
                   $db = new PDO('mysql:host=172.31.22.43;dbname=Mason1135879', 'Mason1135879', 'OtP4VsItvz');

                   // set up query to fetch categories
                   $sql = "SELECT * FROM categories ORDER BY name";

                   // set up & execute command
                   $cmd = $db->prepare($sql);
                   $cmd->execute();
                   $categories = $cmd->fetchAll();

                   // loop through the results adding each category to the dropdown list
                   foreach ($categories as $c) {
                       echo '<option value="' . $c['categoryId'] . '">' . $c['name'] . '</option>';
                   }
                   ?>
               </select>
           </fieldset>
        <button>Save</button>
       </form>
    </body>
</html>