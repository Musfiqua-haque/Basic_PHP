'<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $a = 20;
  $b = 30;

  function add(){
    $GLOBALS['c'] = $GLOBALS['a']+$GLOBALS['b'];
  }
  add();
  echo $c;
  echo "<br>";

  echo $_SERVER['PHP_SELF'];
  echo "<br>";

  echo $_SERVER['SERVER_NAME'];
  echo "<br>";

  echo $_SERVER['HTTP_HOST'];
  echo "<br>";

  echo $_SERVER['SCRIPT_NAME'];
  echo "<br>";
?>
</body>
</html>'