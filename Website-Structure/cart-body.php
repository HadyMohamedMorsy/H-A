<div class="cart-items">
    <h1 class="page-title" itemprop="name headline">Cart</h1>
</div>
<div class="cheack-price container">
    <div class="list">
        <div class="content-parent row">
            <div class="content-grid col-lg-7">
                <?php
                    $Subtotal = 0;
                    if ($Count_Product_In_Cart > 0) {
                        while ($Rows = mysqli_fetch_array($Result_Product_In_Cart)) {
                            $SQL_Products_List = 'SELECT * FROM ha_products WHERE HA_P_ID = "'.$Rows['HA_C_Product_ID'].'"';
                            $Result_Products_List = mysqli_query($Connection,$SQL_Products_List);
                            $Row_Products_List  = mysqli_fetch_array($Result_Products_List, MYSQLI_ASSOC);  
                            if ($Row_Products_List['HA_P_Status'] == 'Active') {
                                $Count_Products_List  = mysqli_num_rows($Result_Products_List);
                                $Path_Folder_Cover = 'IMG/Imges-Products/P_ID-'.$Row_Products_List['HA_P_ID'].'/P_ID-'.$Row_Products_List['HA_P_ID'].'-Cover';
                                $Cover_Img = scandir($Path_Folder_Cover);
                                echo '
                                    <div class="content-list">
                                        <img src="'.$Path_Folder_Cover . '/' . $Cover_Img[2] . '" alt="" />
                                        <div class="content-price">
                                            <p> '.$Row_Products_List['HA_P_Name'].'</p>
                                            <span>'.number_format( $Rows['HA_C_Unit_Price'],2).'</span>
                                        </div>
                                        <div class="plus-min">
                                            <span>+</span>
                                            <span>'.$Rows['HA_C_Qty'] .'</span>
                                            <span>-</span>
                                        </div>
                                        <div class="Total">
                                            <p>'.number_format($Rows['HA_C_Qty'] * $Rows['HA_C_Unit_Price'] , 2).'</p>
                                            <span>X</span>
                                        </div>
                                    </div>
                                ';
                                $Subtotal += ($Rows['HA_C_Qty'] * $Rows['HA_C_Unit_Price']);
                            }
                        }
                    }
                ?>
                <form class="code-discound">
                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                    <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                </form>
            </div>
            <div class="cheackout-prent col-lg-5">
                <form class="payment">
                    <div class="total">
                        <h2>Cart totals</h2>
                    </div>
                    <div class="total">
                        <h2> substotal </h2>
                        <span> $117.00 </span>
                    </div>
                    <div class="shipping">
                        <div>
                            <input type="radio" id="Free shipping" name="fav_language" value="Free shipping">   <label for="html">Free shipping</label>
                        </div>
                        <div>
                            <input type="radio" id="Flat Rate" name="fav_language" value="Flat Rate">   <label for="html">Flat Rate</label>
                        </div>
                        <div>
                            <span>Shipping to <span>CA</span></span>
                        </div>
                        <span class="price-subtotal">$10.00</span>
                        <div class="changer-address">
                            <span><i class="far fa-compass"></i><span>Change address</span> <span><i class="fas fa-chevron-down"></i></span></span>
                            <div class="change">
                                <select class="form-control">
                                        <option>Large select</option>
                                    </select>
                                <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                <input type="text" name="fav_language" class="form-control" placeholder="city" />
                                <input type="number" name="fav_language" class="form-control" placeholder="zip" />
                                <button type="button"> Update </button>
                            </div>
                            <div class="total-all">
                                <h2> Total </h2>
                                <span> $117.00 </span>
                            </div>
                            <ul class="choose-payment">
                                <li class="wc_payment">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="">
                                    <label for="payment_method_cod">
                                            Cash on delivery 	
                                        </label>
                                    <div class="payment_box payment_method_cod">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </li>
                                <li class="wc_payment paybal-link">
                                    <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal">
                                    <label for="payment_method_paypal">
                                            PayPal 
                                        </label>
                                    <img src="./IMG/paybal.jpg" alt="PayPal acceptance mark">
                                    <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="about_paypal">What is PayPal?</a>
                                </li>
                            </ul>
                            <div class="submit-price">
                                <button type="submit" class="form-control"> Place Order </button>
                            </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-form-confirm"></div>
</div>