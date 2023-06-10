<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>


    <!-- swiper cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- fontawsome cdnlink -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style.css"></link>
</head>
<body>
    

    <!-- header section -->

    <section class="header">
        <a href="home.php" class="logo">Travels.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <div class="headings">
        <h1>book us</h1>
    </div>


    <!-- section booking -->

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>

        <form action="booking.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>name:<span>
                    <input type="text" placeholder="enter yor name" name="name">
                </div>
                <div class="inputbox">
                    <span>email:<span>
                    <input type="email" placeholder="enter yor email" name="email">
                </div>
                <div class="inputbox">
                    <span>phone:<span>
                    <input type="text" placeholder="enter yor number" name="phone">
                </div>
                <div class="inputbox">
                    <span>address:<span>
                    <input type="text" placeholder="enter yor address" name="address">
                </div>
                <div class="inputbox">
                    <span>where to:<span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputbox">
                    <span>how many:<span>
                    <input type="text" placeholder="number of  guests" name="guests">
                </div>
                <div class="inputbox">
                    <span>arrivals:<span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputbox">
                    <span>leaving:<span>
                    <input type="date"  name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
    




    



    <!-- footer section -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href=""><i class="fas fa-angle-right"></i>home</a>
                <a href=""><i class="fas fa-angle-right"></i>about</a>
                <a href=""><i class="fas fa-angle-right"></i>package</a>
                <a href=""><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href=""><i class="fas fa-angle-right"></i>ask question</a>
                <a href=""><i class="fas fa-angle-right"></i>about us</a>
                <a href=""><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href=""><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href=""><i class="fas fa-phone"></i>+91 987-654-3210</a>
                <a href=""><i class="fas fa-phone"></i>+91 987-654-3210</a>
                <a href=""><i class="fas fa-envelope"></i>example@gmail.com</a>
                <a href=""><i class="fas fa-map"></i>chennai, india - 400104</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href=""><i class="fas fa-facebook-f"></i>facebook</a>
                <a href=""><i class="fas fa-twitter"></i>twitter</a>
                <a href=""><i class="fas fa-instagram"></i>instagram</a>
                <a href=""><i class="fas fa-linkedin"></i>linkedin</a>
            </div>
        </div>
        <div class="credit">
            created by<span>Ak@designer</span> | all rights reserved!
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>