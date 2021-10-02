<div class="right-add-projects Dasbored-content">
    <h3 style="text-align: center;"> Add Product </h3>
    <div class="add-Product-from">
        <form class="Form-Add-Product" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Product Name *</label>
                <input type="text" name="Input_Product_Name" class="form-control" id="Product_Name" placeholder="Product Name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Price *</label>
                <input type="text" name="Input_Product_Price" class="form-control" id="exampleInputPassword1" placeholder="Price" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Description *</label>
                <textarea name="Input_Product_Description" class="form-control" id="exampleInputPassword1" placeholder="Description"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Catagroy *</label>
                <select name="Product_Category_Value" class="form-control" id="exampleFormControlSelect1">
                    <option value="">Choice..</option>
                    <?php
                        if ($Count_Category_List > 0) {
                            while ($Rows = mysqli_fetch_array($Result_Category_List)) {
                                $SQL_Get_Parent_Name = 'SELECT HA_C_L_Category_Name FROM ha_category_list WHERE HA_C_L_ID = "'.$Rows['HA_C_L_Parent_ID'].'"';
                                $Result_Get_Parent_Name = mysqli_query($Connection,$SQL_Get_Parent_Name);
                                $Row_Get_Parent_Name  = mysqli_fetch_array($Result_Get_Parent_Name, MYSQLI_ASSOC);  
                                // User Name Crated
                                $SQL_Get_Username= 'SELECT HA_U_Username FROM ha_users WHERE HA_U_ID = "'.$Rows['HA_C_L_User_ID_Created'].'"';
                                $Result_Get_Username = mysqli_query($Connection,$SQL_Get_Username);
                                $Row_Get_Username = mysqli_fetch_array($Result_Get_Username, MYSQLI_ASSOC);  
                                echo '
                                    <option value="' . $Rows['HA_C_L_ID'] . '">'.$Row_Get_Parent_Name['HA_C_L_Category_Name'] . ' | ' . $Rows['HA_C_L_Category_Name'] . '</option>
                                ';
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Available Product Qty *</label>
                <input type="text" name="Input_Product_Qty" class="form-control" id="exampleInputPassword1" placeholder="Qty" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Alert Qty *</label>
                <input type="text" name="Input_Product_Alert_Qty" class="form-control" id="exampleInputPassword1" placeholder="Qty" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Available Product From Date *</label>
                <input type="datetime-local" name="Input_Product_Available_From_Date" class="form-control" id="exampleInputPassword1" placeholder="Date And Time" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Brand *</label>
                <input type="text" name="Input_Product_Brand" class="form-control" id="exampleInputPassword1" placeholder="Brand" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="upload-cover" class="label form-control"> Upload Product Cover IMG *</label>
                <input type="file" name="File_Product_Cover" id="upload-cover" class="label-input" />
            </div>
            <button type="submit" name="BTN_Add_Product" class="Add-Products">Add Products</button>
            <div class="form-group">
                <label for="upload-photo" class="label form-control"> Upload Product Imges.. *</label>
                <input type="file" name="File_Product_Imges" id="upload-photo" class="label-input"/>
            </div>
        </form>
    </div>
    <?php
        foreach ($Alert_Message as $value) {
            echo $value .'<br>';
        }
    ?>
</div>