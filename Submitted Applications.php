<html>
    <head>
        <title>Submitted Application Forms</title>        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
    </head>
    <body>            
        <link rel="stylesheet" href="IWP Project Layout.css">
        <center>                        
            <h1 class="h"><img src="Logo.jpg" width="50" height="50">&nbsp;&nbsp;&nbsp;&nbsp;<b>SUBMITTED APPLICATION FORMS</b>
            <a href="Main Page.html"><span style="color: white;" class="glyphicon glyphicon-home"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
            </h1><br><br><br>
            <table class="t1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>                
                <th>Date</th>
                <th>Month</th>
                <th>Year</th>                
                <th>Email</th>                
                <th>Mobile</th>
                <th>Address</th>
                <th>City</th>
                <th>Pincode</th>
                <th>State</th>
                <th>Country</th>
                <th>10th Board</th>
                <th>10th Percentage</th>
                <th>10th Year</th>
                <th>12th Board</th>
                <th>12th Percentage</th>
                <th>12th Year</th>
                <th>Exam</th>
                <th>Rank</th>
                <th>College ID</th>                                
            </tr>
            <?php
                $conn=mysqli_connect("localhost","root","","utsav");                
                $sql = "SELECT * FROM `counselling`";
                $result = mysqli_query($conn, $sql);
                $result = $conn->query($sql);                                
                if ($result->num_rows > 0) {    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["Fname"]."</td>";
                        echo "<td>".$row["Lname"]."</td>";
                        echo "<td>".$row["DOB"]."</td>";
                        echo "<td>".$row["Month"]."</td>";
                        echo "<td>".$row["Year"]."</td>";
                        echo "<td>".$row["Email"]."</td>";
                        echo "<td>".$row["Mobile"]."</td>";
                        echo "<td>".$row["Addr"]."</td>";
                        echo "<td>".$row["City"]."</td>";
                        echo "<td>".$row["Pincode"]."</td>";
                        echo "<td>".$row["State"]."</td>";
                        echo "<td>".$row["Country"]."</td>";
                        echo "<td>".$row["BoardA"]."</td>";
                        echo "<td>".$row["PercentA"]."</td>";
                        echo "<td>".$row["YearA"]."</td>";
                        echo "<td>".$row["BoardB"]."</td>";
                        echo "<td>".$row["PercentB"]."</td>";
                        echo "<td>".$row["YearB"]."</td>";                        
                        echo "<td>".$row["Exam"]."</td>";
                        echo "<td>".$row["Rank"]."</td>";
                        echo "<td>".$row["College"]."</td>";                        
                        echo "</tr>";
                    }
                }
            ?>
            </table>
            <br><b>COPYRIGHT &copy 2022 SCRCET DEVELOPMENT CELL</b>
        </center>
    </body>
</html>
