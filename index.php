<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="addition";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (mysqli_connect_error()) {
    echo "Connection failed: " .mysqli_connect_error();
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignment 2</title>
</head>
<body>
    <h1 style="align: center;">Form Sum</h1>
    <br />
    <form method="post">
    <h4><b>Enter 1st Value</b></h4>
    
       <input type="text" name="one" id="one" class="form-control" placeholder="1st Digit">
       <br >
    <h4><b>Enter 2nd Value </b></h4>
    
       <input type="text" name="two" id="two" class="form-control" placeholder="2nd Digit">
       <br /><br />
       <input type="submit" name="submit" value="Add & Save">
    </form>
      <br /><br /><br /><br />
      <h4><b>Result:</b></h4>  
      <br >
        <?php 
            if(isset($_POST['submit'])){
                $sum=0;
                $one=$_POST['one'];
                $two=$_POST['two'];
                //echo $one;
                $sum=$one+$two;
                echo $sum;
                mysqli_select_db($con,"addition");
                $insert="INSERT INTO sum_table (value1,value2,result) VALUES ('$one','$two','$sum')";
                if (mysqli_query($con,$insert)){
                echo "<br />";
                echo "<br />";
                echo "DATA IS INERTED ALSO SUCCESSFULLY."; 
                    
                }
                else{
                    echo "SOME ERROR".mysqli_error($con);
                }
                //exit;
            }
      
        ?>
</body>
</html>