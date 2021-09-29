<div class="right-All-Clients Dasbored-content">
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
                        $SQL_Get_Parent_Name = 'SELECT HA_C_L_Name_Parent FROM ha_category_list WHERE HA_C_L_ID = "'.$Rows['HA_C_L_Parent_ID'].'"';
                        $Result_Get_Parent_Name = mysqli_query($Connection,$SQL_Get_Parent_Name);
                        $Row_Get_Parent_Name  = mysqli_fetch_array($Result_Get_Parent_Name, MYSQLI_ASSOC);  
                        // User Name Crated
                        $SQL_Get_Username= 'SELECT HA_U_Username FROM ha_users WHERE HA_U_ID = "'.$Rows['HA_C_L_User_ID_Created'].'"';
                        $Result_Get_Username = mysqli_query($Connection,$SQL_Get_Username);
                        $Row_Get_Username = mysqli_fetch_array($Result_Get_Username, MYSQLI_ASSOC);  
                        echo '
                            <tr>
                                <td>'.$Row_Get_Parent_Name['HA_C_L_Name_Parent'].'</td>
                                <td>'.$Rows['HA_C_L_Name_Child'].'</td>
                                <td>'.$Rows['HA_C_L_Count_Products'].'</td>
                                <td>'.$Rows['HA_C_L_Count_Sales'].'</td>
                                <td>'.$Rows['HA_C_L_Count_Returns'].'</td>
                                <td>'.$Row_Get_Username['HA_U_Username'].'</td>
                                <td>'.$Rows['HA_C_L_Date_Created'].'</td>
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
</div>