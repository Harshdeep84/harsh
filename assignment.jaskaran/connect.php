<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment.Jaskaran</title>
</head>
<body>

<?php
$conn =  mysqli_connect("localhost", "root", "", "mydb");
if(!$conn){
    die("coonection failed");
}
     else{
       echo "<h1>Now we can fetch the Data</h1><br>";
    }
 $sql= "SELECT * FROM `employee`";
 $result= mysqli_query($conn,$sql);
 

 echo mysqli_num_rows($result)."<br>";
 while($row=mysqli_fetch_assoc($result)){
    echo "<h2>" . $row["emp_name"] . "</h2>";
            echo "<p>Author: " . $row["username"] . "</p>";
            echo "<p>" . $row["password"] . "</p>";
            echo "<hr>";
 }
?>
</body>
</html>
