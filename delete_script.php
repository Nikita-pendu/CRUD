<?php
include ("database.php");
if(isset($_GET['delete']))
{
    $id=$_GET['delete'];
    delete_data($conn,$id);
}
    function delete_data($conn,$id)
    {
        $query="DELETE FROM user_details WHERE id=$id";
        $exec=mysqli_query($conn,$query);
     if($exec)
    {
        header('location:user_table.php');
    }else
    {
        $msg= "Error: " . $query . "<br>" . mysqli_error($conn);
        echo $msg;
    }
    }
?>
