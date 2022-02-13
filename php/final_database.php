<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/47f26b64c1.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/search.css">
    <title>Med-Safar</title>
</head>

<body>
    <?php 
include "connect.php";
    ?>

     <div class="content">
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


        <!-- search bar  -->
        <div class="wrap" >
            <form action="final_search.php">
            <div class="search">
               <input type="text" class="searchTerm" name="name" placeholder="Search for your treatment in India!">
               <button type="submit" class="searchButton">
                <img class="icon" src="../images/magnifying-glass-dollar-solid.svg" alt=""></img>
              </button>
            </div>
            </form>
         </div>

        <!-- table  -->

        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Hospital ID</th>
                        <th>Hospital Name</th>
                        <th>Location</th>
                        <!-- <th>Treatment</th>
                        <th>Cost</th> -->
                    </tr>

                <?php
        $sql1 = "SELECT ID, HNAME, AREA FROM medical";
        $result = $mysqli->query($sql1);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["ID"]. "</td><td> " . $row["HNAME"]. "</td><td>". $row["AREA"];
        }
    }
         echo "</thead>";
         echo "</table>";
?>
        </div>

    </div>
</body>

</html>