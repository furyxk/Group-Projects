<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    </head>

    <body>

        <section id="header">
            <a href="#"><img src="img/logo.png" alt="" height="75px" class ="round-img"></a>

            <div>
                <ul id="navbar">
                    <li><a class="active" href="home.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></i></a></li>
                    <li><a href="index.php"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>

            <style>
                .round-img {
                    border-radius : 10px;               
                 }
            </style>

        </section>

        <section id="hero">
            <h4>Trade-in-offer</h4>
            <h2>Super Value Deals</h2>
            <h1>On all products</h1>
            <button>Shop Now</button>
        </section>

     
          

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up For Newsletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your E-mail address">
                <button class="normal">Sign Up</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo"src="img/logo.png" height="75px" alt="">
                <h4>Contact</h4>
                <p><strong>Address : 293/10,Dikwela Road,Siyambalape</strong></p>
                <p><strong>Phone : 0714411044</strong></p>
                <p><strong>Working Hours : 8AM - 5PM</strong></p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>About</h4>
                <a href="#">About Us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="#">View cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>

            <div class="col install">
                <p>Secured Payment Gateways</p>
                <img src="img/pay/pay.png" alt="">
            </div>

            <div class="copyright">
                <p>2024, DilFashion etc</p>
            </div>

        </footer>
    



        <script src="script.js"></script>

       

    </body>

</html>