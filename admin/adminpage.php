<?php include 'adminlogin.php'?>
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
    
    <section class="adminhomepage">
        <section class="sidemenu">

            <a href="home.php" class="logo">Travels.</a>

            <nav class="navbar">
                <a href="adminpage.php">users</a>
                <a href="">travelbakages</a>
                <a href=""></a>
                <a href=""></a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </section>
        <section class="userdata">

            <h1 class="heading-title">Booking the users</h1>

            <table border="1">
                <thead >
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>location</th>
                    <th>guests</th>
                    <th>arrivals</th>
                    <th>leaving</th>

                </thead>
                <tbody>

                    <?php

                    $sql = "SELECT* FROM booking";
                    $result = $connection -> query($sql);

                    if(mysqli_num_rows($result)> 0){
                        while($row=mysqli_fetch_assoc($result) ){
                        ?>
                         <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><?php echo $row['location'];?></td>
                        <td><?php echo $row['guests'];?></td>
                        <td><?php echo $row['arrivals'];?></td>
                        <td><?php echo $row['leaving'];?></td>
                    </tr>

                        <?php
                        }
                    }

                    ?>
                </tbody>
            </table>

            

        </section>

    </section>

    <!-- admin login page -->
    <script src="js/admin.js"></script>
</body>
</html>