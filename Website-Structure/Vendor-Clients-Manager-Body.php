<div class="right-All-Clients Dasbored-content">
<table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;" >
        <thead >
            <tr >
                <th>ID</th>
                <th>Img</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Join Date</th>
                <th>Purchase</th>
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
                                <td class="IMG-DATABASE"><img src="'.$Profile_Img.'" alt="Img" style="width:50px"/></td>
                                <td class="Username-Edit-Module">'.$Rows['HA_U_Username'] .'</td>
                                <td class="FullName-Edit-Module">'.$Rows['HA_U_First_Name'] . ' ' . $Rows['HA_U_Second_Name'] . ' ' . $Rows['HA_U_Last_Name'] . '</td>
                                <td class="Status-Edit-Status">'.$Rows['HA_U_User_Status'].'</td>
                                <td class="Date-Created">'.$Rows['HA_U_Date_Created'].'</td>
                                <td class="HA-U-Purchase">'.number_format((int)$Rows['HA_U_Purchase'],2).'</td>
                                <td class="last-Action" >
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
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Img</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Join Date</th>
                <th>Purchase</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</div>