<div class="right-All-users Dasbored-content">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead style="text-align: center;">
            <tr>
                <th>ID</th>
                <th>Img</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Join Date</th>
                <th>Sales</th>
                <th>Last Login</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php
                if ($Count_Seller_Info > 0) {
                    while ($Rows = mysqli_fetch_array($Result_Seller_Info)) {
                        // echo $Rows['HA_U_Username'];
                        $Scan_Profile_Img = scandir('IMG/User-Profile-Picture/[User-ID='.$Rows['HA_U_ID'].']');
                        if (count($Scan_Profile_Img) == 2) {
                            if ($Rows['HA_U_Gender'] == 'Male') {
                                $Profile_Img = 'IMG/User-Profile-Picture/[Defult-Profile-IMG]/IMG-Defult-Male.jpg';
                            }elseif ($Rows['HA_U_Gender'] == 'Female') {
                                $Profile_Img = 'IMG/User-Profile-Picture/[Defult-Profile-IMG]/IMG-Defult-Female.jpg';
                            }
                        }else {
                            $Profile_Img =  'IMG/User-Profile-Picture/[User-ID='.$Rows['HA_U_ID'].']' . '/' . $Scan_Profile_Img[2];
                        }
                        echo '
                            <tr class="t-body" style="text-align: center;">
                            <td>'.$Rows['HA_U_ID'].'</td>
                            <td class="IMG-DATABASE"><img src="'.$Profile_Img.'" alt="Img" style="width:50px"/></td>
                            <td class="Username-Edit-Module">'.$Rows['HA_U_Username'] .'</td>
                            <td class="FullName-Edit-Module">'.$Rows['HA_U_First_Name'] . ' ' . $Rows['HA_U_Second_Name'] . ' ' . $Rows['HA_U_Last_Name'] . '</td>
                            <td class="Status-Edit-Status">'.$Rows['HA_U_User_Status'].'</td>
                            <td class="Date-Created">'.$Rows['HA_U_Date_Created'].'</td>
                            <td class="Sales">$ '.number_format($Rows['HA_U_Sales'] , 2).'</td>
                            <td class="Last-Login">'.$Rows['HA_U_Last_Login'].'</td>
                            <td class="last-Action" style="text-align: center;">
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
        <tfoot style="text-align: center;">
            <tr>
                <th>ID</th>
                <th>Img</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Join Date</th>
                <th>Sales</th>
                <th>Views</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

    <div class="question-delete-row remove-Delete">
        <form class="Delete-question">
            <h4>Are You Sure To Delete This ?</h4>
            <button class="btn btn-danger" type="submit"> Yes </button>
            <button class="btn btn-dark No-user cancel-Dashbored" type="submit">  NO  </button>
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
                    <li>FullName     : <span id="view-Details-show-FullName"></span></li>
                    <li>Status       : <span id="view-Details-show-Status"></span></li>
                    <li>Date_Created : <span id="view-Details-show-Date-Created"></span></li>
                    <li>Sales        : <span id="view-Details-show-Sales"></span></li>
                    <li>Last-Login   : <span id="view-Details-show-Last-Login"></span></li>
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
                <input type="text" name="Input-FullName" class="form-control" id="Edit-FullName" aria-describedby="emailHelp" placeholder="FullName">
            </div>
            <div class="form-group">
              <select name="Input-Status" class="form-control" id="Status">
                    <option value="">Status</option>
                    <option value="Active">Active</option>
                    <option value="UnActice">UnActice</option>
             </select>
            </div>
            <div class="form-group">
                <label for="upload-photo" class="label form-control"> Upload Your Image...</label>
                <input type="file" name="photo" id="upload-photo" class="label-input" />
            </div>
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-user">Edit</button>
        </form>
    </div>
</div>