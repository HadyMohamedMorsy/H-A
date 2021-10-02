<div class="right-All-Clients Dasbored-content">
<table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;">
        <thead >
            <tr>
                <th>ID</th>
                <th>IMG</th>
                <th>Name</th>
                <th>Catagroy</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
            <!-- ImgCover -->
                <?php
                    if ($Count_Products_List > 0) {
                        $ID = 1;
                        while ($Rows = mysqli_fetch_array($Result_Products_List)) {
                            $SQL_Get_Category_Name = 'SELECT HA_C_L_Category_Name FROM ha_category_list WHERE HA_C_L_ID = "'.$Rows['HA_P_Category_ID'].'"';
                            $Result_Get_Category_Name = mysqli_query($Connection,$SQL_Get_Category_Name);
                            $Row_Get_Category_Name  = mysqli_fetch_array($Result_Get_Category_Name, MYSQLI_ASSOC);  
                            $Path_Folder_Cover = 'IMG/Imges-Products/P_ID-'.$Rows['HA_P_ID'].'/P_ID-'.$Rows['HA_P_ID'].'-Cover';
                            $Cover_Img = scandir($Path_Folder_Cover); 
                            echo '
                                <tr class="t-body" id="T'.$ID.'">
                                    <td>'.$Rows['HA_P_ID'].'</td>
                                    <td><img src="'.$Path_Folder_Cover . '/' . $Cover_Img[2] . '" alt="Img" style="width:50px"/></td>
                                    <td>'.$Rows['HA_P_Name'].'</td>
                                    <td>'.$Row_Get_Category_Name['HA_C_L_Category_Name'].'</td>
                                    <td>'.$Rows['HA_P_Qty'].'</td>
                                    <td>'. number_format($Rows['HA_P_Price'] , 2).'</td>
                                    <td>'.$Rows['HA_P_Status'].'</td>
                                    <td class="last-Action">
                                    <a href="#" class="Trash" data-module=".question-delete-row"> <i class="fas fa-trash-alt"></i> </a>
                                    <a href="#" class="Edit" data-module=".Edit-row"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="View" data-module=".View-row"> <i class="far fa-eye"></i> </a>
                                    </td>
                                </tr>
                            ';
                            $ID += 3;
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
                <img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" />
            </div>
            <div class="Deatils-View">
                    <ul>
                        <li>Name          : <span>Ashton Cox</span></li>
                        <li>Postion       : <span>Junior Technical Author</span></li>
                        <li>Office        : <span>San Francisco</span></li>
                        <li>Age           : <span>23</span></li>
                        <li>Start date    : <span>2009/01/12</span></li>
                        <li>Salary        : <span>$86,000</span></li>
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
                <input type="text" name="Input_Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" name="Input_First_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Postion">
            </div>
            <div class="form-group">
                <input type="text" name="Input_Last_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Office">
            </div>
            <div class="form-group">
                <input type="Text" name="Input_Password" class="form-control" id="exampleInputPassword1" placeholder="Age">
            </div>
            <div class="form-group">
                <input type="text" name="Input_Re_Password" class="form-control" id="exampleInputPassword1" placeholder="Start date">
            </div>
            <div class="form-group">
                <input type="text" name="Input_Country" class="form-control" id="exampleInputPassword1" placeholder="Salary">
            </div>
            <div class="form-group">
            <label for="upload-photo" class="label form-control"> Upload Your Image...</label>
                <input type="file" name="photo" id="upload-photo" />
            </div>
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-clients">Edit</button>
        </form>
     </div>
</div>