<?php
    include_once("connection.php");
    $stmt = $conn->prepare("SELECT * FROM tblpupilstudies as sn,
    tblusers.forename as fn,
    tblusers.surname as ln
    FROM tblpupilstudies
    INNER JOIN tblsubjects ON tblsubjects.subjectid=tblpupilstudies.subjectid
    INNER JOIN tblsusers ON tblusers.useris=tblpupilstudies.userid");
    $stmt->execute();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
      {
        echo($row["fn"]." ".$row["ln"]. " studies ".$row["sn"]."<br>")
      }
    
?>