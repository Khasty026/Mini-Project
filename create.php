<?php
include "config.php";


if(isset($_POST['submit'])){
 $fullname = $_POST['fname'];
 $pcname = $_POST['pcname'];
 $location = $_POST['location'];
 $problem = $_POST['problem'];
 $date = $_POST['date'];
 $workdone = $_POST['workdone'];
 $sentby = $_POST['sentby'];
 $date1 = $_POST['date1'];


$sql = "INSERT INTO kath (fullname,pcname,location,problem,date,workdone,sentby,date1) VALUES ('$fullname', '$pcname', '$location', '$problem', '$date', '$workdone', '$sentby', '$date1')";

$result = $conn->query($sql);


if($result == TRUE){
 echo "New Record Created Successfully";
}
else{
 echo "Error" .$sql ."<br>" .$conn->error;
}
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Kath Record Keeping</title>
</head>
<body>
 <h2>Kath PC login Page</h2>

 <form action="" method="post">
  <fieldset>
   <legend>Computer Information</legend>
   Fullname: <br>
   <input type="text" name="fname">
   <br>
   PC Name: <br>
   <input type="text" name="pcname">
   <br>
   Location: <br>
   <input type="text" name="location">
   <br>
   Problem: <br>
   <input type="text" name="problem">
   <br>
   Date: <br>
   <input type="date" name="date">
   <br>
   workdone: <br>
   <input type="text" name="workdone">
   <br>
   Sentby: <br>
   <input type="text" name="sentby">
   <br>
   Date of Submission: <br>
   <input type="text" name="date1">
   <br>
   <input type="submit" name="submit" value="submit">

  </fieldset>
 </form>
</body>
</html>

