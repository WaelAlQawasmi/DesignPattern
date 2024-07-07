<?php 
namespace ReportTemplate;
class InventoryReport extends ReportTemplate {
    private $data;
    private $analyzedData;

    protected function collateData(){
        $this->data = array(1,2,25,125);
    }
    protected function analyzeData(){
       $this->analyzedData= array_sum($this->data);

    }
    protected function printReport(){
        echo  "we have ".$this->analyzedData ." items on the store\n";
    } 
}