<?php

require 'autoload.php';
use ReportGenerator\ReportGeneratorFacade;

$facade = new ReportGeneratorFacade();
$facade->generateReport();