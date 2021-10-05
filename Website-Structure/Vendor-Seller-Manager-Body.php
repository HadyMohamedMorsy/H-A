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
                                <a href="Vendor-view.php" class="View" data-module=".View-row"> <i class="far fa-eye"></i> </a>
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

  
</div>