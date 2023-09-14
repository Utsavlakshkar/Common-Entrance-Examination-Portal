<html>
    <head>
        <title>Counselling</title>        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
    </head>
    <body>
        <link rel="stylesheet" href="IWP Project Layout.css">
        <center>               
            <h1 class="h"><img src="Logo.jpg" width="50" height="50">&nbsp;&nbsp;&nbsp;&nbsp;<b>COUNSELLING</b>
            <a href="Main Page.html"><span style="color: white;" class="glyphicon glyphicon-home"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
            </h1><br>                 
            <table class="t1">
                <tr>
                    <th>College Id</th>
                    <th>College Name</th>
                    <th>Exam</th>
                    <th>Alloted Seats</th>                    
                </tr>
            <?php
                $conn=mysqli_connect("localhost","root","","utsav");                
                $sql = "SELECT * FROM `college`";
                $result = mysqli_query($conn, $sql);
                $result = $conn->query($sql);                
                
                if ($result->num_rows > 0) {    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["CID"]."</td>";
                        echo "<td>".$row["Name"]."</td>";
                        echo "<td>".$row["Exam"]."</td>";
                        echo "<td>".$row["Seats"]."</td>";
                        echo "</tr>";
                    }
                }                
            ?>
            </table>
            <br><br>            
            <form action="Updation.php" method="get">
            <table>
                <tr>
                    <td>Enter your First Name:</td>
                    <td><input type="text" id="fname" name="fname"></td>
                </tr>
                <tr>
                    <td>Enter your Last Name:</td>
                    <td><input type="text" id="lname" name="lname"></td>
                </tr>
                <tr>
                    <td>Enter your choice College Id:</td>
                    <td><input type="text" id="choice" name="choice"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Select"></td>
                </tr>                
            <table>
            </form>
            <br><b>COPYRIGHT &copy 2022 SCRCET DEVELOPMENT CELL</b>
        </center>
    </body>
</html>