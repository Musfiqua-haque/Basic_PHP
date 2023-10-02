<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
  if(isset($_REQUEST["submit"])){
    $file = $_FILES["uploadedFile"];
    $file_name = $_FILES["uploadedFile"]["name"];
    $file_type  =$_FILES["uploadedFile"]["type"];
    $file_tmp_name  = $_FILES["uploadedFile"]["tmp_name"];
    $file_size  = $_FILES["uploadedFile"]["size"];
    $file_dir  = "uploads/";

  $dotpos = strpos($file_name, '.')+1;
  $extension = substr($file_name,$dotpos);

    if(!empty($file_name)){
      if($extension == 'png'){
        if($file_type == 'image/png'){
          move_uploaded_file("$file_tmp_name",$file_dir.$file_name);
          echo "Uploaded successfully";
        }
        else{
          echo "select an image";
        }
      }
      else{
        echo "only png is submitted";
      }

    }
    else{
      echo "select a file";
    }
  }
?>
  <form method="POST" enctype="multipart/form-data">Select Image to upload:
    <br><br>
    <input type="file" name="uploadedFile" id="uploadedFile">
    <br><br>
    <input type="submit" name="submit" id="upload Image">
  </form>
</body>
</html>