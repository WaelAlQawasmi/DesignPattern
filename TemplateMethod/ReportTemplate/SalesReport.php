<?php 
namespace ReportTemplate;

class SalesReport extends ReportTemplate {
    private $data;
    private $analyzedData;

    protected function collateData(){
        $this->data = array(1,2,4,8);
    }
    protected function analyzeData(){
       $this->analyzedData= array_sum($this->data);

    }
    protected function printReport(){
        echo "we paid " . $this->analyzedData . " item in this month \n";
    }

}