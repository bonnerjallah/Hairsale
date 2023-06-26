<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goddess Code Hair</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="header">
        <div class="socialmedia">
            <p><strong>CONNECT</strong> with Goddess code on</p>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#"  class="fa fa-snapchat" aria-hidden="true"></a>
        </div>
        <div class="user">
            <a href="/Projects/Hair/includes/wishlist.php" class="fa fa-heart-o" aria-hidden="true"></a>
            <a href="/Projects/Hair/includes/cart.php" class="fa fa-shopping-bag" aria-hidden="true"></a>
            <a href="/Projects/Hair/includes/login.php" class="fa fa-user-o" aria-hidden="true"></a>
        </div>
   </div>

    <nav class="navbar">
        <div class="home-about">
            <ul>
                <li><a href="/Projects/Hair/index.php">HOME</a></li>
                <li><a href="/Projects/Hair/about.php">ABOUT</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">PRODUCTS</a>
                    <div class="dropdown-content">
                        <a href="/Projects/Hair/links/hairbundles.php">HAIR BUNDLES</a>
                        <a href="/Projects/Hair/links/hairclosures.php">HAIR CLOSURES</a>
                        <a href="/Projects/Hair/links/hairfrontals.php">HAIR FRONTALS</a>
                        <a href="/Projects/Hair/links/wigs.php">WIGS</a>
                        <a href="haircareproducts.php">HAIR CARE PRODUCTS</a>
                        <a href="eyelashes.php">EYELASHES</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="logo">
        <img src="/Projects/Hair/img/stock-photo-elegant-woman-with-fur-339927932.jpg" alt="logo">
        </div>
        <div class="promo-contactus">
            <ul>
                <li><a href="/Projects/Hair/includes/login.php">PROMOTION</a></li>
                <li><a href="">BTS</a></li>
                <li><a href="/Projects/Hair/links/contactus.php">CONTACT US</a></li>
            </ul>
        </div>
    </nav>
    <div class="nextdayair">
        <p id="p1"> <a href="">UP TO 50% OFF UP TO 70% OFF</a></p>
        <p class="animation3"><a href=""></a></p>

    </div>


    <script>
        // JavaScript code
        const p1 = document.getElementById("p1");
        const p2 = document.getElementById("p2");

        function toggle() {
        p1.classList.toggle("fade-in-out");
        }

        // Toggle the p tags every 3 seconds
        setInterval(toggle, 3000);
    </script>
</body>
</html>