<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

    <?php
    $age = array("peter"=>"21","ben"=>"32", "mosh"=>"54");
    ksort($age);

    foreach($age as $a => $a_value){
      echo "key="  . $a .",value=" . $a_value;
      echo "<br>";
    }
  ?>
</body>
</html>