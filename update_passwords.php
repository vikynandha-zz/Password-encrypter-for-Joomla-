<?php
include('connect.php');
include('encrypt.php');

$conn = connect();
$result = mysql_query("SELECT * from jos_users;", $conn);
while($row = mysql_fetch_object($result)) {
  echo "UPDATE jos_users SET password='" . encrypt($row->password) . "' WHERE username='" . $row->username . "';\n";
}
?>