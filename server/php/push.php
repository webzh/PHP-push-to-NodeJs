<?php

    $channel = isset($argv[1]) ? $argv[1] : '';
    $message = isset($argv[2]) ? $argv[2] : '';

    if ($channel == '' || $message == '') {
      echo "Error: Channel or message value not null" . PHP_EOL;
      exit;
    }

    $host = '127.0.0.1';
    $port = 6379;
    $redis = new Redis();
    try {
      $redis->connect($host, $port);
    } catch (\Exception $e) {
      echo "Error: redis connet failed" . PHP_EOL;
      exit;
    }

    $redis->publish($channel, $message);



 ?>
