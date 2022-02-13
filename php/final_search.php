<?php 
    include "connect.php";
    $search= $_GET['name'];

$sql2 = "SELECT A.ID, A.HNAME, A.AREA, B.TNAME, B.TCOST FROM medical as A INNER JOIN treatment as B on A.ID=B.HID where B.TNAME like '%$search%' ORDER BY B.TCOST";
$result1 = $mysqli->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/47f26b64c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/search.css">
    <title>Med-Safar</title>
</head>

<body style="background-color:powderblue;">
    <?php 
include "connect.php";
    ?>
        <!-- navbar -->
         <nav>
        <a href="../html/index.html" class="nav-item" >
            <div id="home">Home </div>
        </a>
        <a href="https://www.canva.com/design/DAE4OJvAzAk/0CChpbiMyRSQNDoqWwPb1A/view?utm_content=DAE4OJvAzAk&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink" class="nav-item" >
            <div id="about">About Us</div>
        </a>
        <a href="../html/contact.html" class="nav-item" > 
            <div id="contact">Contact Us</div>
        </a>
    </nav>

        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Hospital ID</th>
                        <th>Hospital Name</th>
                        <th>Location</th>
                         <th>Treatment</th>
                        <th>Cost</th> 
                    </tr>

                <?php

        if ($result1->num_rows > 0) {
        // output data of each row
        while($row = $result1->fetch_assoc()) {
            echo "<tr><td>" . $row["ID"]. "</td><td> " . $row["HNAME"]. "</td><td>". $row["AREA"]. "</td><td>". $row["TNAME"] . "</td><td>". $row["TCOST"];
        }
    }
         echo "</thead>";
         echo "</table>";
?>
        </div>

    </div>
</body>

</html>