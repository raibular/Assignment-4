<?php
session_start();
require_once "db_connection.php";
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
?>
<html xmlns:height="http://www.w3.org/1999/xhtml" xmlns:background="http://www.w3.org/1999/xhtml" xmlns: xmlns: xmlns:>
<head>
    <title>Admin Panel  </title>
    <link rel="stylesheet" type="text/css" href="style_admin.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>


<body>



<div id="header">
    <center><img src="http://gvnpc.com/admin/images/login_icon.png">
        <h3> Welcome to Admin Panel  </h3></center>
</div>
<div class="wrapper">
<div id="sidemenu">
    <ul >
        <li>
            <a href="index.php?insert_product">
                <i class="fas fa-plus"></i> Insert New Product
            </a>
        </li>
        <li>
            <a href="index.php?view_products">
                <i class="fas fa-sitemap"></i> View All Products
            </a>
        </li>
        <li>
            <a href="index.php?insert_category">
                <i class="fas fa-plus"></i> Insert New Category
            </a>
        </li>
        <li>
            <a href="index.php?view_categories">
                <i class="fas fa-band-aid"></i> View All Categories
            </a>
        </li>
        <li>
            <a href="index.php?insert_brand">
                <i class="fas fa-plus"></i> Insert New Brand
            </a>
        </li>
        <li>
            <a href="index.php?view_brands">
                <i class="fas fa-toolbox"></i> View All Brands</a>
        </li>

        <li>
            <a href="logout.php">
                <i class="fa fa-sign-out-alt"></i> Admin logout</a>
        </li>
    </ul>
</div>

<div id="data" style="width: 80%;  height: auto; background: rgba(52,73,94,0.51);color: #601286">
    <br><br>



        <div class="container">
            <h2 class="text-center  "style="color: #6f42c1"><?php echo @$_GET['logged_in']?></h2>
            <?php
            if(isset($_GET['insert_product'])){
                include ('insert_product.php');
            }
            else if(isset($_GET['view_products'])){
                include ('view_products.php');
            }
            else if(isset($_GET['edit_pro'])){
                include ('edit_pro.php');
            }
            else if(isset($_GET['del_pro'])){
                include ('del_pro.php');
            }
            else if(isset($_GET['view_categories'])){
                include ('view_categories.php');
            }
            else if(isset($_GET['insert_category'])){
                include ('insert_category.php');
            }
            else if(isset($_GET['edit_cat'])){
                include ('edit_cat.php');
            }
            else if(isset($_GET['del_cat'])){
                include ('del_cat.php');
            }
            else if(isset($_GET['view_brands'])) {
                include('view_brands.php');
            }
            else if(isset($_GET['insert_brand'])) {
                include('insert_brand.php');
            }
            else if(isset($_GET['edit_brand'])) {
                include('edit_brand.php');
            }
            else if(isset($_GET['del_brand'])) {
                include('del_brand.php');
            }

            ?>
        </div>


</div>
</div>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>


</body>
</html>