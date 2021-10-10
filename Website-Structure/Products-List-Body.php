<div class="right-All-Clients Dasbored-content">
    <table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;">
        <thead>
            <tr>
                <th>ID</th>
                <th>IMG</th>
                <th>Name</th>
                <th>Catagroy</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Status</th>
                <th style="display: none;">ID Category</th>
                <th style="display: none;">Alert Qty</th>
                <th style="display: none;">Brand</th>
                <th style="display: none;">Available From Date</th>
                <th style="display: none;">Date And Time Created</th>
                <th style="display: none;">User Created</th>
                <th style="display: none;">Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <!-- ImgCover -->
            <?php
                    if ($Count_Products_List > 0) {
                        $id = 0;
                        while ($Rows = mysqli_fetch_array($Result_Products_List)) {
                            $SQL_Get_Category_Name = 'SELECT HA_C_L_Category_Name FROM ha_category_list WHERE HA_C_L_ID = "'.$Rows['HA_P_Category_ID'].'"';
                            $Result_Get_Category_Name = mysqli_query($Connection,$SQL_Get_Category_Name);
                            $Row_Get_Category_Name  = mysqli_fetch_array($Result_Get_Category_Name, MYSQLI_ASSOC);  
                            $Path_Folder_Cover = 'IMG/Imges-Products/P_ID-'.$Rows['HA_P_ID'].'/P_ID-'.$Rows['HA_P_ID'].'-Cover';
                            $Cover_Img = scandir($Path_Folder_Cover); 
                            // Get User Created Info
                            $SQL_Get_Created_Info = 'SELECT HA_U_Username FROM ha_users WHERE HA_U_ID = "'.$Rows['HA_P_User_ID_Created'].'"';
                            $Result_Get_Created_Info= mysqli_query($Connection,$SQL_Get_Created_Info);
                            $Row_Get_Created_Info = mysqli_fetch_array($Result_Get_Created_Info, MYSQLI_ASSOC);  
                            echo '
                                <tr class="t-body" >
                                    <td>'.$Rows['HA_P_ID'].'</td>
                                    <td class="IMG-DATABASE"><img src="'.$Path_Folder_Cover . '/' . $Cover_Img[2] . '" alt="Img"/></td>
                                    <td class="Username-Edit-Module">'.$Rows['HA_P_Name'].'</td>
                                    <td >'.$Row_Get_Category_Name['HA_C_L_Category_Name'].'</td>
                                    <td class="HA-P-Qty">'.$Rows['HA_P_Qty'].'</td>
                                    <td class="HA-P-Price">'. number_format($Rows['HA_P_Price'] , 2).'</td>
                                    <td class="HA-P-Status">'.$Rows['HA_P_Status'].'</td>
                                    <td style="display:none" class="HA-C-L-Category-Name">'.$Rows['HA_P_Category_ID'].'</td>
                                    <td style="display:none">'.$Rows['HA_P_Alert_Qty'].'</td>
                                    <td style="display:none">'.$Rows['HA_P_Brand'].'</td>
                                    <td style="display:none">'.$Rows['HA_P_Available_From_Date'].'</td>
                                    <td style="display:none">'.$Rows['HA_P_Date_Created'] . ' ' . $Rows['HA_P_Time_Created'] .'</td>
                                    <td style="display:none">'.$Row_Get_Created_Info['HA_U_Username'].'</td>
                                    <td style="display:none">'.$Rows['HA_P_Description'].'</td>
                                    <td class="last-Action">
                                        <button type="button" class="Trash" data-module=".question-delete-row" id="TD'.$id.'" onclick="clickhere(this.id)"> <i class="fas fa-trash-alt"></i> </button>
                                        <button type="button" class="Edit" data-module=".Edit-row" id="-T'.$id.'" onclick="clickhere(this.id)"> <i class="far fa-edit"></i> </button>
                                        <button type="button" class="View" data-module=".View-row" id="T'.$id.'" onclick="clickhere(this.id)"> <i class="far fa-eye"></i> </button>
                                    </td>
                                </tr>
                            ';
                            $id += 1;
                        }
                    }
                ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>IMG</th>
                <th>Name</th>
                <th>Catagroy</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Status</th>
                <th style="display: none;">ID Category</th>
                <th style="display: none;">Alert Qty</th>
                <th style="display: none;">Brand</th>
                <th style="display: none;">Available From Date</th>
                <th style="display: none;">Date And Time Created</th>
                <th style="display: none;">User Created</th>
                <th style="display: none;">Description</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <div class="question-delete-row remove-Delete">
        <form class="Delete-question">
            <h4 id="question"></h4>
            <submit class="btn btn-danger"> Yes   </submit>
            <button type = "button" class="btn btn-dark No-clients cancel-Dashbored">  NO  </button>
        </form>
    </div>

    <div class="View-row remove-Delete">
        <div class="View-row-Details">
            <div class="View-cancel cancel-Dashbored"> <i class="fas fa-times"></i> </div>
            <div class="Image-View">
                <img alt="IMG/emp_default.jpg" id="view-Details-show-IMG" />
            </div>
            <div class="Deatils-View">
                <ul>
                    <li>ID  : <span id="view-Details-show-ID"></span></li>
                    <li>ID Catagroy : <span id="view-Details-show-ID-catagory"></span></li>
                    <li>Name Product: <span id="view-Details-show-Name"></span></li>
                    <li>Name Catagroy : <span id="view-Details-show-Name-Catagroy"></span></li>
                    <li>QTY : <span id="view-Details-show-Qty"></span></li>
                    <li>Price : <span id="view-Details-show-Price"></span></li>
                    <li>Status : <span id="view-Details-show-Status"></span></li>
                    <li>Alert Qty : <span id="view-Details-show-Alert"></span></li>
                    <li>Brand : <span id="view-Details-show-Brand"></span></li>
                    <li>Avalible From Data : <span id="view-Details-show-Avalible"></span></li>
                    <li>Created : <span id="view-Details-show-Created"></span></li>
                    <li>UserName : <span id="view-Details-show-UserName"></span></li>
                    <li>Description : <span id="view-Details-show-Description"></span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="Edit-row remove-Delete">
        <form class="Edit-row-details" action="" method="POST">
            <div class="cancel-Dashbored Edit-cancel">
                <i class="fas fa-times"></i>
            </div>
            <h2>Edit Product</h2>
            <input type="number" name="Input_Id" class="form-control" id="Edit-id" aria-describedby="emailHelp" placeholder="ID" hidden>
            <input type="number" name="Input_Id" class="form-control" id="Edit-id-catagroy" aria-describedby="emailHelp" placeholder="ID-catagrot" hidden>
            <div class="form-group">
                <input type="text" name="Input_Id" class="form-control" id="Edit-Name" aria-describedby="emailHelp" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" name="Input_Id" class="form-control" id="Edit-Name-catagroy" aria-describedby="emailHelp" placeholder="Name Catagroy">
            </div>
            <div class="form-group">
                <input type="number" name="Input_Id" class="form-control" id="Edit-QTY" aria-describedby="emailHelp" placeholder="QTY">
            </div>
            <div class="form-group">
                <input type="number" name="Input_Username" class="form-control" id="Edit-price" aria-describedby="emailHelp" placeholder="price">
            </div>
            <div class="form-group">
                <input type="number" name="Input_Username" class="form-control" id="Edit-Alert" aria-describedby="emailHelp" placeholder="Alert">
            </div>
            <div class="form-group">
                <input type="text" name="Input_Username" class="form-control" id="Edit-Brand" aria-describedby="emailHelp" placeholder="Brand">
            </div>
            <div class="form-group">
                <input type="text" name="Input_Username" class="form-control" id="Edit-User-Created" aria-describedby="emailHelp" placeholder="User Created">
            </div>
            <div class="form-group">
                <input type="text" name="Input_Username" class="form-control" id="Edit-Description" aria-describedby="emailHelp" placeholder="Description">
            </div>
            <div class="form-group">
                <select name="Input-Status" class="form-control" id="Catagroy-Name">
                    <?php
                        if ($Count_Category_List > 0) {
                            while ($Rows = mysqli_fetch_array($Result_Category_List)) {
                                $SQL_Get_Parent_Name = 'SELECT HA_C_L_Category_Name FROM ha_category_list WHERE HA_C_L_ID = "'.$Rows['HA_C_L_Parent_ID'].'"';
                                $Result_Get_Parent_Name = mysqli_query($Connection,$SQL_Get_Parent_Name);
                                $Row_Get_Parent_Name  = mysqli_fetch_array($Result_Get_Parent_Name, MYSQLI_ASSOC);
                                echo '<option value="'.$Rows['HA_C_L_ID'].'"> '.$Row_Get_Parent_Name['HA_C_L_Category_Name'] . ' | ' . $Rows['HA_C_L_Category_Name'] .'</option>';
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <select name="Input-Status" class="form-control" id="Status">
                    <option value="Active">Active</option>
                    <option value="Deactivate">Deactivate </option>
                    <option value="Pending">Pending</option>
                    <option value="Suspended">Suspended</option>
                </select>
            </div>
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-user">Edit</button>
        </form>
    </div>
</div>