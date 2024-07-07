<?php
namespace ReportTemplate;
abstract class ReportTemplate {
    public function  generateReport(){
        $this->collateData();
        $this->analyzeData();
        $this->printReport();
    }

    abstract protected function collateData();
    abstract protected function analyzeData();
    abstract protected function printReport();

}