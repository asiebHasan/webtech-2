<?php

include("config.php");
$head=$_POST['heading'];
$data=$_POST['newsbody'];
$statement="insert into test(heading,summertext) values ('$head','$data')";
$id=$_POST['id'];
$date=date('Y-m-d h:i:s a', time()+4*3600);
if(mysqli_query($conn,"UPDATE test SET heading='$head',summertext='$data', updated_date='$date' WHERE id='$id'"))
{
    header("location:listdata.php?msg='News SuccessFully updated.'");
}
else
    mysqli_error($conn);

mysqli_close($conn);

?>