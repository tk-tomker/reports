<html>
<body>

<form action="addstudenttosubject.php" method="POST">

  <!--Creates a drop down list-->
    <select name="student">
	<?php 
    include_once("connection.php");
    $stmt = $conn->prepare("SELECT * FROM tblusers WHERE role=0 ORDER BY surname asc");
    $stmt->execute();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
      {
        #print_r($row);
        echo("<option value=".$row['userid'].">".$row['forename']." ".$row['surname']."</option>");
      }
    
    ?>
    </select>
    
    <select name="subject">
    <?php
    include_once("connection.php");
    $stmt = $conn->prepare("SELECT * FROM tblsubjects");
    $stmt->execute();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
      {
        #print_r($row);
        echo("<option value=".$row['subjectid'].">".$row['subjectname']."</option>");
      }
    
    ?>
    </select>
  <input type="submit" value="Add student to subject">

  

</form>


</body>
</html>