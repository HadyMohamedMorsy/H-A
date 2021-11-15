<?php
    include('Datebase/Config.php');
    include('Datebase/DB_Login.php');
    include('Datebase/DB-Sign-Up.php');
    include('Datebase/DB-Product-In-Cart.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php
    $Page_Title = 'H_A';
    include ('Website-Structure/Header-Elemnts.php') ;
?>
    <!-- Start The Links Files -->
    <?php include ("Links CSS In Head Area.php"); ?>
    <link rel="stylesheet" href="CSS-Files/shop.css">
    <!-- End The Links Files -->
<body>

    <!-- Start The Header -->
    <?php include ("Website-Structure/Header.php"); ?>
    <!-- End The Header-->

    <?php include ("Website-Structure/product-Body.php"); ?>

    <!-- Start The Footer -->
    <?php include ("Website-Structure/Footer.php"); ?>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("Links Javascript In Footer Area.php"); ?>
    <script src="./Javascript-Files/product.js"></script>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>

<script>
    function funcId(Product_ID_To_Wishlist,ele){
        // alert(Product_ID_To_Wishlist);
        // Spiner Here 
        let spinnergrow = ele.parentElement.querySelector('.spinner-grow');
        spinnergrow.classList.add('visible');
        $.ajax({
            url: "Datebase/Action-By-Ajax/Wishlist-Mangement/Add-Product-To-Wishlist.php",
            type: "POST",
            data: {
                Product_ID: Product_ID_To_Wishlist
            },
            cache: false,
            success: function(Data ,Status ,XHR) {
                console.log(JSON.parse(Data));console.log(Status);console.log(XHR);
                if (XHR.status == 200) {
                    if (JSON.parse(Data).HA_W_Status == "Active") {
                        // Toggle The Hart After Make Action
                        spinnergrow.classList.remove('visible');
                        ele.firstElementChild.innerHTML = "<i class='fas fa-heart'></i>";
                        //alert('Status : ' + JSON.parse(Data).HA_W_Status + ' - ID : ' + Product_ID_To_Wishlist);
                        //  let row = document.querySelector('#T_Row_' + user_id).children[5];
                        //  row.innerHTML = JSON.parse(Data).User_Status;
                        //  document.querySelector('#A' + user_id).remove();
                        //  $("#Alert_Message").show('slow').delay(5000).fadeOut();
                        //  document.getElementById("Alert_Message").innerHTML = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left"><span aria-hidden="true">×</span></button><h4><i class="fas fa-check-circle"></i> نجاح العمليه </h4><hr> تم تغير الحاله الى نشط , و تفعيل المستخدم بنجاح </div>';
                    }else if(JSON.parse(Data).HA_W_Status == "Deleted"){
                        // Toggle The Hart After Make Action
                        spinnergrow.classList.remove('visible');
                        ele.firstElementChild.innerHTML = "<i class='far fa-heart'></i>";
                        //alert('Status : ' + JSON.parse(Data).HA_W_Status + ' - ID : ' + Product_ID_To_Wishlist);
                    }
                }
            }
        });
    }
let cartlisthere = document.querySelector('.cart-list');

let cartaction = document.querySelector('.cart');

let arrayCart = [];
let FinalArray = [];

let Addtocart;
let protecte = "sorry u dont have Items";
    // Add To Cart
    function funcIdcart(Product_ID_To_Cart,ele){
        
        let Image = ele.parentElement.firstElementChild.firstElementChild.getAttribute('src');

        let NamePrdouct = ele.parentElement.nextElementSibling.firstElementChild.firstElementChild.firstElementChild.innerHTML;
        let List =  document.querySelector('.all-content-cart');


        ele.firstElementChild.innerHTML = `<div class="spinner-border text-primary" role="status"> <span class="sr-only">Loading...</span>  </div>`;
        
        $.ajax({
            url: "Datebase/Action-By-Ajax/Cart-Mangement/Add-Product-To-Cart.php",
            type: "POST",
            data: {
                Product_ID: Product_ID_To_Cart
            },
            cache: false,
            success: function(Data ,Status ,XHR) {
                // console.log(JSON.parse(Data));console.log(Status);console.log(XHR);
                if (XHR.status == 200) {

                    ele.firstElementChild.innerHTML = `Add To Cart`;

                    cartaction.classList.add('actioncart');

                    cartlisthere.classList.add('actioncartlist');

                    function products (id,productName,price,Image, qty = 0){

                        this.id = Product_ID_To_Cart;

                        this.productName = productName;

                        this.price = price;

                        this.Image = Image;

                        this.qty = qty;
                        }


                    arrayCart.push(new products(Product_ID_To_Cart ,NamePrdouct, JSON.parse(Data).HA_C_Unit_Price,Image));

                    let protect = arrayCart.find((item)=>

                        item.id === Product_ID_To_Cart

                    );
                    let isprotectincart = arrayCart.some((i)=> i.id === protect.id);

                    if(isprotectincart){
                        
                        arrayCart = arrayCart.map((p) =>{

                        if(p.id === protect.id) p.qty += 1;

                        return p;

                        });
                    }

                    for(let i =0; i< arrayCart.length; i++){

                        if(arrayCart[i].qty > 1){

                            arrayCart.pop();

                            arrayCart.push(protect);

                            
                        }

                    }
                    function getUniqueListBy(arr, key) {

                        return [...new Map(arr.map(item => [item[key], item])).values()]
                    }

                    const arr1 = getUniqueListBy(arrayCart, 'id')

                        console.log(arrayCart);

                        console.log(protect);

                        console.log(arr1);




                    (Addtocart = function (Carts = []) {
                        let protectCart = Carts.map((item)=>{
                            return `
                            <div class="list">
                                <div class="product-list-cart">
                                    <div class="img-product-cart">
                                        <img src=${item.Image}>
                                    </div>
                                    <div class="content-product">
                                        <h6> ${item.productName} </h6>
                                        <span class="min"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg> </span> <span> ${item.qty} </span> <span class="plus"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> </span>
                                        <div class="cancel-cart cart-list-cancel">
                                            <svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="fas fa-times"></i> -->
                                        </div>
                                        <div class="price-cart">
                                            <span class="Number-format">${item.price}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;

                        });

                        List.innerHTML = protectCart.join("");

                        let subnumber =    document.querySelector('.sub-number');

                        let Numberformat = +document.querySelector('.Number-format').innerHTML;

                        if(Carts){

                            subnumber.innerHTML = parseInt(subnumber.innerHTML) + parseInt(Numberformat) + "$";

                        }

                    })(arr1|| protecte);


                  
                }
            }
        });
    }
    
</script>