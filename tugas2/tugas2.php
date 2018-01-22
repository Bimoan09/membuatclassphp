<?php
class user_message {
 public $message = 'hello All, I am bimo';
 public function introduce($name)
 {
  return $this->message.$name;
 }
 }
$mymessage = New user_message();
echo $mymessage->introduce(' a coder enthusiast')."\n";
?>

