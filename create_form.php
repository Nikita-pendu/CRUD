<?php
include 'create_script.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD OPERATIONS</title>
</head>
<body>
    <div class="user-details">
       <div class="class-title">
        <h2>create From</h2>
</div>
<p><?php if(!empty($msg)){echo $msg;}?></p>
<form method="post" action="">
    Full_name:<input type="text" placeholder="Enter Full_name" name="full_name"required><br><br>
    Email: &nbsp;&nbsp;&nbsp;<input type="email" placeholder="Enter email_address" name="email_address"required><br><br>
    city: &nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter your city" name="city"required><br><br>
    country: <input type="text" placeholder="Enter your country" name="country"required><br><br>
    <button type="submit" name="create">Submit</button>
</form>
</div>
    
</body>
</html>