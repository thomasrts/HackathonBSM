<?php

require_once "MapIntegration.php";
$map = new MapIntegration();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Maps</title>
</head>
<body>
<div>

   <?php $map->getmap()?>

</div>
</body>
</html>
