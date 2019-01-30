<!DOCTYPE html>
<?php
require "server/functions.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="Rai bular,Salis zahid,umer,haris,haider" content="Hege Refsnes">
    <title>Home</title>
    <script src="js/jquery2.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style1.css">



    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script>
        function Check(str) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("show").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "check_search.php?e=" + str, true);
            xmlhttp.send();
            //document.getElementById('hint').innerHTML = 'loading...';
        }
    </script>


</head>
<body>





<header>
    <div class="cn-nav">
        <nav class="Emandi-navbar navbar navbar-expand-lg navbar-dark bg-dark">
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent navbar-right">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-headphones"></i>Customer Support</a>
                        </li>


                    </ul>

                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-phone"></i>Call Now 123</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fab fa-facebook"></i>Follow us on facebook </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i>Follow us on google</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>



        <nav class="navbar navbar-expand-lg navbar-light bg-#976afa">
            <div class="container">



                <img src="https://www.freeiconspng.com/uploads/shopping-cart-icon-3.png "width="100px" height="100px">
                <h1> OUR SHOP  </h1>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="top_bar collapse navbar-collapse" id="navbarNavDropdown2">
                    <ul class="navbar-nav mr-auto">
                        <form  style="margin-right: 100px;maxlenth="64">
                        <input type="text" name="search" maxlength="64" placeholder="Search.." onkeyup="Check(this.value)" >

                        <button type="submit" class="btn btn-primary btn-sm" style="background-color: #122aff ; position: sticky">Search</button>
                        </form>


                    </ul>
                    <ul class="navbar-nav">



                        <li class="nav-item active "style="font-size:20px ">
                            <a class="nav-link" href="home.php"><h5><b>Home</b></h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php" style="font-size:20px "><h5><b>Contact</b></h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" style="font-size:20px "><h5><b>About us</b></h5></a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="loginpage.php" style="font-size:20px "><h5><b>Login</b></h5></a>
                        </li>
                        <li class="nav-item active "style="color: #0f0f0f" >
                            <a class="nav-link" href="index.php"><i class="fas fa-shopping-cart sc-color fa-2x" style="color:#000;"></i></a>
                        </li>

                    </ul>
                </div>

            </div>

        </nav>
    </div>

</header>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="bg-light">
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link">
                    <i class="fas fa-sitemap"></i>
                    Categories
                </a>
                <ul class="collapse show list-unstyled" id="homeSubmenu">
                    <?php getCats(); ?>
                </ul>
            </li>
            <li class="active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link">
                    <i class="fas fa-briefcase"></i>
                    Brands
                </a>
                <ul class="collapse show list-unstyled" id="pageSubmenu">
                    <?php getBrands(); ?>
                </ul>
            </li>

        </ul>
    </nav>
    <article id="content" class="container-fluid bg-white">

        <div class="row" id="show">
            <?php getPro(); ?>
        </div>
    </article>


</div>

<?php require "Footer.php";
?>


<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>



</body>
</html>
