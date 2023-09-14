<html>
    <body>
        <?php    
            function validate(){
                $fname=$_GET["fname"];
                $lname=$_GET["lname"];
                $date=$_GET["date"];
                $month=$_GET["month"];
                $year=$_GET["year"];
                $email=$_GET["email"];
                $mobile=$_GET["mobile"];            
                $address=$_GET["address"];
                $city=$_GET["city"];
                $pincode=$_GET["pincode"];
                $state=$_GET["state"];
                $country=$_GET["country"];    
                $board10=$_GET["board10"];
                $percent10=$_GET["percent10"];
                $year10=$_GET["year10"];
                $board12=$_GET["board12"];
                $percent12=$_GET["percent12"];
                $year12=$_GET["year12"];                
                $accept=true;           

                $fpat="/^[a-zA-Z]{1,30}$/";
                if(!preg_match($fpat, $fname)){
                    echo ("First Name should have only alphabets<br>");        
                    $accept=false;
                }
                
                if(!preg_match($fpat, $lname)){
                    echo("Last Name should have only alphabets<br>");        
                    $accept=false;
                }
                
                if(($date<=1)||($date>=31)){
                    echo("Date should be between 1 and 31");        
                    $accept=false;
                }    
                
                if(($month<=1)||($month>=12)){
                    echo("Month should be between 1 and 12");        
                    $accept=false;
                }    
                
                if(($year<=2001)||($year>=2003)){
                    echo("Year should be between 2001 and 2003");        
                    $accept=false;
                }
                
                $femail="/^\w+\.?\w*\@\w*\.?\w*.\w*$/";
                if(!preg_match($femail, $email)){
                    echo("Invalid Email Address");        
                    $accept=false;
                }    
                
                $fmobile="/^\d{10}$/";
                if(!preg_match($fmobile, $mobile)){
                    echo("Invalid Mobile Number");        
                    $accept=false;
                }
                    
                if(strlen($address)>100){
                    echo("Length of address should be less than 100");
                    $accept=false;
                }
                
                if(!preg_match($fpat, $city)){
                    echo("City should have only alphabets");        
                    $accept=false;
                }    
                
                $fpincode="/^\d{6}$/";
                if(!preg_match($fpincode, $pincode)){
                    echo("Invalid Pincode");        
                    $accept=false;
                }
                
                if(!preg_match($fpat, $state)){
                    echo("State should have only alphabets");        
                    $accept=false;
                }    
                
                if(!preg_match($fpat, $country)){
                    echo("Country should have only alphabets<br>");        
                    $accept=false;
                }    
                
                if(!preg_match($fpat, $board10)){
                    echo("10th Board should have only alphabets");        
                    $accept=false;
                }    
                
                $fpercent10="/^\d{1,2}(\.\d{0,2})?$/";
                if(!preg_match($fpercent10, $percent10)){
                    echo("Invalid 10th Percentage");        
                    $accept=false;
                }
                
                if(($year10<=2017)||($year10>=2019)){
                    echo("10th Year should be between 2017 and 2019");        
                    $accept=false;
                }           
                
                if(!preg_match($fpat, $board12)){
                    echo("12th Board should have only alphabets");        
                    $accept=false;
                }    
                        
                if(!preg_match($fpercent10, $percent12)){
                    echo("Invalid Percentage");        
                    $accept=false;
                }
                
                if(($year12<=2019)||($year12>=2021)){
                    echo("Year should be between 2019 and 2021");        
                    $accept=false;
                }
                if($accept==true)
                    return "Accepted";
                else
                    return "Rejected";
            }
            $fname=$_GET["fname"];
            $lname=$_GET["lname"];
            $date=$_GET["date"];
            $month=$_GET["month"];
            $year=$_GET["year"];
            $email=$_GET["email"];
            $mobile=$_GET["mobile"];            
            $address=$_GET["address"];
            $city=$_GET["city"];
            $pincode=$_GET["pincode"];
            $state=$_GET["state"];
            $country=$_GET["country"];    
            $board10=$_GET["board10"];
            $percent10=$_GET["percent10"];
            $year10=$_GET["year10"];
            $board12=$_GET["board12"];
            $percent12=$_GET["percent12"];
            $year12=$_GET["year12"];    
            $exam=$_GET["exam"];
            
            if(strcmp(validate(),"Accepted")==0){        
                $conn=mysqli_connect("localhost","root","","utsav");                               
                $sql = "INSERT INTO `counselling` (`Fname`, `Lname`, `DOB`, `Month`, `Year`, `Email`, `Mobile`, `Addr`, `City`, `Pincode`, `State`, `Country`, `BoardA`, `PercentA`, `YearA`, `BoardB`, `PercentB`, `YearB`, `Exam`, `Rank`, `College`) 
                VALUES ('".$fname."','".$lname."','".$date."','".$month."','".$year."','".$email."','".$mobile."', '".$address."', '".$city."', '".$pincode."', '".$state."', '".$country."', '".$board10."', '".$percent10."', '".$year10."',  '".$board12."', '".$percent12."', '".$year12."', '".$exam."', NULL, 0);";
                $result = mysqli_query($conn, $sql);    
                if(var_dump($result)==true){
                    echo "Record eneterd successfully";
                }
            }
            ?>            
                        
    </body>
</html>