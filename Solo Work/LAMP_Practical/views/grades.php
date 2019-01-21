<?php

class GradeView {
  function __construct() {
    ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Student Grades Report (Teacher's App)</h1>

<form action="/" method="POST">
  <input type="text" name="studentname" placeholder="Student Name"/>
  <input type="text" name="studentpercent" placeholder="Student Percent"/>
  <input type="submit" name="submit" value="Create" /><input type="reset"/>
</form>

<?
  $this->showCurrentGrades;
?>
</body>
</html>
<?
  }
  public function showCurrentGrades($data) {
    foreach($data as $row) {
      echo '<div class="gradeGroup"><ul><li> Student ID: ' . $row['studentid'] . '</li>';
      echo '<li>Name: ' . $row['studentname'] . '</li>';
      echo '<li> Student Percent: ' .$row['studentpercent']. '</li>';
      echo '<li> Student Letter Grade: ' . $row['studentlettergrade'] .'</li></ul>';
      echo '<a href="?updateid=' . $row['studentid'] . '">Update</a>';
      echo ' | <a href="?deleteid=' . $row['studentid'] . '">Delete</a></div>';
    }
  }
}
?>