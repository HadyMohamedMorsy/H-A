<div class="right-All-Clients Dasbored-content">
<table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;">
        <thead >
            <tr>
                <th>ID</th>
                <th>IMG</th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>

                <th>Name</th>
                <th>Catagroy</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbody"> 
            <!-- ImgCover -->
                <?php
                    if ($Count_Products_List > 0) {
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
                                    <td style="display:none">'.$Rows['HA_P_Alert_Qty'].'</td>
                                    <td style="display:none">'.$Rows['HA_P_Brand'].'</td>
                                    <td style="display:none">'.$Rows['HA_P_Available_From_Date'].'</td>
                                    <td style="display:none">'.$Rows['HA_P_Date_Created'] . ' ' . $Rows['HA_P_Time_Created'] .'</td>
                                    <td style="display:none">'.$Row_Get_Created_Info['HA_U_Username'].'</td>
                                    <td style="display:none">'.$Rows['HA_P_Description'].'</td>
                                    <td class="IMG-DATABASE"><img src="'.$Path_Folder_Cover . '/' . $Cover_Img[2] . '" alt="Img" style="width:50px"/></td>
                                    <td class="Username-Edit-Module">'.$Rows['HA_P_Name'].'</td>
                                    <td class="HA-C-L-Category-Name">'.$Row_Get_Category_Name['HA_C_L_Category_Name'].'</td>
                                    <td class="HA-P-Qty">'.$Rows['HA_P_Qty'].'</td>
                                    <td class="HA-P-Price">'. number_format($Rows['HA_P_Price'] , 2).'</td>
                                    <td class="HA-P-Status">'.$Rows['HA_P_Status'].'</td>
                                    <td class="last-Action">
                                    <a href="#" class="Trash" data-module=".question-delete-row"> <i class="fas fa-trash-alt"></i> </a>
                                    <a href="#" class="Edit" data-module=".Edit-row"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="View" data-module=".View-row"> <i class="far fa-eye"></i> </a>
                                    </td>
                                </tr>
                            ';
                        }
                    }
                ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>IMG</th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th>Name</th>
                <th>Catagroy</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <div class="question-delete-row remove-Delete">
        <form class="Delete-question">
            <h4>Are You Sure To Delete This ?</h4>
            <button class="btn btn-danger"> Yes   </button>
            <button class="btn btn-dark No-clients cancel-Dashbored">  NO  </button>
        </form>
    </div>

    <div class="View-row remove-Delete">
        <div class="View-row-Details">
            <div class="View-cancel cancel-Dashbored"> <i class="fas fa-times"></i> </div>
            <div class="Image-View">
                <img  alt="IMG/emp_default.jpg" id="view-Details-show-IMG"/>
            </div>
            <div class="Deatils-View">
                <ul>
                    <li>Name         : <span id="view-Details-show-name"></span></li>
                    <li>Catagroy     : <span id="view-Details-show-Catagroy"></span></li>
                    <li>QTY          : <span id="view-Details-show-Qty"></span></li>
                    <li>Price        : <span id="view-Details-show-Date-Price"></span></li>
                    <li>Status       : <span id="view-Details-show-Status"></span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="Edit-row remove-Delete">
    <form class="Edit-row-details" action="" method="POST">
            <div class="cancel-Dashbored Edit-cancel">
                <i class="fas fa-times"></i>
            </div>
            <h2>Edit Profile</h2>
            <div class="form-group">
                <input type="number" name="Input_Id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" hidden>
            </div>
            <div class="form-group">
                <input type="text" name="Input_Username" class="form-control" id="Edit-Username" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
            <select name="Input-Status" class="form-control" id="Catagroy-Name">
                    <option value="">car</option>
                    <option value="TV">TV</option>
                    <option value="watch">watch</option>
             </select>
            </div>
            <div class="form-group">
              <select name="Input-Status" class="form-control" id="Status">
                    <option value="">Status</option>
                    <option value="Active">Active</option>
                    <option value="UnActice">UnActice</option>
                    <option value="Pending">Pending</option>
                    <option value="Suspended">Suspended</option>
             </select>
            </div>
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-user">Edit</button>
        </form>
     </div>
</div>