<!-- bob -->
<div class="background-when-menu"></div>
<div class="Login-username Login-dissapered">
    <form class="Login-user" action="" method="POST">
        <div class="cancel login-cancel">
            <i class="fas fa-times"></i>
        </div>
        <h2>Login</h2>
        <div class="form-group">
            <input type="text" name="Input_Username" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" name="Input_Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="remember-me">
            <div class="cheack">
                <div>
                    <input type="checkbox" class="" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
            </div>
            <div class="lost-password">
                <a href="#"> Lost your password? </a>
            </div>
        </div>
        <button type="submit" name="BTN_Login" class="btn form-control submit-user">Log in</button>
        <div class="regester">
            <span> Not a member </span> <a href="#">Register</a>
        </div>
    </form>
</div>

<div class="sign-username Sign-dissapered">
    <form class="sign-user" action="" method="POST">
        <div class="cancel sign-cancel">
            <i class="fas fa-times"></i>
        </div>
        <h2>Sign Up</h2>
        <div class="form-group">
            <input type="text" name="Input_Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="text" name="Input_First_Name" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <div class="form-group">
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Country...</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina"> Argentina</option>
                    <option value="Armenia"> Armenia</option>
                    <option value="Australia"> Australia</option>
                    <option value="Austria"> Austria</option>
                    <option value="Austrian Empire"> Austrian Empire*</option>
                    <option value="Austrian Empire"> Egypt</option>
                    <option value="Azerbaijan"> Azerbaijan</option>
                </select>
        </div>
        <div class="form-group">
            <input type="password" name="Input_Password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="text" name="Input_Country" class="form-control" id="exampleInputPassword3" placeholder="RE Password">
        </div>
        <div class="form-group">
            <input type="Text" name="Input_Password" class="form-control" id="exampleInputPassword4" placeholder="Age">
        </div>
        <div class="form-group">
            <label for="upload-photo" class="label form-control"> Upload Your Image...</label>
            <input type="file" name="photo" id="upload-photo" />
        </div>
        <p class="p-regester">You will register ? </p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="seller">
            <label class="form-check-label" for="inlineRadio1">seller</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="Client">
            <label class="form-check-label" for="inlineRadio2">Client</label>
        </div>
        <button type="submit" name="BTN_Register" class="btn form-control Sign-user">Register</button>
    </form>
</div>

<div class="bob-search bob-search-remove">
    <div class="cancel_search-cancel">
        <i class="fas fa-times"></i>
    </div>
    <form class="search-input">
        <input type="search" placeholder="Search Products" />
        <select class="select-search">
            <option>All Categories</option>
            <option>Men</option>
            <option>Speakers</option>
            <option>Women</option>
        </select>
    </form>
</div>
<div class="with-search with-search-remove"></div>
<!-- bob -->

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light scroll">
    <div class="menu-burger">
        <i class="fas fa-align-left"></i>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item select">
                <a class="nav-link menu-links menu-links-active" href="index.php">Home</a>
            </li>
            <li class="nav-item select">
                <a class="nav-link menu-links" href="About-Us.php">About Us</a>
            </li>
            <li class="nav-item select">
                <a class="nav-link menu-links" href="shop.php">Shop</a>
            </li>
            <li class="nav-item select">
                <a class="nav-link menu-links" href="Contact-us.php">Contact Us</a>
            </li>
        </ul>
    </div>
    <div class="logo-brand ">
        <img src="IMG/brand-logo.png" alt="brand-logo" />
    </div>
    <div class="icones-items items-Desktop">
        <?php
            if (!isset($_SESSION['HA_U_ID'])) {
                echo '
                    <a href="#" class="login menu-links">Login</a>
                    <a href="#" class="Sign menu-links">Sign Up</a>
                ';
            }else {
                echo'
                <a href="My-Profile-Setting"><i class="fas fa-user-cog"></i></a>
                <a href="Logout.php" class="menu-links"><i class="fas fa-sign-out-alt"></i></a>
                ';
            }
        ?>
            <a href="#" class="search-nav"><i class="fas fa-search"></i></a>
            <a href="Wishlet.php"><i class="far fa-heart"></i></a>
            <a href="#" class="open-plus-cart"><i class="fas fa-cart-plus"></i></a>
    </div>
    <div class="icones-items items-mobile">
        <a href="#"><i class="fas fa-cart-plus"></i></a>
    </div>
</nav>
<div class="left-menu">
    <div class="cancel">
        <i class="fas fa-times"></i>
    </div>
    <div class="content-left-menu">
        <div class="search-for-products">
            <form class="search-input">
                <input type="search" placeholder="Search Products" />
            </form>
        </div>
        <ul class="navbar-menu-burger">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-menu-burger anthoer-navbar-menu-burger Login-menu-burger">

            <?php
                if (!isset($_SESSION['HA_U_ID'])) {
                    echo '
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="Sign">Sign Up</a>
                        </li>
                    ';
                }else {
                    echo'
                    <li class="nav-item">
                        <a class="nav-link" href="My-Profile-Setting">Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="My-Profile-Setting"><i class="fas fa-user-cog"></i></a>
                    </li>
                    ';
                }
            ?>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-user"></i></a>
            </li> -->
        </ul>
        <ul class="navbar-menu-burger anthoer-navbar-menu-burger last-navbar-menu-burger">
            <li class="nav-item">
                <a class="nav-link" href="#">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cart-plus"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Wishlist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
            </li>
        </ul>
        <ul class="navbar-menu-burger anthoer-navbar-menu-burger">
            <li class="nav-item">
                <a class="nav-link" href="#">Language</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">En</a>
            </li>
        </ul>
        <div class="social-media">
            <ul class="social-media">
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- nav -->
<!-- cart -->
<div class="cart">
    <div class="cart-list">
        <header>
            <div class="container">
                <div class="panel-header-inner">
                    <div class="side-panel-title">Cart <span class="item-counter minicart-counter">1</span></div>
                    <div class="cancel se-cancel">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>
        </header>
        <div class="all-content-cart">
                <?php
                    $Subtotal = 0;
                    if (isset($_SESSION['HA_U_ID'])) {
                        if ($Count_Check_In_Cart > 0) {
                            while ($Rows = mysqli_fetch_array($Result_Check_In_Cart)) {
                                $SQL_Products_List = 'SELECT * FROM ha_products WHERE HA_P_ID = "'.$Rows['HA_C_Product_ID'].'"';
                                $Result_Products_List = mysqli_query($Connection,$SQL_Products_List);
                                $Row_Products_List  = mysqli_fetch_array($Result_Products_List, MYSQLI_ASSOC);
                                if ($Row_Products_List['HA_P_Status'] == 'Active') {
                                    $Count_Products_List  = mysqli_num_rows($Result_Products_List);
                                    $Path_Folder_Cover = 'IMG/Imges-Products/P_ID-'.$Row_Products_List['HA_P_ID'].'/P_ID-'.$Row_Products_List['HA_P_ID'].'-Cover';
                                    $Cover_Img = scandir($Path_Folder_Cover);
                                    echo '  <div class="list" id="'.$Rows['HA_C_Product_ID'].'">
                                            <div class="product-list-cart">
                                                <div class="img-product-cart">
                                                    <img src="'.$Path_Folder_Cover . '/' . $Cover_Img[2] . '" />
                                                </div>
                                                <div class="content-product">
                                                    <h6> '.$Row_Products_List['HA_P_Name'].' </h6>
                                                    <span class="min"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg> </span> <span class="Qty"> '.$Rows['HA_C_Qty'].' </span> <span class="plus"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> </span>
                                                    <div class="cancel">
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                                    <div class="price-cart">
                                                        <span class="Number-format">'.number_format($Rows['HA_C_Qty'] * $Rows['HA_C_Unit_Price'] , 2).'</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    $Subtotal += ($Rows['HA_C_Qty'] * $Rows['HA_C_Unit_Price']);
                                }
                            }
                        }
                    }else {
                        echo '<span class="no-items"> You Must Be Login First.. </span>';
                    }
                ?>
        </div>
        <div class="parent-total">
            <div class="subtotal">
                        <span class="sub"> Subtotal </span>
                        <span class="sub-number"> 
                        <?php 
                        echo number_format($Subtotal,2)
                        ?>
                        $
                        </span>
                </div>
                <div class="finish-list-cart">
                    <a href="cart.php" class="button checkout wc-forward"> Checkout</a>
                </div>
        </div>
    </div>
</div>
<!-- cart -->