<?php
require 'autoload.php';

use ReportTemplate\InventoryReport;
use ReportTemplate\SalesReport;
$salesReport = new SalesReport();
$salesReport->generateReport();
$inventoryReport = new InventoryReport();
$inventoryReport->generateReport();
