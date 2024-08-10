<?php

namespace ReportGenerator;

class Database
{
    private $connection;
    public function connect()
    {
        $this->connection = "Database Connection";
        echo "connected to database successfully\n";
    }

    public function getReportData()
    {
        if (empty($this->connection))  new \Exception("Error on Database connection", 1);
        return [
            ['name' => 'wael', 'age' => '26', 'status' => 'active'],
            ['name' => 'ward', 'age' => '18', 'status' => 'active']
        ];
    }
}
