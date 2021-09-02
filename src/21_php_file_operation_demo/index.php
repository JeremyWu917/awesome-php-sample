<?php
  echo readfile("webdictionary.txt");
  echo "<br>";

  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  echo fread($myfile, filesize("webdictionary.txt"));
  fclose($myfile);
  echo "<br>";

  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  echo fgets($myfile);
  fclose($myfile);
  echo "<br>";

  echo "<h2>Web Dictionary:</h2>";
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  $content = "";
  // 输出单行直到 end-of-file
  echo "<ol>";
  while(!feof($myfile)) {
    $content = fgets($myfile);
    if (trim($content) != "")
    echo "<li>" . $content . "</li>";
  }
  echo "</ol>";
  fclose($myfile);

  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  // 输出单字符直到 end-of-file
  echo "<ol>";
  while(!feof($myfile)) {
    echo "<li>" . fgetc($myfile) . "</li>";
  }
  echo "</ol>";
  fclose($myfile);

  $myfile = fopen("testfile.txt", "w");
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = "Bill Gates\n";
  fwrite($myfile, $txt);
  $txt = "Steve Jobs\n";
  fwrite($myfile, $txt);
  fclose($myfile);

  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = "Mickey Mouse\n";
  fwrite($myfile, $txt);
  $txt = "Minnie Mouse\n";
  fwrite($myfile, $txt);
  fclose($myfile);

?>