<?php

require 'autoload.php';

use Observer\User;
use Observer\SportNews;

$user1 = new User("wael");
$user2 = new User("yazan");
$user3 = new User("ahmad");


$sportList= new SportNews();

$sportList->subscribe($user1);
$sportList->subscribe($user2);
$sportList->subscribe($user3);
$sportList->notify("Hi All on my blog");


