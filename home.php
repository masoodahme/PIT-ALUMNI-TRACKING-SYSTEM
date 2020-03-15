<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <a href="logout.php" style="float:right">Logout</a>
    <?php
     include("db_connectivity.php");
        $query="SELECT * FROM `studentdetails`";
        $result=mysqli_query($con,$query);
       // echo mysqlino($con);
    ?>
    <div class="container">
        <h2>Students</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Roll No</th>
                    <th>Register No</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>LinkedIn</th>
                    <th>Phone No</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
               <?php
                while($row=mysqli_fetch_array($result))
                {
                 echo "<tr><td>$row[2]</td>";
                 echo "<td>$row[3]</td>";
                 echo "<td>$row[0]</td>";
                 echo "<td>$row[5]</td>";
                 echo  "<td>$row[6]</td>";
                 echo  "<td>$row[9]</td>";
                 echo   "<td>$row[10]</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
