<div class="container">
    <div class="slider-product">
        <div class="row">
            <div class="col-lg-8 Images-slider">
                <?php echo '<img src="'.$Path_Cover.'/'.$Cover_Product[2].'" alt="" />'?>
                <div class="right-arrow"> <i class="fas fa-chevron-right"></i> </div>
                <div class="left-arrow"> <i class="fas fa-chevron-left"></i> </div>
                <div class="slider-img">
                    <?php
                        echo '<div class="img-slider"> <img src="' . $Path_Cover . '/' . $Cover_Product[2] .'"  alt="5" /> </div>';
                        for ($i=2; $i < count($Imgs_Product) ; $i++) { 
                                echo '<div class="img-slider"> <img src="' . $Path_Imgs . '/' . $Imgs_Product[$i] .'"  alt="5" /> </div>';
                        }
                    ?>
                    <!-- <div class="img-slider"> <img src="./IMG/5.jpg" class="active" alt="5" /> </div>
                    <div class="img-slider"> <img src="./IMG/6.jpg" alt="6" /> </div>
                    <div class="img-slider"> <img src="./IMG/7.jpg" alt="7" /> </div> -->
                </div>
            </div>
            <div class="col-lg-4 position-relative">
                <div class="pt-sm-2">
                    <div class="catagroy-product">
                        <span class="ml-sm-2"> Wonman</span> <span class="ml-sm-2"> Men</span>
                        <h2 class="heading-Name-product mt-sm-3">
                            <?php echo $Row_Product_Details['HA_P_Name'] ; ?>
                        </h2>
                        <p class="price-product">
                            <?php echo number_format($Row_Product_Details['HA_P_Price'] ,2) ; ?>
                        </p>
                        <div class="description-two">
                            Extra-fine ribbed pima cotton that’s stretchy, fitted, and just a touch sexy.
                        </div>
                        <div class="sizes">
                            <span class="active">LG</span>
                            <span>M</span>
                            <span>S</span>
                        </div>
                        <div class="add-action">
                            <button class="Add-Cart"> Add Cart </button>
                            <button class="Add-Wishlet"> Add Wishlet </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-description">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 Desc">
                <h2> Description </h2>
                <p><?php echo $Row_Product_Details['HA_P_Description'] ; ?></p>
            </div>
            <div class="col-12 information">
                <h2> Additional information </h2>
                <div class="information">
                    <table class="woocommerce-product-attributes shop_attributes">
                        <tbody>
                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_pattern">
                                <th class="woocommerce-product-attributes-item__label">Pattern</th>
                                <td class="woocommerce-product-attributes-item__value">
                                    <p>Green, Brown</p>
                                </td>
                            </tr>
                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">
                                <th class="woocommerce-product-attributes-item__label">Size</th>
                                <td class="woocommerce-product-attributes-item__value">
                                    <p>S, M, L</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <h2> <?php echo $Count_Comments_Products;?> Reviews </h2>
                <div class="comment">
                    <?php
                        if ($Count_Comments_Products > 0 ) {
                            while ($Rows = mysqli_fetch_array($Result_Comments_Products)) {
                                $SQL_GET_User_Info = 'SELECT HA_U_First_Name,HA_U_Second_Name,HA_U_Last_Name FROM ha_users WHERE HA_U_ID = "'.$Rows['HA_P_C_By_User_ID'].'"';
                                $Result_GET_User_Info  = mysqli_query($Connection,$SQL_GET_User_Info);
                                $Row_GET_User_Info  = mysqli_fetch_array($Result_GET_User_Info, MYSQLI_ASSOC);
                                $Full_Name = $Row_GET_User_Info['HA_U_First_Name'] . ' ' . $Row_GET_User_Info['HA_U_Second_Name'] . ' ' . $Row_GET_User_Info['HA_U_Last_Name'];
                                $Scan_Profile_Img = scandir('IMG/User-Profile-Picture/[User-ID='.$Rows['HA_P_C_By_User_ID'].']');
                                if (count($Scan_Profile_Img) == 2) {
                                    if ($Rows['HA_U_Gender'] == 'Male') {
                                        $Profile_Img = 'IMG/User-Profile-Picture/[Defult-Profile-IMG]/IMG-Defult-Male.jpg';
                                    }elseif ($Rows['HA_U_Gender'] == 'Female') {
                                        $Profile_Img = 'IMG/User-Profile-Picture/[Defult-Profile-IMG]/IMG-Defult-Female.jpg';
                                    }
                                }else {
                                    $Profile_Img =  'IMG/User-Profile-Picture/[User-ID='.$Rows['HA_P_C_By_User_ID'].']' . '/' . $Scan_Profile_Img[2];
                                }
                                echo '
                                    <div class="user-image">
                                        <img src="'.$Profile_Img.'" alt="" />
                                        <div class="content-user">
                                            <p> ' . $Full_Name . ' </p>
                                            <p class="time"> ' . $Rows['HA_P_C_Date_Created'] . ' </p>
                                            <p class="description-comment"> ' . $Rows['HA_P_C_Comment_Content'] . ' </p>
                                        </div>
                                    </div>
                                ';
                            }
                        }
                    ?>
                    
                    <!-- <div class="user-image">
                        <img src="./IMG/5.jpg" alt="" />
                        <div class="content-user">
                            <p>Hady Mohamed</p>
                            <p class="time">15/8/2020</p>
                            <p class="description-comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores ex officia tempora. Itaque unde architecto magni commodi rem. Quas aliquam aut nihil eius qui soluta sequi fuga. Odit.</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-12 comment-start-user">
                <span class="start-comment"> More Review</span>
            </div>
            <div class="col-12 comment-start-user">
                <form class="comment-here">
                    <p><textarea placeholder="Your review"></textarea></p>
                    <div class="name-email">
                    </div>
                    <button type="button" class="sub-comment"> Comment </button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="refrend-cattgroy">
            <h2> Related products </h2>
            <div class="row catagroy-js">
                <?php
                    while ($Rows = mysqli_fetch_array($Result_Related_Products)) {
                        $Path_Cover_Related = 'IMG/Imges-Products/P_ID-' . $Rows['HA_P_ID'] . '/' . 'P_ID-' . $Rows['HA_P_ID'] . '-Cover';
                        $Cover_Product_Related = scandir($Path_Cover_Related);
                        $Path_Imgs_Related = 'IMG/Imges-Products/P_ID-' . $Rows['HA_P_ID'] . '/' . 'P_ID-' . $Rows['HA_P_ID'] . '-IMGS';
                        $Imgs_Product_Related = scandir($Path_Imgs_Related);
                        echo '
                            <div class="col-3 ref-all-content mx-auto">
                                <a href="#">
                                    <div class="img-ref-img">
                                        <img src="'.$Path_Cover_Related . '/' . $Cover_Product_Related[2] . '" alt="" />
                                    </div>
                                    <div class="content-ref">
                                        <p>'.$Rows['HA_P_Name'].'</p>
                                        <p>'.number_format( $Rows['HA_P_Price'] , 2).'</p>
                                    </div>
                                </a>
                            </div>
                        ';
                    }
                ?>
                <!-- <div class="col-3 ref-all-content">
                    <div class="img-ref-img">
                        <img src="./IMG/6.jpg" alt="" />
                    </div>
                    <div class="content-ref">
                        <p>Name of product</p>
                        <p>40$</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>