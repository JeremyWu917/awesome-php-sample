<?php
  echo strlen("Hello world!");
  echo('<br>');
  echo str_word_count("Hello world!"); // 输出 2
  echo('<br>');
  echo strrev("Hello world!"); // 输出 !dlrow olleH
  echo('<br>');
  echo strpos("Hello world!","world");
  echo('<br>');
  echo str_replace("world", "Kitty", "Hello world!"); // 输出 Hello Kitty!
?>