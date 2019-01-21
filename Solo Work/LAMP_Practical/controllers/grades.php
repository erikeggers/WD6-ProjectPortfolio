<?php
// require_once './Views/grades.php';
require_once './Models/grades.php';

class GradeController
{
  public function __construct()
	{
    $this->model = new GradeModel();
    if($_POST['submit'] == 'Create') {
      $this->createForm($_POST);
    }elseif ($_POST['submit'] == 'Update') {
      $this->update($_POST);
    }elseif ($_GET['deleteid']) {
			$id = $_GET['deleteid'];
			$this->delete($id);
		}elseif ($_GET['updateid']) {
      require_once './Views/update.php';
      $this->view = new UpdateView($data);
      $id = $_GET['updateid'];
      $data = $this->getUpdateData($id);
      $this->view->showUpdate($data);
    }else {
      require_once './Views/grades.php';
      $this->view = new GradeView();
      $data = $this->getData();
      $this->view->showCurrentGrades($data);
    }
  }

	public function getData()
	{
		$sql = "SELECT * FROM grades order by studentid ASC;";
		$data = $this->model->fetchData($sql);
		return $data;
  }


  public function createForm($data)
	{
		if(!empty($_POST)) {
      $studentname = $_POST['studentname'];
      $studentpercent = $_POST['studentpercent'];
    
      if (!is_numeric($studentpercent) || empty($studentname)) {
        echo "<script>alert('Error! Grade must be a number!');window.location.href = '/';</script>";
      } else {
        $lettergrade = $this->getLetterGrade($studentpercent);
        $sql = "INSERT INTO grades (studentname, studentpercent, studentlettergrade) VALUES(:studentname, :studentpercent, :studentlettergrade);";
        $this->model->create($sql, $studentname, $studentpercent, $lettergrade);
        echo "<script>window.location.href = '/';</script>";
      }
    }
  }

  
  public function update($id) {
    if(!empty($_POST)) {
      $studentname = $_POST['studentnameupdate'];
      $studentpercent = $_POST['studentpercentupdate'];
      $studentid = $_POST['studentidupdate'];
    
      if (!is_numeric($studentpercent) || empty($studentname)) {
        echo "<script>alert('Error! Grade must be a number!');window.location.href = '/';</script>";
      } else {
        $lettergrade = $this->getLetterGrade($studentpercent);
        $sql = "UPDATE grades SET studentname='".$studentname."', studentpercent='".$studentpercent."', studentlettergrade='".$lettergrade."' WHERE studentid='".$studentid."';";
        $this->model->create($sql, $studentname, $studentpercent, $lettergrade);
        echo "<script>window.location.href = '/';</script>";
      }
    }
  }
  
  public function getUpdateData($id) {
    $sql = "SELECT * FROM grades where studentid = :studentid";
    $data = $this->model->getUpdateData($sql, $id);
    return $data;
    echo "<script>window.location.href = '/';</script>";
  }
  
  public function delete($id) {
    $sql = "DELETE from grades where studentid IN (:studentid);";
		$this->model->delete($sql, $id);
    echo "<script>window.location.href = '/';</script>";
  }

  function getLetterGrade($num_grade) {
    if ($num_grade >= 90) {
      return "A";
    } elseif ($num_grade >= 80) {
      return "B";
    } elseif ($num_grade >= 70) {
      return "C";
    } elseif ($num_grade >= 60) {
      return "D";
    } else {
      return "F";
    }
  }
}