<?php

class UpdateView {
  function __construct() {
    ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Update Grade</h1>

<?
  $this->showUpdate;
?>

</body>
</html>
<?
  }
public function showUpdate($data) {
  foreach($data as $row) {
    echo '<form action="/" method="POST">';
    echo '<label>Student Name:</label>';
    echo '<input type="text" name="studentnameupdate" value="'.$row['studentname'].'" /><br>';
    echo '<label>Student Percent:</label>';
    echo '<input type="text" name="studentpercentupdate" value="'.$row['studentpercent'].'"/><br>';
    echo '<input hidden type="text" name="studentidupdate" value="'.$row['studentid'].'"/><br>';
    echo '<p>Current Student Letter Grade: ' . $row['studentlettergrade'] . '</p>';
    echo '<input type="submit" name="submit" value="Update" />';
    echo '</form>';
  }
}
}
?>