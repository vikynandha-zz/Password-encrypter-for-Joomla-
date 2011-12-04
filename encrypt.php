<?php
function stringify($val) {
  if($val < 0) {
    return false;
  }
  if($val < 10)
    return $val;
  return $val > 35 ? chr($val + 61) : chr($val + 55);
}

function encrypt($plain) {
  $salt = '';
  $rand;
  for($i = 0; $i < 32; $i++) {
    $rand = mt_rand(0, 61);
    $salt .= stringify($rand);
  }
  return md5($plain . $salt) . ':' . $salt;
}
?>