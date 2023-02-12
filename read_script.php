<?php
include ('database.php');
$fetchData=fetch_data($conn);
function fetch_data($conn)
{
    $query="SELECT * from user_details ORDER BY id ASC";
    $exec=mysqli_query($conn,$query);
    if(mysqli_num_rows($exec)>0)
    {
        $rows=mysqli_fetch_all($exec,MYSQLI_ASSOC);
        return $rows;
    }
    else{
        return $rows=[];
    }
}
?>