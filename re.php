<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  <?php
  $myString = "I am learning php";
  $pattern = "/php/i";
  echo "Is there any php word: ";
  echo preg_match($pattern,$myString);

  echo"<br>";

  $myString1 = "I am learning php & learning php is not so easy infact learning seomething is never be easy.";
  $pattern = "/learning/i";
  echo "Total learning word is: ";
  echo preg_match_all($pattern,$myString1);

  echo"<br>";

  $myString2 = "I am learning php";
  $pattern = "/php/i";
  echo "Total learning word is: ";
  echo preg_replace($pattern,"javascript",$myString2);

  ?>
</body>
</html>