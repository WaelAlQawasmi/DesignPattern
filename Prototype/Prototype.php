<?php

require 'autoload.php';

use CopyBoard\File;
use CopyBoard\Text;
$file = new File("/files","logo",".png","binary img");
echo $file;
$copyFile = clone $file;
echo $copyFile;
$text = new Text("<h1>Hi Wael </h1>","html");
echo $text;
$copyText = clone $text;
echo $copyText;