<?php
function connect() {
  $config_str = file_get_contents('mysql_config');
  $config_str = preg_split('/\n/', $config_str);
  $config = array();
  foreach($config_str as $config_line) {
    $line_split = preg_split('/:[ ]*/', $config_line, 2);
    $key = $line_split[0];
    $value = $line_split[1];

    $config[$key] = $value;
  }

  $conn = mysql_connect($config['host'], $config['user'], $config['password'])
    or die("Could not connect to mysql.");
  mysql_select_db($config['database']);
  return $conn;
}
?>