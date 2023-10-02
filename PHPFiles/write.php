<?php
  $myFile  = fopen("testfile.txt","a");
  $txt = "Mickey Mouse\n";
  fwrite($myFile, $txt);
  $txt  = "Minnie Mouse\n";
  fwrite($myFile, $txt);
  fclose($myFile);
?>