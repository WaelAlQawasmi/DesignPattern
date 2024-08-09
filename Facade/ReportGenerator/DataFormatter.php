<?php

namespace ReportGenerator;
class DataFormatter  {
    public function formatData($data){
        $formattedData = "Name, Age, Status\n";
        foreach ($data as $row) {
            $formattedData .= "{$row['name']}, {$row['age']}, {$row['status']}\n";
        }
        return $formattedData;
        
    }
}