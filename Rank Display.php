<html>
    <head>
        <title>Rank Display</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <link rel="stylesheet" href="IWP Project Layout.css">
        <center>               
            <h1 class="h"><img src="Logo.jpg" width="50" height="50">&nbsp;&nbsp;&nbsp;&nbsp;<b>RANK DISPLAY</b>
            <a href="Main Page.html"><span style="color: white;" class="glyphicon glyphicon-home"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
            </h1><br>
            <br><br><br>
            <table class="t1">
                <tr>                                       
                    <th>Candidate First Name</th>
                    <th>Candidate Last Name</th>
                    <th>Examination</th>                                        
                    <th>Rank</th> 
                </tr>
                <?php
                $conn=mysqli_connect("localhost","root","","utsav");                
                $sql = "SELECT Fname,Lname,Exam,Rank FROM `counselling`";
                $result = mysqli_query($conn, $sql);
                $result = $conn->query($sql);                
                
                if ($result->num_rows > 0) {    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";                        
                        echo "<td>".$row["Fname"]."</td>";
                        echo "<td>".$row["Lname"]."</td>";
                        echo "<td>".$row["Exam"]."</td>";                        
                        echo "<td>".$row["Rank"]."</td>";
                        echo "</tr>";
                    }
                }                
            ?>                
            </table>
            <br><b>COPYRIGHT &copy 2022 SCRCET DEVELOPMENT CELL</b>
        </center>
    </body>
</html>