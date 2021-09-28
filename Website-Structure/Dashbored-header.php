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
        <li><a href="Admin-system.php" class="Dashbored"> <i class="fas fa-home"></i> Dashbored</a></li>
        <li><a href="Edit-Profile.php" class="Edit-profile"><i class="fas fa-user-tie" class="Edit-profile"></i>Edit Profile</a></li>
        <li><a href="Edit-Profile-seller.php" class="Edit-Seller"><i class="fas fa-user-tie" class="Edit-profile"></i>Edit Profile Seller</a></li>
        <?php 
        if ($_SESSION['HA_P_Permission_Seller_Manager'] == 'Available') {
            echo '<li><a href="Vendor-Seller-Manager.php" class="Projects"><i class="fas fa-briefcase"></i>Sellers Management</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_P_Permission_Clients_Manager'] == 'Available') {
            echo '<li><a href="Vendor-Clients-Manager.php" class="Clients"><i class="fas fa-briefcase"></i>Clients Management</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_P_Permission_Employee_Manager'] == 'Available') {
            echo '<li><a href="Vendor-Employee-Manager.php" class="Employeres"><i class="fas fa-briefcase"></i>Employeres Management</a></li>';
        }
        ?>
        <li><a href="Add-prodect.php" class="Add Project"><i class="fas fa-briefcase"></i>Add Prodect</a></li>
        <li><a href="Add-Catagry.php" class="Add Catogry"><i class="fas fa-briefcase"></i>Add Catogry</a></li>
        <li><a href="All-Products.php" class="All-Products"><i class="fas fa-briefcase"></i>All My Products</a></li>
        <li><a href="All-Catagry.php" class="All-Catagry"><i class="fas fa-briefcase"></i>Catagry List</a></li>
        <li><a href="Logout.php" class="Add LogOut"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
    </ul>
</aside>




