<?php
include "config.php";

if(isset($_POST['update'])){
 $fullname = $_POST['fname'];
 $pcname = $_POST['pcname'];
 $location = $_POST['location'];
 $problem = $_POST['problem'];
 $date = $_POST['date'];
 $workdone = $_POST['workdone'];
 $sentby = $_POST['sentby'];
 $date1 = $_POST['date1'];

 $sql = "UPDATE kath SET 'fullname' = '$fullname','pcname' = '$pcname','location' = '$locaton','problem' = '$problem','date' = '$date','workdone' = '$workdone','sentby' = '$sentby','date1' = '$date1'";


 $result = $conn->query($sql);

 if($result == TRUE){
  echo "Record Updated Successfully";
 }else{
  echo "Error" .$sql ."<br>" . $conn->error;
 }
}

if(isset($_GET['id'])){
 $kath_id = $_GET['id'];

 $sql ="SELECT *FROM 'kath' WHERE 'id'='kathid'";

 $result = $conn->query($sql);

 if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
   $fullname =$row['fname'];
   $pcname = $row['pcname'];
   $location = $row['location'];
   $problem = $rowT['problem'];
   $date = $row['date'];
   $workdone = $row['workdone'];
   $sentby =$rowT['sentby'];
   $date1 = $row['date1'];
   $id = $row['id'];
  }
  ?>
  <h2>COmputer Update</h2>
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
   <input type="date" name="date1">
   <br>
   <input type="submit" name="submit" value="submit">

  </fieldset>
  </form>
 }
}

<?php
 }else{
  header('location:view.php');
 }
}
 ?>