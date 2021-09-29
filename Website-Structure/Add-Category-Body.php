<div class="right-catagroy Dasbored-content">
<h3 style="text-align: center;"> Add Category </h3>
<div class="add-catgroy-from">
        <form class="Form-Add-catgroy" action="" method="POST">
            <div class="form-group">
                <label for="Name catgroy"> Child Name Catgaroy</label>
                <input type="text" name="Input_Category_Name" class="form-control" id="exampleInputPassword1" placeholder="Name catgroy">
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Parent Catgaroy</label>
            <select name="Parent_ID" class="form-control" id="exampleFormControlSelect1">
            <?php
                if ($Count_Category_Parent > 0) {
                    while ($Rows = mysqli_fetch_array($Result_Category_Parent)) {
                        echo '<option value="'.$Rows['HA_C_L_ID'].'">'.$Rows['HA_C_L_Name_Parent'].'</option>';
                    }
                }
            ?>
            </select>
            </div>
            <div class="form-group">
                <label for="upload-photo" class="label form-control"> Upload Your catgroy...</label>
                <input type="file" name="photo" id="upload-photo" />
            </div>
            <button type="submit" name="BTN_Insert_Category" class="Add-catgroys">Add catgroy</button>
        </form>
    </div>
    <?php
    foreach ($Alert_Message as $value) {
        echo $value;
    }
?>
</div>
