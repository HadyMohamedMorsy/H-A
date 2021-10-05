<div class="right-Edit Dasbored-content">
    <h3>Edit Profile</h3>
    <form class="contact-personal">
        <div class="left-con">
            <div class="parent-flex">
                <h5>Username And Connect</h5>
                <div class="form-group display-flex-data">
                    <div><i class="fas fa-user"></i></div><input type="text" name="_Value_12" value="<?php echo $Row_User_Info['HA_U_Username'];?>" class="form-control" aria-describedby="emailHelp" placeholder="Username..">
                </div>
                <div class="form-group display-flex-data">
                    <div>
                        <i class="fas fa-phone"></i></div>
                        <input type="text" name="" value="<?php if ($Row_User_Info['HA_U_Mobile_Number'] > 0 ) {echo '+2'.$Row_User_Info['HA_U_Mobile_Number'];}?>" class="form-control" placeholder="Phone..">
                    </div>
                <div class="form-group display-flex-data">
                    <div><i class="fas fa-envelope"></i></div><input type="email" name="" value="<?php echo $Row_User_Info['HA_U_Email'];?>" class="form-control" placeholder="Email..">
                </div>
                <button type="submit" name="BTN_Register" class="btn btn-primary">Update Contacts</button>
            </div>
            <div class="parent-flex">
                <h5>Change Password</h5>
                <div class="form-group display-flex-data">
                    <div><i class="fas fa-unlock"></i></div><input type="password" name="" class="form-control" aria-describedby="emailHelp" placeholder="Old Password">
                </div>
                <div class="form-group display-flex-data">
                    <div><i class="fas fa-unlock"></i></div><input type="password" name="" class="form-control" placeholder="New Password">
                </div>
                <div class="form-group display-flex-data">
                    <div><i class="fas fa-unlock"></i></div><input type="password" name="" class="form-control" placeholder="Re Password">
                </div>
                <button type="submit" name="BTN_Register" class="btn btn-primary">Update Password</button>
            </div>
        </div>
        <div class="right-con">
            <div>
                <h5>Profile Basics</h5>
                <div class="right-con-form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Frist Name</label>
                        <input type="text" value="<?php echo $Row_User_Info['HA_U_First_Name'];?>" class="form-control" aria-describedby="emailHelp" placeholder="Frist Name..">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Socend Name</label>
                        <input type="text" value="<?php echo $Row_User_Info['HA_U_Second_Name'];?>" class="form-control" placeholder="Socend Name..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input type="Text" value="<?php echo $Row_User_Info['HA_U_Last_Name'];?>" class="form-control" placeholder="Last Name..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Birthday </label>
                        <input type="date" value="<?php echo str_replace('/', '-', $Row_User_Info['HA_U_Birthday']) ; ?>" class="form-control" placeholder="Birthday..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Country</label>
                        <input type="text" value="<?php echo $Row_User_Info['HA_U_Country'];?>" class="form-control" placeholder="Country..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ZIP Code</label>
                        <input type="text" value="<?php echo $Row_User_Info['HA_U_ZIP_Code'];?>" class="form-control" placeholder="ZIP Code..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Address </label>
                        <textarea type="text" class="form-control" placeholder="Address.."><?php echo $Row_User_Info['HA_U_Address'];?></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label for="upload-photo" class="label form-control"> Upload Your Profile Image...</label>
                        <input type="file" name="photo" id="upload-photo" />
                    </div> -->
                </div>
                <button type="submit" name="BTN_Register" class="btn btn-primary">Update Profile Details</button>
            </div>
        </div>
    </form>
</div>