<div class="Content-table right-catagroy">
<h3 style="text-align: center;"> Category List </h3>
<div class="Add-Catagroy">
    <button type="button" class="btn btn-primary" data-Catagroy = ".add-catgroy-from" id="Add">Add Catagoy</button>
</div>

<div class="add-catgroy-from remove-Delete">
        <form class="Form-Add-catgroy" action="" method="POST">
            <div class="form-group">
                <label for="Name catgroy">Catgaroy Name</label>
                <input type="text" name="Input_Category_Name" class="form-control" id="exampleInputPassword1" placeholder="Name catgroy">
            </div>
            
            <div class="form-group">
            <input type="checkbox" name="Checkbox" value="Take_Child" id="chech">
            <label for="Parent-cataroy">Parent Catgaroy</label>
            <select name="Parent_ID" class="form-control" id="Parent-cataroy" disabled>
                <option value="">Choice..</option>
                <?php
                    if ($Count_Category_Parent > 0) {
                        while ($Rows = mysqli_fetch_array($Result_Category_Parent)) {
                            echo '<option value="'.$Rows['HA_C_L_ID'].'">'.$Rows['HA_C_L_Category_Name'].'</option>';
                        }
                    }
                ?>
            </select>
            </div>
            <button type="submit" name="BTN_Insert_Category" class="Add-catgroys">Add Catgroy</button>
            <button type="button"  class="btn btn-danger" id="Delete-Catgroy" data-Catagroy = ".add-catgroy-from">Cancel Catgroy</button>
        </form>
    </div>
    <?php
    foreach ($Alert_Message as $value) {
        echo $value;
    }
?>
<table id="example" class="table table-striped table-bordered" style="width:100%;text-align:center;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Parent</th>
                <th>Category Child</th>
                <th>Count Product</th>
                <th>Count Sales</th>
                <th>Count Returns</th>
                <th>User Created</th>
                <th>Date Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($Count_Category_List > 0) {
                    $id= 0;
                    while ($Rows = mysqli_fetch_array($Result_Category_List)) {
                        $SQL_Get_Parent_Name = 'SELECT HA_C_L_Category_Name FROM ha_category_list WHERE HA_C_L_ID = "'.$Rows['HA_C_L_Parent_ID'].'"';
                        $Result_Get_Parent_Name = mysqli_query($Connection,$SQL_Get_Parent_Name);
                        $Row_Get_Parent_Name  = mysqli_fetch_array($Result_Get_Parent_Name, MYSQLI_ASSOC);  
                        // User Name Crated
                        $SQL_Get_Username= 'SELECT HA_U_Username FROM ha_users WHERE HA_U_ID = "'.$Rows['HA_C_L_User_ID_Created'].'"';
                        $Result_Get_Username = mysqli_query($Connection,$SQL_Get_Username);
                        $Row_Get_Username = mysqli_fetch_array($Result_Get_Username, MYSQLI_ASSOC);  
                        echo '
                            <tr class="t-body">
                                <td>'.$Rows['HA_C_L_ID'].'</td>
                                <td>'.$Row_Get_Parent_Name['HA_C_L_Category_Name'].'</td>
                                <td>'.$Rows['HA_C_L_Category_Name'].'</td>
                                <td>'.$Rows['HA_C_L_Count_Products'].'</td>
                                <td>'.$Rows['HA_C_L_Count_Sales'].'</td>
                                <td>'.$Rows['HA_C_L_Count_Returns'].'</td>
                                <td>'.$Row_Get_Username['HA_U_Username'].'</td>
                                <td>'.$Rows['HA_C_L_Date_Created'] . ' ' . $Rows['HA_C_L_Time_Created'] . '</td>
                                <td class="last-Action">
                                    <button type="button" class="Trash" data-module=".question-delete-row" id="TD'.$id.'" onclick="clickhere(this.id)"> <i class="fas fa-trash-alt"></i> </button>
                                    <button type="button" class="Edit" data-module=".Edit-row" id="-T'.$id.'" onclick="clickhere(this.id)"> <i class="far fa-edit"></i> </button>
                                    <button type="button" class="View" data-module=".View-row" id="T'.$id.'" onclick="clickhere(this.id)"> <i class="far fa-eye"></i> </button>
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
                <th>ID</th>
                <th>Category Parent</th>
                <th>Category Child</th>
                <th>Count Product</th>
                <th>Count Sales</th>
                <th>Count Returns</th>
                <th>User Created</th>
                <th>Date Created</th>
                <th>Actions</th>
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
    <div class="View-row remove-Delete">
        <div class="View-row-Details">
            <div class="View-cancel cancel-Dashbored"> <i class="fas fa-times"></i> </div>
            <div class="Image-View">
                <img  alt="IMG/emp_default.jpg" id="view-Details-show-IMG"/>
            </div>
            <div class="Deatils-View">
                <ul>
                    <li>ID                  : <span id="view-Details-show-ID"></span></li>
                    <li>Parent Ctagroy Name : <span id="view-Details-show-Ctagroy"></span></li>
                    <li>Child Ctagroy Name  : <span id="view-Details-show-Child"></span></li>
                    <li>Cound Products      : <span id="view-Details-show-Products"></span></li>
                    <li>Count Sales         : <span id="view-Details-show-Sales"></span></li>
                    <li>Count_Returns       : <span id="view-Details-show-Returns"></span></li>
                    <li>User Created        : <span id="view-Details-show-Created"></span></li>
                    <li>Date Created        : <span id="view-Details-show-Date"></span></li>
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
                <input type="text" name="Input_Username" class="form-control" id="Edit-parent" aria-describedby="emailHelp" placeholder="parent Catagroy">
            </div>
            <div class="form-group">
                <input type="text" name="Input-FullName" class="form-control" id="Edit-Chiled" aria-describedby="emailHelp" placeholder="Chiled Catagroy">
            </div>
            <div class="form-group">
                <input type="text" name="Input-FullName" class="form-control" id="Edit-user" aria-describedby="emailHelp" placeholder="User created">
            </div>
            <div class="form-group">
              <select name="Input-Status" class="form-control" id="ID">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
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
