<?php
    if (empty($_SESSION)) {
        header("location: index.php");
    }
?>

<aside>
    <div class="image-useres">
        <div class="image-user-content">
            <?php echo '<img src = "IMG/User-Profile-Picture/[User-ID='.$_SESSION['HA_U_ID'].']/image.jpg" alt="emp_default.jpg"/>';?>
        </div>
        <?php echo '<h5>'.$_SESSION['User_First_Three_Names'].'</h5>';?>
        <?php echo '<br><h6>'.$_SESSION['HA_U_User_Type'].'</h6>';?>
    </div>
    <ul class="list-of-dashbored">
        <li><a href="index.php" class="Projects"><i class="fas fa-home"></i>Home Page</a></li>
        <li><a href="Admin-system.php" class="Dashbored"><i class="fas fa-chart-line"></i>Dashbored</a></li>
        <li><a href="Edit-Profile.php" class="Edit-profile"><i class="fas fa-user" class="Edit-profile"></i>Edit Profile</a></li>
        <li><a href="Edit-Profile-seller.php" class="Edit-Seller"><i class="fas fa-user" class="Edit-profile"></i>Edit Profile Seller</a></li>
        <?php 
        if ($_SESSION['HA_U_P_Seller_Manager'] == 'Available') {
            echo '<li><a href="Vendor-Seller-Manager.php" class="Projects"><i class="fas fa-user-tag"></i>Sellers Management</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Clients_Manager'] == 'Available') {
            echo '<li><a href="Vendor-Clients-Manager.php" class="Clients"><i class="fas fa-users"></i>Clients Management</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Employee_Manager'] == 'Available') {
            echo '<li><a href="Vendor-Employee-Manager.php" class="Employeres"><i class="fas  fa-user-tie"></i>Employeres Management</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Category_Manager'] == 'Available') {
            echo '<li><a href="Add-Category.php" class="Add Catogry"><i class="fas fa-tag"></i>Add Category</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Category_List'] == 'Available') {
            echo '<li><a href="Category-List.php" class="All-Catagry"><i class="fas fa-tags"></i>Category List</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Add_Product'] == 'Available') {
            echo '<li><a href="Add-Product.php" class="Add Project"><i class="fas fa-cart-plus"></i>Add Prodect</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Products_List'] == 'Available') {
            echo '<li><a href="Products-List.php" class="All-Products"><i class="fas fa-store"></i>Products List</a></li>';
        }
        ?>
        <li><a href="Logout.php" class="Add LogOut"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
    </ul>
</aside>




