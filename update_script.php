<?php

include('database.php');

if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($conn, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($conn,$id);
} 
function edit_data($conn, $id)
{
 $query= "SELECT * FROM user_details WHERE id= $id";
 $exec = mysqli_query($conn, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

function update_data($conn, $id){

    $full_name= legal_input($_POST['full_name']);
      $email_address= legal_input($_POST['email_address']);
      $city = legal_input($_POST['city']);
      $country = legal_input($_POST['country']);

      $query="UPDATE user_details 
            SET full_name='$full_name',
                email_address='$email_address',
                city= '$city',
                country='$country' WHERE id=$id";

      $exec= mysqli_query($conn,$query);
  
      if($exec){
         header('location:user_table.php');
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($conn);
         echo $msg;  
      }
}
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>