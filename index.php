<?php

require 'classes/user.php';

$user = new user();

echo user::MAX_INSTANCES . "<br>";
echo $user->parseRequest();





