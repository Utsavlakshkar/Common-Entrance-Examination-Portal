<html>
    <head>
        <title>Updated List</title>        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            form{
                border: 2px solid black;
            }                        
        </style>
    </head>
    <body>
        <link rel="stylesheet" href="IWP Project Layout.css">
        <center>               
            <h1 class="h"><img src="Logo.jpg" width="50" height="50">&nbsp;&nbsp;&nbsp;&nbsp;<b>UPDATED LIST</b>
            <a href="Main Page.html"><span style="color: white;" class="glyphicon glyphicon-home"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
            </h1><br>                                         
            <table class="t1">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Exam Given</th>
                    <th>College Name</th>                    
                </tr>            
            <?php
                $conn=mysqli_connect("localhost","root","","utsav");                
                $sql = "SELECT A.Fname,A.Lname,A.Exam,B.Name FROM counselling A INNER JOIN college B ON A.College=B.CID;";
                $result = mysqli_query($conn, $sql);
                $result = $conn->query($sql);                                                                
                if ($result->num_rows > 0) {    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";                        
                        echo "<td>".$row["Fname"]."</td>";
                        echo "<td>".$row["Lname"]."</td>";
                        echo "<td>".$row["Exam"]."</td>";                        
                        echo "<td>".$row["Name"]."</td>";                        
                        echo "</tr>";
                    }
                }
            ?>            
            </table>
            <br><b>COPYRIGHT &copy 2022 SCRCET DEVELOPMENT CELL</b>
        </center>
    </body>
</html>