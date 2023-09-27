<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["name"])){
    $nameErr = "name is required";
  }
  else{
    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
      $nameErr = "The name field only contain letter & whitespace";
    }
  }
  if(empty($_POST["email"])){
    $emailErr = "email is required";
  }
  else{
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailErr = "Wrong email formet";
    }
  }
  if(empty($_POST["website"])){
    $websiteErr = "website is required";
  }
  else{
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
  if(empty($_POST["comment"])){
    $commentErr = "comment is required";
  }
  else{
    $comment = test_input($_POST["comment"]);
  }
  if(empty($_POST["gender"])){
    $genderErr = "gender is required";
  }
  else{
    $gender = test_input($_POST["gender"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<span>* Required field</span>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name">
  <span>*<?php echo $nameErr; ?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span>*<?php echo $emailErr; ?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span>*<?php echo $websiteErr; ?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <span>*<?php echo $genderErr; ?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>