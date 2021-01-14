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
          echo "<table style='border: solid 1px black;'>";
           echo "<tr><th>First Number</th><th>Second Number</th><th>Result</th></tr>";

          class TableRows extends RecursiveIteratorIterator {
              function __construct($it) {
                  parent::__construct($it, self::LEAVES_ONLY);
              }

              function current() {
                  return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
              }

              function beginChildren() {
                  echo "<tr>";
              }

              function endChildren() {
                  echo "</tr>" . "\n";
              }
          }
          try {
              $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("SELECT Firstnumber, Secondnumber, result FROM sum_table");
              $stmt->execute();

              // set the resulting array to associative
              $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

              foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                      echo $v;
                  }
              }
          catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
          }
              $conn = null;
              echo "</table>";
        ?>
        <?php 
            if(isset($_POST['submit'])){
                $sum=0;
                $one=$_POST['one'];
                $two=$_POST['two'];
                //echo $one;
                $sum=$one+$two;
                mysqli_select_db($con,"addition");
                $insert="INSERT INTO sum_table (Firstnumber,Secondnumber,result) VALUES ('$one','$two','$sum')";
                if (mysqli_query($con,$insert)){
                echo "<br />";
                echo "<br />";
                echo "DATA Inserted SUCCESSFULLY."; 
                    
                }
                else{
                    echo "SOME ERROR".mysqli_error($con);
                }
                //exit;
            }
      
        ?>
</body>
</html>