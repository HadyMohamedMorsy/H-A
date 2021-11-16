<div class="container">
    <div class="slider-product">
        <div class="row">
            <div class="col-lg-8 Images-slider">
                <?php echo '<img src="'.$Path_Cover.'/'.$Cover_Product[2].'" alt="" />'?>
                <div class="right-arrow"> <i class="fas fa-chevron-right"></i> </div>
                <div class="left-arrow"> <i class="fas fa-chevron-left"></i> </div>
                <div class="slider-img">
                    <?php
                        foreach ($Imgs_Product as $value) {
                            if ($value < 1) continue;
                            echo '<div class="img-slider"> <img src="' . $Path_Imgs . '/' . $value .'"  alt="5" /> </div>';
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
                <h2> 2 reviews for Abstract Print Cotton Blouse </h2>
                <div class="comment">
                    <div class="user-image">
                        <img src="./IMG/5.jpg" alt="" />
                        <div class="content-user">
                            <p>Hady Mohamed</p>
                            <p class="time">15/8/2020</p>
                            <p class="description-comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores ex officia tempora. Itaque unde architecto magni commodi rem. Quas aliquam aut nihil eius qui soluta sequi fuga. Odit.</p>
                        </div>
                    </div>
                    <div class="user-image">
                        <img src="./IMG/5.jpg" alt="" />
                        <div class="content-user">
                            <p>Hady Mohamed</p>
                            <p class="time">15/8/2020</p>
                            <p class="description-comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores ex officia tempora. Itaque unde architecto magni commodi rem. Quas aliquam aut nihil eius qui soluta sequi fuga. Odit.</p>
                        </div>
                    </div>
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
    <div class="container-fluid">
        <div class="refrend-cattgroy">
            <h2> Related products </h2>
            <div class="row">
                <?php
                    while ($Rows = mysqli_fetch_array($Result_Related_Products)) {
                        $Path_Cover = 'IMG/Imges-Products/P_ID-' . $Rows['HA_P_ID'] . '/' . 'P_ID-' . $Rows['HA_P_ID'] . '-Cover';
                        $Cover_Product = scandir($Path_Cover);
                        $Path_Imgs = 'IMG/Imges-Products/P_ID-' . $Rows['HA_P_ID'] . '/' . 'P_ID-' . $Rows['HA_P_ID'] . '-IMGS';
                        $Imgs_Product = scandir($Path_Imgs);
                        echo '
                            <div class="col-3 ref-all-content mx-auto">
                                <div class="img-ref-img">
                                    <img src="'.$Path_Cover . '/' . $Cover_Product[2] . '" alt="" />
                                </div>
                                <div class="content-ref">
                                    <p>'.$Rows['HA_P_Name'].'</p>
                                    <p>'.number_format( $Rows['HA_P_Price'] , 2).'</p>
                                </div>
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