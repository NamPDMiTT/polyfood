<?php
require_once "/xampp/htdocs/polyfood/global.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <header>
            <h1>QUẢN TRỊ WEBSITE</h1>
        </header>
                
        <?php require_once '/xampp/htdocs/polyfood/admin/menu.php';?>
        <?php
                require_once $VIEW_NAME;
            ?>

    
        </div>
</body>
</html>