<div class="right-All-Clients Dasbored-content">
<table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;" >
        <thead >
            <tr >
                <th>ID</th>
                <th>Img</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Last Login</th>
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
                        echo '
                            <tr class="t-body" >
                                <td>'.$Rows['HA_U_ID'].'</td>
                                <td class="IMG-DATABASE"><img src="'.$Profile_Img.'" alt="'.$Rows['HA_U_Username'].'"/></td>
                                <td class="Username-Edit-Module">'.$Rows['HA_U_Username'] .'</td>
                                <td class="FullName-Edit-Module">'.$Rows['HA_U_First_Name'] . ' ' . $Rows['HA_U_Second_Name'] . ' ' . $Rows['HA_U_Last_Name'] . '</td>
                                <td class="Date-Created">'.$Rows['HA_U_Gender'].'</td>
                                <td class="Status-Edit-Status">'.$Rows['HA_U_User_Status'].'</td>
                                <td class="">'.$Rows['HA_U_Last_Login'].'</td>
                                <td class="HA-U-Purchase">'.number_format((int)$Rows['HA_U_Purchase'],2).'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Date_Created'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Birthday'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Country'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_ZIP_Code'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Address'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Mobile_Number'].'</td>
                                <td class="" style="display: none;">'.$Rows['HA_U_Email'].'</td>
                                <td class="last-Action" >
                                    <button type="button"  class="Trash" data-module=".question-delete-row" id="TD'.$id.'" onclick="clickhere(this.id)"> <i class="fas fa-trash-alt"></i> </button>
                                    <button type="button"   class="Edit" data-module=".Edit-row" id="-T'.$id.'" onclick="clickhere(this.id)"> <i class="far fa-edit"></i> </button>
                                    <button type="button"  class="View" data-module=".View-row" id="T'.$id.'" onclick="clickhere(this.id)"> <i class="far fa-eye"></i> </button>
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
            <input type="number" hidden  id="hiddenDelete"/>
            <h4 id="question"></h4>
            <submit class="btn btn-danger"> Yes   </submit>
            <button type = "button" class="btn btn-dark No-clients cancel-Dashbored">  NO  </button>
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
                    <li>ID                       : <span id="view-Details-show-ID"></span></li>
                    <li>Username                 : <span id="view-Details-show-name"></span></li>
                    <li>Full Name                : <span id="view-Details-show-FullName"></span></li>
                    <li>Gender                   : <span id="view-Details-show-Gender"></span></li>
                    <li>Status                   : <span id="view-Details-show-Status"></span></li>
                    <li>Last Login               : <span id="view-Details-show-Login"></span></li>
                    <li>Purchase                 : <span id="view-Details-show-Purchase"></span></li>
                    <li>Created Login            : <span id="view-Details-show-Created"></span></li>
                    <li>Birthday                 : <span id="view-Details-show-Birthday"></span></li>
                    <li>Country                  : <span id="view-Details-show-Country"></span></li>
                    <li>ZIP_Code                 : <span id="view-Details-show-ZIP"></span></li>
                    <li>Address                  : <span id="view-Details-show-Address"></span></li>
                    <li>Mobile                   : <span id="view-Details-show-Mobile"></span></li>
                    <li>Email                    : <span id="view-Details-show-Email"></span></li>
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
            <input type="number" name="ID" class="form-control" id="Edit-ID" aria-describedby="emailHelp" placeholder="ID" hidden>
            <div class="form-group">
                <input type="text" name="Input_Username" class="form-control" id="Edit-Username" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="number" name="ZIP" class="form-control" id="Edit-ZIP" aria-describedby="emailHelp" placeholder="ZIP">
            </div>
            <div class="form-group">
                <input type="text" name="Address" class="form-control" id="Edit-Address" aria-describedby="emailHelp" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="number" name="Mobile-Number" class="form-control" id="Edit-Mobile-Number" aria-describedby="emailHelp" placeholder="Mobile_Number">
            </div>
            <div class="form-group">
                <input type="email" name="Email" class="form-control" id="Edit-Email" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" name="Input_First_Name" class="form-control" id="Edit-FullName" aria-describedby="emailHelp" placeholder="FullName">
            </div>
            <div class="form-group">
                <input type="date" name="Birthday" class="form-control" id="Edit-Birthday" aria-describedby="emailHelp" placeholder="Birthday">
            </div>
            <div class="form-group">
                <input type="text" name="country" class="form-control" id="Edit-Country" aria-describedby="emailHelp" placeholder="number">
            </div>
            <div class="form-group">
              <select name="Input-Gender" class="form-control" id="Gender">
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
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
            <div class="form-group">
            <label for="upload-photo" class="label form-control"> Upload Your Image...</label>
                <input type="file" name="photo" id="upload-photo" class="label-input"/>
            </div>
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-clients">Edit</button>
        </form>
    </div>
</div>