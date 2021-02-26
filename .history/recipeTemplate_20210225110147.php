<?php include_once("vars.php") ?>
<?php include_once("main.php") ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?=$title?></title>
</head>
<body>
  <h1><?=$heading?></h1>
  <div id = "main">
    <?=$content?>
  </div>
  <div id = "footer">
    <?=$dbFile?>
  </div>
</body>
</html>
