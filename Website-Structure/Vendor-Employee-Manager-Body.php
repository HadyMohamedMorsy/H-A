<div class="right-All-Employeres Dasbored-content">
<table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;" >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">IMG</th>
                <th scope="col">Username</th>
                <th scope="col">Full Name</th>
                <th scope="col">Status</th>
                <th scope="col">Join Date</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($Count_Employee_Info > 0) {
                    $id= 0;
                    while ($Rows = mysqli_fetch_array($Result_Employee_Info)) {
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
                                <td><img src="'.$Profile_Img.'" alt="Img" style="width:50px"/></td>
                                <td>'.$Rows['HA_U_Username'] .'</td>
                                <td>'.$Rows['HA_U_First_Name'] . ' ' . $Rows['HA_U_Second_Name'] . ' ' . $Rows['HA_U_Last_Name'] . '</td>
                                <td>'.$Rows['HA_U_User_Status'].'</td>
                                <td>'.$Rows['HA_U_Date_Created'].'</td>
                                <td>'.$Rows['HA_U_Email'].'</td>
                                <td class="last-Action">
                                    <button type="button" class="Trash" data-module=".question-delete-row" id="TD'.$id.'" onclick="clickhere(this.id)"> <i class="fas fa-trash-alt"></i> </button>
                                    <button type="button" class="Edit" data-module=".Edit-row" id="-T'.$id.'" onclick="clickhere(this.id)"> <i class="far fa-edit"></i> </button>
                                    <button type="button" class="View" data-module=".View-row" id="T'.$id.'" onclick="clickhere(this.id)"> <i class="far fa-eye"></i> </button>
                                    <button type ="button" class="Done" data-module=".Done-row" id="D'.$id.'" onclick= "clickhere(this.id)"> <i class="far fa-check-circle"></i></button>
                                </td>
                            </tr>
                        ';
                        $id +=1;
                    }
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">IMG</th>
                <th scope="col">Username</th>
                <th scope="col">Full Name</th>
                <th scope="col">Status</th>
                <th scope="col">Join Date</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </tfoot>
    </table>
    <div class="question-delete-row remove-Delete">
        <form class="Delete-question">
            <input type="number" hidden  id="hiddenDelete"/>
            <h4 id="question"></h4>
            <submit class="btn btn-danger" type="submit"> Yes </submit>
            <button type = "button" class="btn btn-dark No-user cancel-Dashbored" type="submit">  NO  </button>
        </form>
    </div>
    <div class="Done-row remove-Delete">
        <form class="Done-question">
            <input type="number" hidden  id="DoneDelete"/>
            <h4 id="Done"></h4>
            <submit class="btn btn-danger" type="submit"> Yes </submit>
            <button type = "button" class="btn btn-dark No-user cancel-Dashbored" type="submit">  NO  </button>
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
                    <li>ID           : <span id="view-Details-show-ID"></span></li>
                    <li>UserName     : <span id="view-Details-show-name"></span></li>
                    <li>FullName     : <span id="view-Details-show-FullName"></span></li>
                    <li>Status       : <span id="view-Details-show-Status"></span></li>
                    <li>Join Date    : <span id="view-Details-show-Date-Join"></span></li>
                    <li>Email        : <span id="view-Details-show-Email"></span></li>
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
            <input type="number" name="Input_Id" class="form-control" id="Edit-ID" aria-describedby="emailHelp" placeholder="ID" hidden>
            <div class="form-group">
                <input type="text" name="Input_Username" class="form-control" id="Edit-Username" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" name="Input-FullName" class="form-control" id="Edit-FullName" aria-describedby="emailHelp" placeholder="FullName">
            </div>
            <div class="form-group">
                <input type="text" name="Input-FullName" class="form-control" id="Edit-Email" aria-describedby="emailHelp" placeholder="Email">
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
                <input type="file" name="photo" id="upload-photo" class="label-input" />
            </div>
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-user">Edit</button>
        </form>
    </div>
</div>