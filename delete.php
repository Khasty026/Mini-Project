<?php

include "config.php";


// if(isset($_GET['id'])){
//  $kath_id = $_GET['id'];

//  $sql = "DELETE FROM kathdb WHERE 'id'='$kath_id'";

//  $result = $conn->query($sql);

//  if($result == TRUE){
//   echo "Record deleted successfully.";
//  }else{
//   echo "Error:" .$sql . "<br>" .$conn->error;
//  }
// }

$sql = "DELETE FROM kath WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

