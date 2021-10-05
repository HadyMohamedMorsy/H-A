<div class="right-catagroy Dasbored-content">
<h3 style="text-align: center;"> Category List </h3>

<table id="example" class="table table-striped table-bordered" style="width:100%;text-align:center;">
        <thead>
            <tr>
                <th>Category Parent</th>
                <th>Category Child</th>
                <th>Count Product</th>
                <th>Count Sales</th>
                <th>Count Returns</th>
                <th>User Created</th>
                <th>Date Created</th>
            </tr>
        </thead>
        <tbody>
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
                            <tr>
                                <td>'.$Row_Get_Parent_Name['HA_C_L_Category_Name'].'</td>
                                <td>'.$Rows['HA_C_L_Category_Name'].'</td>
                                <td>'.$Rows['HA_C_L_Count_Products'].'</td>
                                <td>'.$Rows['HA_C_L_Count_Sales'].'</td>
                                <td>'.$Rows['HA_C_L_Count_Returns'].'</td>
                                <td>'.$Row_Get_Username['HA_U_Username'].'</td>
                                <td>'.$Rows['HA_C_L_Date_Created'] . ' ' . $Rows['HA_C_L_Time_Created'] . '</td>
                            </tr>
                        ';
                    }
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Category Parent</th>
                <th>Category Child</th>
                <th>Count Product</th>
                <th>Count Sales</th>
                <th>Count Returns</th>
                <th>User Created</th>
                <th>Date Created</th>
            </tr>
        </tfoot>
</table>
<h3 style="text-align: center;"> Add Category </h3>
<div class="add-catgroy-from">
        <form class="Form-Add-catgroy" action="" method="POST">
            <div class="form-group">
                <label for="Name catgroy">Catgaroy Name</label>
                <input type="text" name="Input_Category_Name" class="form-control" id="exampleInputPassword1" placeholder="Name catgroy">
            </div>
            
            <div class="form-group">
            <input type="checkbox" name="Checkbox" value="Take_Child">
            <label for="exampleFormControlSelect1">Parent Catgaroy</label>
            <select name="Parent_ID" class="form-control" id="exampleFormControlSelect1" disabled>
                <option value="">Choice..</option>
                <?php
                    if ($Count_Category_Parent > 0) {
                        while ($Rows = mysqli_fetch_array($Result_Category_Parent)) {
                            echo '<option value="'.$Rows['HA_C_L_ID'].'">'.$Rows['HA_C_L_Category_Name'].'</option>';
                        }
                    }
                ?>
            </select>
            </div>
            <div class="form-group">
                <label for="upload-photo" class="label form-control"> Upload Your catgroy...</label>
                <input type="file" name="photo" id="upload-photo" class="label-input" disabled/>
            </div>
            <button type="submit" name="BTN_Insert_Category" class="Add-catgroys">Add catgroy</button>
        </form>
    </div>
    <?php
    foreach ($Alert_Message as $value) {
        echo $value;
    }
?>

</div>
