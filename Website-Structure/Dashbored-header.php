<div class="container-hady">
<aside>
    <div class="image-useres">
        <div class="image-user-content">
            <img src = "IMG/emp_default.jpg" alt="emp_default.jpg"/>
        </div>

        <h5>Name Of User Or Admin</h5>
    </div>
    <ul class="list-of-dashbored">
        <li><a href="http://localhost/H-A-main/Admin-system.php" class="Dashbored"> <i class="fas fa-home"></i> Dashbored</a></li>
        <li><a href="#"><i class="fas fa-user-tie" class="Edit-profile"></i>Edit Profile</a></li>
        <li><a href="#"><i class="fas fa-briefcase"></i>Projects</a></li>
        <li><a href="#"><i class="fas fa-briefcase"></i>Add Project</a></li>
        <li><a href="#"><i class="fas fa-briefcase"></i>Add Catogry</a></li>
        <li><a href="#"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
    </ul>
</aside>
<div class="right-admin">
    <div class="chart">
        <h3>Profile Views</h3>
        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
    </div>
    <div class="the-most-Views">
        <h3>Most Viewed Services</h3>
        <div class="content-most-views">
                <div class="content-v-image">
                    <img src="IMG/watch.png" alt="IMG/watch.png"/>
                </div>
                <div class="content-v-Details">
                    <h5>Name Of Product</h5>
                    <p><i class="far fa-clock"></i> 21/6/2015 <i class="far fa-eye"></i> 51</p>
                    <p>$0.00</p>
                </div>
        </div>
        <div class="content-most-views">
                <div class="content-v-image">
                    <img src="IMG/watch-2.jpg" alt="IMG/watch.png"/>
                </div>
                <div class="content-v-Details">
                    <h5>Name Of Product</h5>
                    <p><i class="far fa-clock"></i> 21/6/2015 <i class="far fa-eye"></i> 51</p>
                    <p>$0.00</p>
                </div>
        </div>
        <div class="content-most-views">
                <div class="content-v-image">
                    <img src="IMG/watch-4.jpg" alt="IMG/watch.png"/>
                </div>
                <div class="content-v-Details">
                    <h5>Name Of Product</h5>
                    <p><i class="far fa-clock"></i> 21/6/2015 <i class="far fa-eye"></i> 51</p>
                    <p>$0.00</p>
                </div>
        </div>
    </div>
</div>
<div class="right-Edit none-Dashbored">
    <h3>Edit Profile</h3>
    <form class="contact-personal">
        <div class="left-con">
            <div class="parent-flex">
                <h5>User Of Name</h5>
                <div class="form-group display-flex-data">
                    <div><i class="far fa-envelope"></i></div><input type="text" name="Input_Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                </div>
                <div class="form-group display-flex-data">
                    <div><i class="fas fa-phone"></i></div><input type="text" name="Input_Password" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                </div>
                <div class="form-group display-flex-data">
                   <div><i class="far fa-compass"></i></div><input type="text" name="Input_Password" class="form-control" id="exampleInputPassword1" placeholder="Location">
                </div>
            </div>
            <div class="parent-flex">
                <h5>Change Password</h5>
                <div class="form-group display-flex-data">
                    <div><i class="fas fa-unlock"></i></div><input type="password" name="Input_Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="old password">
                </div>
                <div class="form-group display-flex-data">
                    <div><i class="fas fa-unlock"></i></div><input type="password" name="Input_Password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                </div>
                <div class="form-group display-flex-data">
                   <div><i class="fas fa-unlock"></i></div><input type="password" name="Input_Password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                </div>
            </div>
        </div>
        <div class="right-con">
            <div>
                <h5>Profile Basics</h5>
                <div class="right-con-form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Display Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Display Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Gendr </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Gendr">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Language </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Language">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Location </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Language">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Profile Picture </label>
                        <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Language">
                    </div>

                </div>
                <button type="submit" name="BTN_Register" class="btn btn-primary">Edit Prfole</button>
            </div>
        </div>
    </form>
</div>      
</div>
</div>
