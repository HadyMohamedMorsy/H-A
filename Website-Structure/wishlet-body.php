<div class="Whislist">
    <h1 class="page-title" itemprop="name headline">Wishlist</h1>
</div>
<div class="cheack-Whishlist container">
        <div class="list">
            <div class="content-parent row">
                <div class="content-grid col-lg-12">
                    <?php
                        if ($Count_GET_My_Wishlist > 0 ) {
                            while ($Rows = mysqli_fetch_array($Result_GET_My_Wishlist)) {
                                $SQL_GET_Product_Info = 'SELECT * FROM ha_products WHERE HA_P_ID = "'.$Rows['HA_W_Product_ID'].'"';
                                $Result_GET_Product_Info = mysqli_query($Connection,$SQL_GET_Product_Info);
                                $Row_GET_Product_Info  = mysqli_fetch_array($Result_GET_Product_Info, MYSQLI_ASSOC);
                                if ($Row_GET_Product_Info['HA_P_Status'] == 'Active') {
                                    $Path_Folder_Cover = 'IMG/Imges-Products/P_ID-'.$Row_GET_Product_Info['HA_P_ID'].'/P_ID-'.$Row_GET_Product_Info['HA_P_ID'].'-Cover';
                                    $Cover_Img = scandir($Path_Folder_Cover); 
                                    echo '
                                    <div class="content-list">
                                        <img src="'.$Path_Folder_Cover . '/' . $Cover_Img[2] .'" alt=""/>
                                        <div class="content-price">
                                            <p> '. $Row_GET_Product_Info['HA_P_Name'].'</p>
                                            <span>$'.number_format($Row_GET_Product_Info['HA_P_Price'],2) .'</span>
                                        </div>
                                        <div class="button-cart">
                                            <div class="cancel">
                                                <i class="fas fa-times"></i>
                                            </div>
                                            <a class="Add-to-cart" id="${item.Product_ID}" onclick="funcIdcart(this.id , this)">
                                                <p> Add To Cart </p>
                                            </a>
                                        </div>
                                    </div>
                                ';
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="list-form-confirm"></div>
</div>