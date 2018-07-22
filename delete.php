<?php

//including the database connection file
    include("config.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['id'];
 
    $date=date('Y-m-d h:i:s a', time()+4*3600);
//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"UPDATE test SET deleted_date='$date' WHERE id='$id'");
	//close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:listdata.php?msg='News Successfully deleted.' ");

?>

