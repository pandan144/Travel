<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

     <!-- fontawsome cdnlink -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- admin css -->
     <link rel="stylesheet" href="css/adminstyle.css"></link>
</head>
<body>
    <?php

    ?>

    <div class="container">
        <form action="adminlogin.php" method="POST" class="adminform">
            <span>Admin Name</span>
            <input type="text" id="adminname" name="adminname" placeholder="Enter the name" require>
            <span>Password</span>
            <input type="Password" id="password" name="password" placeholder="Enter the password" require>
            <input type="submit" name="submit" class="btn" value="Login">
        </form>
    </div>

    <!-- admin login page -->
    <script src="js/admin.js"></script>
</body>
</html>