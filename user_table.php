<?php
include('read_script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creating a user table</title>
</head>
<body>
    <div class="crud-list">
         <div class="list-items">
             <h2>CRUD list</h2>
         </div>
    <table border="2">
        <tr>
            <th>S.N</th>
            <th>Full Name</th>
            <th>Email-address</th>
            <th>City</th>
            <th>Country</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>   

<?php
    if(count($fetchData)>0)
    {
        $sn=1;
        foreach($fetchData as $data){
    ?> <tr>
    <td><?php echo $sn; ?></td>
    <td><?php echo $data['full_name']; ?></td>
    <td><?php echo $data['email_address']; ?></td>
    <td><?php echo $data['city']; ?></td>
    <td><?php echo $data['country']; ?></td>
    <td><a href="update_form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete_script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
    </tr> <?php
          $sn++; 
        }      
    }else
    {
                
    ?>
          <tr>
            <td colspan="7">No Data Found</td>
          </tr>
                    
    <?php
        }
?>
</table>
</div>
</body>
</html>