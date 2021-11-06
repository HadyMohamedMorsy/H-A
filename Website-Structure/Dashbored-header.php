<?php
    if (empty($_SESSION)) {
        header("location: index.php");
    }
?>

<div class="mobile-header-dashbored">
    <div class="click-drop-burger-small">
        <i class="fas fa-align-right"></i>
    </div>
        <ul class="list-of-dashbored">
            <li><a href="./" class="Projects"><i class="fas fa-home"></i></a></li>
            <?php 
            if (!empty($_SESSION)) {
                echo '<li class="active profile-mob" data-aside =".profile"><a href="My-Profile-Setting" class="Edit-profile"><i class="fas fa-user" class="Edit-profile"></i></a></li>';
            }
            ?>
            <!-- <li><a href="Edit-Profile-seller.php" class="Edit-Seller"><i class="fas fa-user" class="Edit-profile"></i>Edit Profile Seller</a></li> -->
            <?php 
            if ($_SESSION['HA_U_P_Clients_Manager'] == 'Available') {
                echo '<li class="Clients-mob" data-aside =".Clients"><a href="Clients-Manager" class="Clients"><i class="fas fa-users"></i></a></li>';
            }
            ?>
            <?php 
            if ($_SESSION['HA_U_P_Seller_Manager'] == 'Available') {
                echo '<li class="Seller-mob" data-aside =".Seller"><a href="Seller-Manager" class="Projects"><i class="fas fa-user-tag"></i></a></li>';
            }
            ?>
            <?php 
            if ($_SESSION['HA_U_P_Employee_Manager'] == 'Available') {
                echo '<li class="Employee-mob" data-aside =".Employee"><a href="Employee-Manager" class="Employeres"><i class="fas  fa-user-tie"></i></a></li>';
            }
            ?>
            <?php 
            if ($_SESSION['HA_U_P_Category_Manager'] == 'Available') {
                echo '<li class="Category-mob" data-aside =".Category"><a href="Category-Management" class="Add Catogry"><i class="fas fa-tag"></i></a></li>';
            }
            ?>
            <?php 
            if ($_SESSION['HA_U_P_Add_Product'] == 'Available') {
                echo '<li class="Product-mob" data-aside =".Product"><a href="Add-Product" class="Add Project"><i class="fas fa-cart-plus"></i></a></li>';
            }
            ?>
            <?php 
            if ($_SESSION['HA_U_P_Products_List'] == 'Available') {
                echo '<li class="List-mob" data-aside =".List"><a href="Products-List" class="All-Products"><i class="fas fa-store"></i></a></li>';
            }
            ?>
            <li class="Dashboard-mob" data-aside =".Dashboard"><a href="Dashboard-Details" class="Dashbored"><i class="fas fa-chart-line"></i></a></li>
            <li class="Logout-mob" data-aside =".Logout"><a href="Logout" class="Add LogOut"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>      
    </div>
<aside>
<div class="click-drop-burger-large">
        <i class="fas fa-align-right"></i>
</div>
    <div class="image-useres">
        <div class="image-user-content">
            <?php 
                $Scan_Profile_Img = scandir('IMG/User-Profile-Picture/[User-ID='.$_SESSION['HA_U_ID'].']');
                if (count($Scan_Profile_Img) == 2) {
                    if ($_SESSION['HA_U_Gender'] == 'Male') {
                        $Profile_Img = 'IMG/User-Profile-Picture/[Defult-Profile-IMG]/IMG-Defult-Male.jpg';
                    }elseif ($_SESSION['HA_U_Gender'] == 'Female') {
                        $Profile_Img = 'IMG/User-Profile-Picture/[Defult-Profile-IMG]/IMG-Defult-Female.jpg';
                    }
                }else {
                    $Profile_Img =  'IMG/User-Profile-Picture/[User-ID='.$_SESSION['HA_U_ID'].']' . '/' . $Scan_Profile_Img[2];
                }
            echo '<img src = "'.$Profile_Img.'"/>';
            ?>
        </div>
        <?php echo '<h5>'.$_SESSION['User_First_Three_Names'].'</h5>';?>
        <?php echo '<br><h6>'.$_SESSION['HA_U_User_Type'].'</h6>';?>
    </div>
    <ul class="list-of-dashbored">
        <li><a href="./" class="Projects"><i class="fas fa-home"></i>Home Page</a></li>
        <?php 
        if (!empty($_SESSION)) {
            echo '<li class="active profile" data-aside =".Profile-mob"><a href="My-Profile-Setting" class="Edit-profile"><i class="fas fa-user" class="Edit-profile"></i>My Profile</a></li>';
        }
        ?>
        <!-- <li><a href="Edit-Profile-seller.php" class="Edit-Seller"><i class="fas fa-user" class="Edit-profile"></i>Edit Profile Seller</a></li> -->
        <?php 
        if ($_SESSION['HA_U_P_Clients_Manager'] == 'Available') {
            echo '<li class="Clients" data-aside =".Clients-mob"><a href="Clients-Manager" class="Clients"><i class="fas fa-users"></i>Clients Management</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Seller_Manager'] == 'Available') {
            echo '<li class="Seller" data-aside =".Seller-mob"><a href="Seller-Manager" class="Projects"><i class="fas fa-user-tag"></i>Sellers Management</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Employee_Manager'] == 'Available') {
            echo '<li class="Employee" data-aside =".Employee-mob"><a href="Employee-Manager" class="Employeres"><i class="fas  fa-user-tie"></i>Employees Management</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Category_Manager'] == 'Available') {
            echo '<li class="Category" data-aside =".Category-mob"><a href="Category-Management" class="Add Catogry"><i class="fas fa-tag"></i>Category Management</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Add_Product'] == 'Available') {
            echo '<li class="Product" data-aside =".Product-mob"><a href="Add-Product" class="Add Project"><i class="fas fa-cart-plus"></i>Add Prodect</a></li>';
        }
        ?>
        <?php 
        if ($_SESSION['HA_U_P_Products_List'] == 'Available') {
            echo '<li class="List" data-aside =".List-mob"><a href="Products-List" class="All-Products"><i class="fas fa-store"></i>Products List</a></li>';
        }
        ?>
        <li class="Dashboard" data-mob =".Dashboard-aside"><a href="Dashboard-Details" class="Dashbored"><i class="fas fa-chart-line"></i>Dashbored</a></li>
        <li class="Logout" data-mob =".Logout-aside"><a href="Logout" class="Add LogOut"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>
</aside>

