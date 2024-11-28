<DOCTYPE html>
    <html>
        <title>Subjects</title>

        <head>
        </head>
        <body>
            <form action="addsubject.php" method="POST">
            Subject name: <input type="text" name="subjectname"><br>
            Teacher:<input type="text" name="teacher"><br>

            <input type="submit" value="Add Subject">
            </form>

            <?php
                include_once("connection.php");
                $stmt = $conn->prepare("SELECT * FROM tblsubjects");
                $stmt->execute();
                while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        echo($row["subjectname"]. " taught by ".$row["teacher"]."<br>");
                    }
                
            ?>
        </body>
    </hmtl>     