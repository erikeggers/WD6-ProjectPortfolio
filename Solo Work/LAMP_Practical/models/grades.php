<?php 
class GradeModel {
  function __construct() {
    $user = "root";
    $pass = "root";
		$dsn = "mysql:host=127.0.0.1;dbname=grades;port=8889";
    $this->connection = new PDO($dsn, $user, $pass);
  }

  public function fetchData($sql) {    
    $stmt = $this->connection->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchall();
    return $data;
  }
  public function create($sql, $studentname, $studentpercent, $lettergrade) {
		$stmt = $this->connection->prepare($sql);
    $stmt->bindParam(':studentname', $studentname);
    $stmt->bindParam(':studentpercent', $studentpercent);
    $stmt->bindParam(':studentlettergrade', $lettergrade);
		$stmt->execute();
  }
  public function getUpdateData($sql, $id) {
		$stmt = $this->connection->prepare($sql);
    $stmt->bindParam(':studentid', $id);
    $stmt->execute();
    $data = $stmt->fetchall();
		return $data;
  }
  
  public function delete($sql, $id) {
    $stmt = $this->connection->prepare($sql);
		$stmt->bindParam(':studentid', $id);
		$stmt->execute();
  }
}