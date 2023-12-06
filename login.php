<?php
    //if form submitted
    session_start();
    $b=False; // boolean
    if (isset($_SESSION['username'])) {
        $b=True; // used so the logged in user doesn't get sent back to this page, until logged out
    }

    if (isset($_POST['submitLogin'])) { // if user submitted details
        if (!isset($_POST['username'], $_POST['password'])) { // check if fields are empty
            exit('Please fill both the username and password fields!'); // stop running check, error message (empty fields)
        }

        // connect to DB
        // require_once("php/connectdb.php");
        require_once("php/loggingIn.php");
        
    }

    if (isset($_POST['submitSignUp'])) { // if user submitted details
        if (!isset($_POST['email'], $_POST['username'], $_POST['password'])) { // check if fields are empty
            exit('Please fill the email, username, and password fields.'); // stop running check, error message (empty fields)
        }
    
        // connect to DB
        require_once("php/signingUp.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Petopia</title>
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <link href="css/navigation.css" rel="stylesheet" type="text/css">
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
    
    <section class="main-content">
            <h2></h2>
        </section>
        <div class="flex h-screen">
            <!-- Left Pane -->
            <div class="hidden lg:flex items-center justify-center flex-1 bg-white text-black">
            <div class="max-w-md text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="524.67004" height="531.39694" class="w-full" alt="https://undraw.co/illustrations" title="https://undraw.co/illustrations" viewBox="0 0 524.67004 531.39694" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- ... (SVG code from the original code) ... -->
                </svg>
                <h2 class="text-2xl font-semibold text-gray-700 mb-6">Login</h2>
                <form id="loginForm" name="loginForm" method="post" action="login.php">
                    <div class="mb-4">
                        <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Username</label>
                        <input type="text" id="username" name="username" class="w-full border border-gray-300 px-3 py-2 rounded-md" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full border border-gray-300 px-3 py-2 rounded-md" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Login</button>
                    <input type="hidden" name="submitLogin" value="TRUE" />
                </form>
            </div>
        </div>

        <!-- Right Pane (Login Form) -->
        <div class="flex-1 flex items-center justify-center bg-gray-200">
                <div class="max-w-md p-8">
                    <h2 class="text-2xl font-semibold text-gray-700 mb-6">Sign Up</h2>
                    <form id="SignUpForm" name="signUpForm" method="post" action="login.php">
                        <div class="mb-4">
                            <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
                            <input type="text" id="email" name="email" class="w-full border border-gray-300 px-3 py-2 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Username</label>
                            <input type="text" id="username" name="username" class="w-full border border-gray-300 px-3 py-2 rounded-md" required>
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                            <input type="password" id="password" name="password" class="w-full border border-gray-300 px-3 py-2 rounded-md" required>
                        </div>
                        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Login</button>
                        <input type="hidden" name="submitSignUp" value="TRUE" />
                    </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr"
    method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="test@band.com">

  <!-- Specify a PayPal shopping cart View Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="display" value="1">

  <!-- Display the View Cart button. -->
  <input type="image" name="submit"
         src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif"
         alt="Add to Cart">
  <img alt="" width="1" height="1"
       src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
    <footer>
        &copy; 2023 Petopia
    </footer>
</body>
</html>