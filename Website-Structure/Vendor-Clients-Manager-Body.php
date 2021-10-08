<div class="right-All-Clients Dasbored-content">
<table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;" >
        <thead >
            <tr >
                <th>ID</th>
                <th>Img</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Last Login</th>
                <th>Gender</th>
                <th>Purchase</th>
                <th style="display: none;">HA_U_Date_Created</th>
                <th style="display: none;">HA_U_Birthday</th>
                <th style="display: none;">HA_U_Country</th>
                <th style="display: none;">HA_U_ZIP_Code</th>
                <th style="display: none;">HA_U_Address</th>
                <th style="display: none;">HA_U_Mobile_Number</th>
                <th style="display: none;">HA_U_Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php
                if ($Count_Clients_Info > 0) {
                    while ($Rows = mysqli_fetch_array($Result_Clients_Info)) {
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
                            <tr class="t-body" >
                                <td>'.$Rows['HA_U_ID'].'</td>
                                <td class="IMG-DATABASE"><img src="'.$Profile_Img.'" alt="'.$Rows['HA_U_Username'].'"/></td>
                                <td class="Username-Edit-Module">'.$Rows['HA_U_Username'] .'</td>
                                <td class="FullName-Edit-Module">'.$Rows['HA_U_First_Name'] . ' ' . $Rows['HA_U_Second_Name'] . ' ' . $Rows['HA_U_Last_Name'] . '</td>
                                <td class="Status-Edit-Status">'.$Rows['HA_U_User_Status'].'</td>
                                <td class="">'.$Rows['HA_U_Last_Login'].'</td>
                                <td class="Date-Created">'.$Rows['HA_U_Gender'].'</td>
                                <td class="HA-U-Purchase">'.number_format((int)$Rows['HA_U_Purchase'],2).'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Date_Created'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Birthday'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Country'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_ZIP_Code'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Address'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Mobile_Number'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Email'].'</td>
                                <td class="last-Action" >
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
                <th>Img</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Last Login</th>
                <th>Gender</th>
                <th>Purchase</th>
                <th style="display: none;">HA_U_Date_Created</th>
                <th style="display: none;">HA_U_Birthday</th>
                <th style="display: none;">HA_U_Country</th>
                <th style="display: none;">HA_U_ZIP_Code</th>
                <th style="display: none;">HA_U_Address</th>
                <th style="display: none;">HA_U_Mobile_Number</th>
                <th style="display: none;">HA_U_Email</th>
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
                    <li>FullName     : <span id="view-Details-show-FullName"></span></li>
                    <li>Status       : <span id="view-Details-show-Status"></span></li>
                    <li>Date_Created : <span id="view-Details-show-Date-Created"></span></li>
                    <li>Purchases    : <span id="view-Details-show-Purchases"></span></li>
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
                <input type="text" name="Input_Username" class="form-control" id="Edit-Username" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" name="Input_First_Name" class="form-control" id="Edit-FullName" aria-describedby="emailHelp" placeholder="FullName">
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
            <div class="form-group">
            <label for="upload-photo" class="label form-control"> Upload Your Image...</label>
                <input type="file" name="photo" id="upload-photo" class="label-input"/>
            </div>
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-clients">Edit</button>
        </form>
    </div>
</div>