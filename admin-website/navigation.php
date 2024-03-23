<!--PRELOADS THE NAVIGATION-->
<?php
    require_once('../php/connectdb.php');
    require_once('../php/mainLogCheck.php');
    $isAdmin=include('../php/isAdmin.php');
?>

<div class="top-nav">
    <!--Logo-->
    <div class="logo-container"><a href="../index.php"><img src="../assets/logo.png" alt=""></a></div>

    <form id="search-form" action="../products.php" method="get" name="search-form">
        <div class="nav-input-container">
            <!--Search Input-->
            <input type="text" id="search" name="search" class="search-input" placeholder="Search..."
                required />
            <i class='bx bx-search'></i>
            <input type="hidden" name="submit-search" value="TRUE" />
        </div>
    </form>

    <!--Right Navigation-->
    <div class="right-nav">
        <!--Shopping Basket Button-->
        <?php
            //Login Button
            if ($b==true) {
                //Log out button
                //Shopping Basket Button
                echo '<a href="../basket.php" class="basket-link"><div class="basket-button bx bx-basket"></div></a>';
                echo '<div class="login-button"><a href="../php/signOut.php"">Log Out</a></div>';
            }else{
                //Login Button
                echo '<div class="login-button"><a href="../login.php">Login</a></div>';
            }       
        ?>
    </div>

    <!--Mobile-Background-->
    <div class="mobile-background"></div>
    <!--Mobile Navigation-->
    <nav class="mobile-nav">
        <div class="mobile-nav-top">
            <div class="mobile-logo"><img src="../assets/logo.png" alt=""></div>
            <p class="close-menu-button" draggable="false">X</p>
        </div>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <!--Dropdown-->
            <li class="dropdown">
                <a href="../products.php?category_id[]=5&category_id[]=6">Pets v</a>
                <ul class="dropdown-menu-mobile">
                    <li class="dropdown-li"><a href="../products.php?category_id[]=6">Cats</a></li>
                    <li class="dropdown-li"><a href="../products.php?category_id[]=5">Dogs</a></li>
                </ul>
            </li>
            <!--Dropdown-->
            <li class="dropdown">
                <a href="../products.php?category_id[]=19&category_id[]=20&category_id[]=21">Shop v</a>
                <ul class="dropdown-menu-mobile">
                    <li class="dropdown-li"><a href="../products.php?category_id[]=21">Toys</a></li>
                    <li class="dropdown-li"><a href="../products.php?category_id[]=20">Grooming</a></li>
                    <li><a href="../products.php?category_id[]=19">Treats</a></li>
                </ul>
            </li>
            <li><a href="../advice.php">Advice</a></li>
            <li><a href="../about.php">About Us</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <?php
            if ($b==true) {
                echo '<li><a href="../orders.php">Orders</a></li>';
                echo '<li><a href="../account.php">Account</a></li>';
                if ($isAdmin) {
                    echo '<li><a href="../admin-website/adminDashboard.php">Admin</a></li>';
                }
            }
            ?>
            <div class="mobile-bottom-nav">
            <?php
                //Login Button
                if ($b==true) {
                    //Log out button
                    //Shopping Basket Button
                    echo '<a href="../basket.php" class="basket-link"><div class="basket-button bx bx-basket"></div></a>';
                    echo '<div class="login-button"><a href="../php/signOut.php"">Log Out</a></div>';
                }else{
                    //Login Button
                    echo '<div class="login-button"><a href="../login.php">Login</a></div>';
                }       
            ?>
            </div>
        </ul>
    </nav>
    <!--Mobile Hamburger-->
    <div id="hamburger-button" class='bx bx-menu'></div>
</div>

<div class="bottom-nav">
    <!--Middle Navigation-->
    <nav class="desktop-nav">
        <ul class="desktop-nav-ul">
            <li><a href="../index.php">Home</a></li>
            <!--Dropdown-->
            <li class="dropdown">
                <a href="../products.php?category_id[]=5&category_id[]=6">Pets v</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-li"><a href="../products.php?category_id[]=6">Cats</a></li>
                    <li class="dropdown-li"><a href="../products.php?category_id[]=5">Dogs</a></li>
                </ul>
            </li>
            <!--Dropdown-->
            <li class="dropdown">
                <a href="../products.php?category_id[]=19&category_id[]=20&category_id[]=21">Shop v</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-li"><a href="../products.php?category_id[]=21">Toys</a></li>
                    <li class="dropdown-li"><a href="../products.php?category_id[]=20">Grooming</a></li>
                    <li><a href="../products.php?category_id[]=19">Treats</a></li>
                </ul>
            </li>
            <li><a href="../advice.php">Advice</a></li>
            <li><a href="../about.php">About Us</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <?php
            //Account & Orders Button
            if ($b==true) {
                echo '<li><a href="../orders.php">Orders</a></li>';
                echo '<li><a href="../account.php">Account</a></li>';
                if ($isAdmin) {
                    echo '<li><a href="../admin-website/adminDashboard.php">Admin</a></li>';
                }
            }       
            ?>
        </ul>
    </nav>
</div>
