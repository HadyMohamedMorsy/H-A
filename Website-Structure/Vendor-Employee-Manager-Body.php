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
            </tr>
        </thead>
        <tbody>
            <?php
                if ($Count_Employee_Info > 0) {
                    while ($Rows = mysqli_fetch_array($Result_Employee_Info)) {
                        // echo $Rows['HA_U_Username'];
                        echo '
                            <tr class="t-body" style="text-align: center;">
                                <td>'.$Rows['HA_U_ID'].'</td>
                                <td><img src="IMG/User-Profile-Picture/[User-ID='.$Rows['HA_U_ID'].']/image.jpg" alt="Img" style="width:50px"/></td>
                                <td>'.$Rows['HA_U_Username'] .'</td>
                                <td>'.$Rows['HA_U_First_Name'] . ' ' . $Rows['HA_U_Second_Name'] . ' ' . $Rows['HA_U_Last_Name'] . '</td>
                                <td>'.$Rows['HA_U_User_Status'].'</td>
                                <td>'.$Rows['HA_U_Date_Created'].'</td>
                                <td>'.$Rows['HA_U_Email'].'</td>
                            </tr>
                        ';
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
            </tr>
        </tfoot>
    </table>
</div>