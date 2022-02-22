<?php

$user = 'root';
$pass = '';
$db = 'regestration form';

$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "welcome";

?>