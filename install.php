<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS tblusers;
CREATE TABLE tblusers
(userid INT(4) UNSIGNED AUTO_INCREMENT PRIMARKY KEY,
gender VARCHAR(1) NOT NULL,
surname VARCHAR(20) NOT NULL,
forename VARCHAR(20) NOT NULL,
password VARCHAR(20) NOT NULL,
house VARCHAR(20) NOT NULL,
year INT(2) NOT NULL,
role TINYINT(1))"
);
$stmt->execute();
$stmt->closeCursor();

?>