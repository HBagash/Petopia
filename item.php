<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petopia</title>
    <link href="css/item.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <script src="scripts/navigation.js"></script>
    <link href="css/footer.css" rel="stylesheet" type="text/css">

    <!--[Google Fonts]-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Nunito Font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800&family=Work+Sans:wght@700;800&display=swap"
        rel="stylesheet">

    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--Flickity-->
    <!--CSS-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!--JS-->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</head>

<body>
    <header>
        <!--
        [NAVIGATION/HEADER]
    -->
        <header>
            <!--Logo-->
            <div class="logo-container"><a href="#"><img src="assets/logo.png" alt=""></a></div>

            <!--Middle Navigation-->
            <nav class="desktop-nav">
                <ul class="desktop-nav-ul">
                    <li><a href="index.html">Home</a></li>
                    <!--Dropdown-->
                    <li class="dropdown">
                        <a href="#">Pets v</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-li"><a href="items.html">Cats</a></li>
                            <li class="dropdown-li"><a href="items.html">Dogs</a></li>
                        </ul>
                    </li>
                    <!--Dropdown-->
                    <li class="dropdown">
                        <a href="#">Shop v</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-li"><a href="items.html">Toys</a></li>
                            <li class="dropdown-li"><a href="items.html">Grooming</a></li>
                            <li><a href="items.html">Treats</a></li>
                        </ul>
                    </li>
                    <li><a href="advice.html">Advice</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>

            <!--Right Navigation-->
            <div class="right-nav">
                <!--Shoppiung Basket Button-->
                <a href="" class="basket-link">
                    <div class='basket-button bx bx-basket'></div>
                </a>
                <!--Login Button-->
                <a href="login.php" class="login-link">
                    <div class="login-button">Login</div>
                </a>
            </div>

            <!--Mobile-Background-->
            <div class="mobile-background"></div>
            <!--Mobile Navigation-->
            <nav class="mobile-nav">
                <div class="mobile-nav-top">
                    <div class="mobile-logo"><img src="assets/logo.png" alt=""></div>
                    <p class="close-menu-button" draggable="false">X</p>
                </div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <!--Dropdown-->
                    <li class="dropdown">
                        <a href="#">Pets v</a>
                        <ul class="dropdown-menu-mobile">
                            <li class="dropdown-li"><a href="items.html">Cats</a></li>
                            <li class="dropdown-li"><a href="items.html">Dogs</a></li>
                        </ul>
                    </li>
                    <!--Dropdown-->
                    <li class="dropdown">
                        <a href="#">Shop v</a>
                        <ul class="dropdown-menu-mobile">
                            <li class="dropdown-li"><a href="items.html">Cats</a></li>
                            <li class="dropdown-li"><a href="items.html">Dogs</a></li>
                        </ul>
                    </li>
                    <li><a href="advice.html">Advice</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <div class="mobile-bottom-nav">
                        <!--Login Button-->
                        <a href="login.php" class="login-link">
                            <div class="login-button">Login</div>
                        </a>
                        <!--Shoppiung Basket Button-->
                        <a href="" class="basket-link">
                            <div class='basket-button bx bx-basket'></div>
                        </a>
                    </div>
                </ul>
            </nav>
            <!--Mobile Hamburger-->
            <div id="hamburger-button" class='bx bx-menu'></div>
        </header>
        <!--
        [HEADER/NAVIGATION END]
    -->
    </header>

    <main>
        <!--Hero Banner-->
        <section class="hero-banner">
            <!--Hero Banner Image-->
            <div class="hero-banner-image"><img src="assets/Homepage/hero-banner2.jpg" alt=""></div>

            <!--Hero Banner Text Container-->
            <div class="hero-banner-left">

                <div class="hero-banner-content">
                    <h2>Shop</h2>
                    <p> Browse</p>
                </div>
            </div>
        </section>

        <section class="item-section">
            <div class="item-image">
                <img src="assets/Homepage/hero-banner2.jpg" alt="">
            </div>

            <div class="right-container">
                <!-- <h4 class="category-text"></h4> -->
                <?php
                    
                    require_once('php/connectdb.php');
                    try {
                        $productQuery = "select * from  product where Name ="; //need to add 'where' query once i have a category variable
    
                        //run  the query
                        // $db = new PDO("mysql:dbname=$db_name;host=$db_host", $username, $password);
                        $rows =  $db->query($productQuery);
    
                        //display the query edited table	
                        if ($rows && $rows->rowCount() > 0) {
                            foreach ($rows as $row) {
                ?>
                                <h3 class="title-text"></h3>
                                <div class="stars-container">
                                    <div class='bx bxs-star'></div>
                                    <div class='bx bxs-star'></div>
                                    <div class='bx bxs-star'></div>
                                    <div class='bx bxs-star'></div>
                                    <div class='bx bxs-star'></div>
                                    <p>(0 Review)</p>
                                </div>
                                <h5 class="price-text"></h5>
                                <p class="desc-text"></p>
                                <button type="submit" name="add">Add to Cart<div class="bx bx-cart-add"></div></button>
            </div>

        </section>

    </main>
</body>

<footer>
    &copy; 2023 Petopia
</footer>
</body>

</html>