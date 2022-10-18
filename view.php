<?php
include "config.php";

$sql = "SELECT *FROM kath";

$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="container">
   <h2>Computer Info</h2>

<table class="table">
 <head>
  <tr>
   <th>ID</th>
   <th>Fullname</th>
   <th>Pcname</th>
   <th>Location</th>
   <th>Problem</th>
   <th>Date</th>
   <th>Workdone</th>
   <th>Sentby</th>
   <th>Date of Submission</th> 
  </tr>
 </head>


<tbody>

<?php
if($result->num_rows>0){

 while($row = $result->fetch_assoc()){
   
 ?>

 <tr>
  <td><?php echo $row['id'];?></td>
  <td><?php echo $row['fullname'];?></td>
  <td><?php echo $row['pcname'];?></td>
  <td><?php echo $row['location'];?></td>
  <td><?php echo $row['problem'];?></td>
  <td><?php echo $row['date'];?></td>
  <td><?php echo $row['workdone'];?></td>
  <td><?php echo $row['sentby'];?></td>
  <td><?php echo $row['date1'];?></td>
  <td class="btn btn-dange" href="update.php?id=<?php echo $row['id'];?>">
 Edit</a>
 &nbsp; <a  class="btn btn-dange" href="delete.php?id=<?php echo $row['id'];?>">
 Delete</a>
 </td>
 </tr>

 <?php 

 }
}

?>
</tbody>
</table>
</div>
</body>
</html>