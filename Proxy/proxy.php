<?php
require 'autoload.php';
use Internet\WebProxy;

$proxy=new WebProxy("https://example.com");
echo $proxy->getContent();

$proxy=new WebProxy("https//facebook.com");
echo $proxy->getContent();


