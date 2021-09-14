<?php
  // 连接本地的 Redis 服务
  $redis = new Redis();
  $redis->connect('127.0.0.1', 6379, '123');
  echo "Connection to server successfully!<br>";
  // 查看服务是否允许
  echo "Server is running: " . $redis->ping() . "<br>";

  // Redis String 实例
  // 创建并设置 key 值
  $redis->set("name", "jeremy");
  $redis->set("age", 30);
  // 根据 key 获取 value
  echo "Stored string in redis:<br> name = " . $redis->get("name") . ", age = " . $redis->get("age") . "<br>";

  // Redis List 实例
  //存储数据到列表中
  $redis->lpush("db_name", "Redis");
  $redis->lpush("db_name", "Mongodb");
  $redis->lpush("db_name", "Mysql");
  // 获取存储的数据并输出
  $arList = $redis->lrange("db_name", 0 ,5);
  echo "Stored string in redis:<br> ";
  print_r($arList);
  echo "<br>";

  // Redis Keys 实例
  // 获取数据并输出
  $arList = $redis->keys("*");
  echo "Stored keys in redis:<br> ";
  print_r($arList);
  echo "<br>";
  
?>