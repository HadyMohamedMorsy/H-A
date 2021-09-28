<div class="right-All-users Dasbored-content">
    <table id="Seller" class="table table-striped table-bordered" style="width:100%">
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
        <tbody>
            <?php
                if ($Count_Seller_Info > 0) {
                    while ($Rows = mysqli_fetch_array($Result_Seller_Info)) {
                        // echo $Rows['HA_U_Username'];
                        echo '
                            <tr class="t-body" style="text-align: center;">
                            <td>'.$Rows['HA_U_ID'].'</td>
                            <td><img src="IMG/User-Profile-Picture/[User-ID='.$Rows['HA_U_ID'].']/image.jpg" alt="Img" style="width:50px"/></td>
                            <td>'.$Rows['HA_U_Username'] .'</td>
                            <td>'.$Rows['HA_U_First_Name'] . ' ' . $Rows['HA_U_Second_Name'] . ' ' . $Rows['HA_U_Last_Name'] . '</td>
                            <td>'.$Rows['HA_U_User_Status'].'</td>
                            <td>'.$Rows['HA_U_Date_Created'].'</td>
                            <td>$ '.number_format($Rows['HA_U_Sales']).'</td>
                            <td>'.$Rows['HA_U_Last_Login'].'</td>
                            <td class="last-Action" style="text-align: center;">
                                <a href="#" class="Trash" data-users=".Delete-user"> <i class="fas fa-trash-alt"></i> </a>
                                <a href="#" class="Edit" data-users=".Edit-username"> <i class="far fa-edit"></i> </a>
                                <a href="#" class="View" data-users=".View-User"> <i class="far fa-eye"></i> </a>
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

    <div class="Delete-user remove-Delete">
        <div class="Delete-user-question">
            <h4>Are You Sure To Delete This ?</h4>
            <button class="btn btn-danger"> Yes </button>
            <button class="btn btn-dark No-user cancel-Dashbored">  NO  </button>
        </div>
    </div>

    <div class="View-User remove-Delete">
        <div class="View-User-Details">
            <div class="View-cancel cancel-Dashbored"> <i class="fas fa-times"></i> </div>
            <div class="Image-View">
                <img src="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" />
            </div>
            <div class="Deatils-View">
                <ul>
                    <li>Name : <span>Ashton Cox</span></li>
                    <li>Postion : <span>Junior Technical Author</span></li>
                    <li>Office : <span>San Francisco</span></li>
                    <li>Age : <span>23</span></li>
                    <li>Start date : <span>2009/01/12</span></li>
                    <li>Salary : <span>$86,000</span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="Edit-username remove-Delete">
        <form class="Edit-user" action="" method="POST">
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
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-user">Edit</button>
        </form>
    </div>
</div>