
<div class="Content-table">
    <table id="example" class="table table-striped table-bordered display nowrap" collspacing="0" width="100%" style="width:100%;text-align;">
        <thead>
            <tr class="header-table">
                <th>ID</th>
                <th>Img</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Last Login</th>
                <th>Purchase</th>
                <th style="display: none;">First_Name</th>
                <th style="display: none;">Second_Name</th>
                <th style="display: none;">Last_Name</th>
                <th style="display: none;">Date_Created</th>
                <th style="display: none;">Birthday</th>
                <th style="display: none;">Country</th>
                <th style="display: none;">ZIP_Code</th>
                <th style="display: none;">Address</th>
                <th style="display: none;">Mobile_Number</th>
                <th style="display: none;">Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php
                if ($Count_Clients_Info > 0) {
                    $id = 0;
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
                        if ($Rows['HA_U_User_Status'] == 'Pending') {
                            $BTN_Active = '<button type ="button" class="Done" data-module=".Done-row" id="A'.$Rows['HA_U_ID'].'" onclick= "clickhere(this.id)"> <i class="fas fa-check-circle"></i></button>';
                        }else {
                            $BTN_Active = '';
                        }
                        if ($Rows['HA_U_User_Status'] !== 'Deactivated') {
                            $BTN_Deactivate = '<button type ="button" class="Trash" data-module=".question-delete-row" id="D'.$Rows['HA_U_ID'].'" onclick= "clickhere(this.id)"> <i class="fas fa-trash-alt"></i> </button>';
                        }else {
                            $BTN_Deactivate = '';
                        }
                        echo '
                            <tr class="t-body" style="text-align: center;" id="T_Row_'.$Rows['HA_U_ID'].'">
                                <td>'.$Rows['HA_U_ID'].'</td>
                                <td class="IMG-DATABASE"><img src="'.$Profile_Img.'" alt="'.$Rows['HA_U_Username'].'"/></td>
                                <td class="Username-Edit-Module">'.$Rows['HA_U_Username'] .'</td>
                                <td class="FullName-Edit-Module">'.$Rows['HA_U_First_Name'] . ' ' . $Rows['HA_U_Second_Name'] . ' ' . $Rows['HA_U_Last_Name'] . '</td>
                                <td class="Date-Created">'.$Rows['HA_U_Gender'].'</td>
                                <td class="Status-Edit-Status">'.$Rows['HA_U_User_Status'].'</td>
                                <td class="">'.$Rows['HA_U_Last_Login'].'</td>
                                <td class="HA-U-Purchase">'.number_format((int)$Rows['HA_U_Purchase'],2).'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_First_Name'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Second_Name'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Last_Name'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Date_Created'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Birthday'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Country'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_ZIP_Code'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Address'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Mobile_Number'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Email'].'</td>
                                <td class="last-Action" >
                                    <button type ="button" class="View" data-module=".View-row" id="T'.$id.'" onclick= "clickhere(this.id)"> <i class="far fa-eye"></i> </button>
                                    <button type ="button" class="Edit" data-module=".Edit-row" id="-T'.$id.'" onclick= "clickhere(this.id)"> <i class="far fa-edit"></i> </button>
                                    '.$BTN_Deactivate.'
                                    '.$BTN_Active.'
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
                <th>Img</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Last Login</th>
                <th>Gender</th>
                <th>Purchase</th>
                <th style="display: none;">First_Name</th>
                <th style="display: none;">Second_Name</th>
                <th style="display: none;">Last_Name</th>
                <th style="display: none;">Date_Created</th>
                <th style="display: none;">Birthday</th>
                <th style="display: none;">Country</th>
                <th style="display: none;">ZIP_Code</th>
                <th style="display: none;">Address</th>
                <th style="display: none;">Mobile_Number</th>
                <th style="display: none;">Email</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <div style=" margin-bottom:30px;"></div>
    <?php
    foreach ($Alert_Message as  $value) {
        echo $value;
    }
?>
    <div class="question-delete-row remove-Delete">
        <form class="Delete-question" >
            <input type="number" hidden id="hiddenDelete" />
            <h4 id="question"></h4>
            <button type="button" id="BTN_Deactivate_User" class="btn btn-danger cancel-Dashbored"> Yes </button>
            <button type="button" class="btn btn-dark No-clients cancel-Dashbored">  NO  </button>
        </form>
    </div>
    <div class="Done-row remove-Delete">
        <form class="Done-question">
            <input type="number" name="Active_ID" hidden id="DoneDelete" />
            <h4 id="Done"></h4>
            <button type="button" id="BTN_Active_User" class="btn btn-success cancel-Dashbored"> Yes </button>
            <button type="button" class="btn btn-dark No-user cancel-Dashbored">  NO  </button>
        </form>
    </div>
    <div class="View-row remove-Delete">
        <div class="View-row-Details">
            <div class="View-cancel cancel-Dashbored"> <i class="fas fa-times"></i> </div>
            <div class="Image-View">
                <img alt="IMG/emp_default.jpg" id="view-Details-show-IMG" />
            </div>
            <div class="Deatils-View">
                <ul class="view-here">
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
            <input type="text" name="ID" class="form-control" id="Edit-ID" aria-describedby="emailHelp" placeholder="ID" hidden>
            <div class="form-group">
                <input type="text" name="Input_Username" class="form-control" id="Edit-Username" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" name="Input_ZIP" class="form-control" id="Edit-ZIP" aria-describedby="emailHelp" placeholder="ZIP">
            </div>
            <div class="form-group">
                <textarea type="text" name="Input_Address" class="form-control" id="Edit-Address" aria-describedby="emailHelp" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="Input_Mobile_Number" class="form-control" id="Edit-Mobile-Number" aria-describedby="emailHelp" placeholder="Mobile_Number">
            </div>
            <div class="form-group">
                <input type="email" name="Input_Email" class="form-control" id="Edit-Email" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" name="Input_First_Name" class="form-control" id="Edit-First-name" aria-describedby="emailHelp" placeholder="First Nmae">
            </div>
            <div class="form-group">
                <input type="text" name="Input_First_Name" class="form-control" id="Edit-Secound-name" aria-describedby="emailHelp" placeholder="Secound Name">
            </div>
            <div class="form-group">
                <input type="text" name="Input_First_Name" class="form-control" id="Edit-Last-name" aria-describedby="emailHelp" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="date" name="Input_Birthday" class="form-control" id="Edit-Birthday" aria-describedby="emailHelp" placeholder="Birthday">
            </div>
            <div class="form-group">
                <input type="text" name="Input_Country" class="form-control" id="Edit-Country" aria-describedby="emailHelp" placeholder="number">
            </div>
            <div class="form-group">
                <select name="Input_Gender" class="form-control" id="Gender">
                        <option value="" disabled>Gender..</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <select name="Input_Status" class="form-control" id="Status">
                        <option value="" disabled>Status..</option>
                        <option value="Active">Active</option>
                        <option value="Deactivated">Deactivate</option>
                        <option value="Pending">Pending</option>
                        <option value="Suspended">Suspended</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="upload-photo" class="label form-control"> Upload Your Image...</label>
                <input type="file" name="photo" id="upload-photo" class="label-input" />
            </div> -->
            <button type="submit" name="BTN_Edit_Profile" class="btn form-control Edit-Prfile-clients">Edit Profile</button>
        </form>
    </div>
</div>
