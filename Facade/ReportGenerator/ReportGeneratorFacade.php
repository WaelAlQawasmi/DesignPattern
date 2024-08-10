<?php
namespace ReportGenerator;
class ReportGeneratorFacade {
    private $database;
    private $dataFormatter;
    private $CSVExporter;

    public function __construct(){
        $this->database= new Database();
        $this->dataFormatter = new DataFormatter();
        $this->CSVExporter= new CSVExporter();
    }

    public function generateReport (){
        $this->database->connect();
        $data= $this->database->getReportData();
        $formattedData=$this->dataFormatter->formatData($data);
        $this->CSVExporter->exportData($formattedData);
    }
}