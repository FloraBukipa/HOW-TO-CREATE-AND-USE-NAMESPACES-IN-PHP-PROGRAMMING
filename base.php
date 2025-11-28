<?php
namespace App\Controllers;
use PDO;

class MyCron {
    private $conn;
    public function __construct($db) {
        $this->conn = $db;
    }

    public function fetchMembers($transactionId) {
        $query = "SELECT * FROM members";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $count = 1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "{$count} --{$transactionId}-- {$row['name']}<br/>";
                $count++;
            }
        }
    }
}


?>