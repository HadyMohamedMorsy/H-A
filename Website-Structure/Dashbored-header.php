<div class="container-hady">
<aside>
    <div class="image-useres">
        <div class="image-user-content">
            <img src = "IMG/emp_default.jpg" alt="emp_default.jpg"/>
        </div>

        <h5>Name Of User Or Admin</h5>
    </div>
    <ul class="list-of-dashbored">
        <li><a href="Dashbored" class="Dashbored" data-right = ".right-admin"> <i class="fas fa-home"></i> Dashbored</a></li>
        <li><a href="Edit-profile" class="Edit-profile" data-right = ".right-Edit"><i class="fas fa-user-tie" class="Edit-profile"></i>Edit Profile</a></li>
        <li><a href="Projects" class="Projects" data-right = ".right-All-users"><i class="fas fa-briefcase"></i>Sellers on  Website</a></li>
        <li><a href="Projects" class="Clients" data-right = ".right-All-Clients"><i class="fas fa-briefcase"></i>Clients on  Website</a></li>
        <li><a href="Projects" class="Employeres" data-right = ".right-All-Employeres"><i class="fas fa-briefcase"></i>Employeres on  Website</a></li>
        <li><a href="Add Project" class="Add Project" data-right = ".right-add-projects"><i class="fas fa-briefcase"></i>Add Project</a></li>
        <li><a href="Add Catogry" class="Add Catogry" data-right = ".right-catagroy"><i class="fas fa-briefcase"></i>Add Catogry</a></li>
        <li><a href="Add LogOut" class="Add LogOut" data-right = ".right-logout"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
    </ul>
</aside>
<div class="right-admin Dasbored-content">
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
<div class="right-Edit Dasbored-content none-Dashbored">
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
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Postion</label>
                        <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Postion">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Office</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Office">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Gendr </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Gendr">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Age </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Age">
                    </div>
                    <div class="form-group">
                    <label for="upload-photo" class="label form-control"> Upload Your Image...</label>
                        <input type="file" name="photo" id="upload-photo" />
                    </div>

                </div>
                <button type="submit" name="BTN_Register" class="btn btn-primary">Edit Prfole</button>
            </div>
        </div>
    </form>
</div>
<div class="right-All-users Dasbored-content none-Dashbored">
<table id="Seller" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Img</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Actiones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="t-body">
                <td><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td class="last-Action">
                    <a href="#" class="Trash"data-users =".Delete-user"> <i class="fas fa-trash-alt"></i> </a>
                    <a href="#" class="Edit" data-users =".Edit-username"> <i class="far fa-edit"></i> </a>
                    <a href="#" class="View" data-users =".View-User"> <i class="far fa-eye"></i> </a>
                </td>
            </tr>
            <tr class="t-body">
                <td><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></td>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td class="last-Action">
                    <a href="#" class="Trash" data-users =".Delete-user"> <i class="fas fa-trash-alt"></i> </a>
                    <a href="#" class="Edit"  data-users =".Edit-username"> <i class="far fa-edit"></i> </a>
                    <a href="#" class="View"  data-users =".View-User"> <i class="far fa-eye"></i> </a>
                </td>
            </tr>
            <tr class="t-body">
                <td><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></td>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td class="last-Action">
                    <a href="#" class="Trash" data-users =".Delete-user"> <i class="fas fa-trash-alt"></i> </a>
                    <a href="#" class="Edit"  data-users =".Edit-username"> <i class="far fa-edit"></i> </a>
                    <a href="#" class="View"  data-users =".View-User"> <i class="far fa-eye"></i> </a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    <div class="Delete-user remove-Delete">
        <div class="Delete-user-question">
            <h4>Are You Sure To Delete This ?</h4>
            <button class="btn btn-danger"> Yes   </button>
            <button class="btn btn-dark No-user cancel-Dashbored">  NO  </button>
        </div>
    </div>

    <div class="View-User remove-Delete">
        <div class="View-User-Details">
            <div class="View-cancel cancel-Dashbored"> <i class="fas fa-times"></i> </div>
            <div class="Image-View">
                <img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" />
            </div>
            <div class="Deatils-View">
                    <ul>
                        <li>Name          : <span>Ashton Cox</span></li>
                        <li>Postion       : <span>Junior Technical Author</span></li>
                        <li>Office        : <span>San Francisco</span></li>
                        <li>Age           : <span>23</span></li>
                        <li>Start date    : <span>2009/01/12</span></li>
                        <li>Salary        : <span>$86,000</span></li>
                    </ul>
            </div>
        </div>
    </div>

    <div class="Edit-clients remove-Delete">
        <form class="Edit-clients" action="" method="POST">
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
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-clients">Edit</button>
        </form>
</div>
</div>
<div class="right-add-projects Dasbored-content none-Dashbored">
    <div class="add-Product-from">
        <h5> Add Product </h5>
        <form class="Form-Add-Product">
            <div class="form-group">
                <label for="Name Product"> Name Product</label>
                <input type="text" name="Input_Country" class="form-control" id="exampleInputPassword1" placeholder="Name Product">
            </div>
            <div class="form-group">
                <label for="Name Product">Brand</label>
                <input type="text" name="Input_Country" class="form-control" id="exampleInputPassword1" placeholder="Brand">
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Catagroy</label>
             <select class="form-control" id="exampleFormControlSelect1">
                <option>Phone</option>
                <option>Table</option>
                <option>gaming</option>
                <option>Loop</option>
                <option>note</option>
            </select>
            </div>
            <div class="form-group">
                <label for="Name Product">Product Price</label>
                <input type="text" name="Input_Country" class="form-control" id="exampleInputPassword1" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="upload-photo" class="label form-control"> Upload Your Product...</label>
                <input type="file" name="photo" id="upload-photo" />
            </div>
            <button type="submit" name="BTN_Register" class="Add-Products">Add Products</button>
        </form>
    </div>
</div>
<div class="right-catagroy Dasbored-content none-Dashbored">
<div class="add-catgroy-from">
        <h5> Add catgroy </h5>
        <form class="Form-Add-catgroy">
            <div class="form-group">
                <label for="Name catgroy"> Name catgroy</label>
                <input type="text" name="Input_Country" class="form-control" id="exampleInputPassword1" placeholder="Name catgroy">
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Parent Catgaroy</label>
             <select class="form-control" id="exampleFormControlSelect1">
                <option>Phone</option>
                <option>Table</option>
                <option>gaming</option>
                <option>Loop</option>
                <option>note</option>
            </select>
            </div>
            <div class="form-group">
                <label for="upload-photo" class="label form-control"> Upload Your catgroy...</label>
                <input type="file" name="photo" id="upload-photo" />
            </div>
            <button type="submit" name="BTN_Register" class="Add-catgroys">Add catgroy</button>
        </form>
    </div>
</div>
<div class="right-All-Clients Dasbored-content none-Dashbored">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Img</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Actiones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="t-body">
                <td><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td class="last-Action">
                    <a href="#" class="Trash"data-clients =".Delete-clients"> <i class="fas fa-trash-alt"></i> </a>
                    <a href="#" class="Edit" data-clients =".Edit-clients"> <i class="far fa-edit"></i> </a>
                    <a href="#" class="View" data-clients =".View-clients"> <i class="far fa-eye"></i> </a>
                </td>
            </tr>
            <tr class="t-body">
                <td><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></td>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td class="last-Action">
                    <a href="#" class="Trash" data-clients =".Delete-clients"> <i class="fas fa-trash-alt"></i> </a>
                    <a href="#" class="Edit"  data-clients =".Edit-clients"> <i class="far fa-edit"></i> </a>
                    <a href="#" class="View"  data-clients =".View-clients"> <i class="far fa-eye"></i> </a>
                </td>
            </tr>
            <tr class="t-body">
                <td><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></td>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td class="last-Action">
                    <a href="#" class="Trash" data-clients =".Delete-clients"> <i class="fas fa-trash-alt"></i> </a>
                    <a href="#" class="Edit"  data-clients =".Edit-clients"> <i class="far fa-edit"></i> </a>
                    <a href="#" class="View"  data-clients =".View-clients"> <i class="far fa-eye"></i> </a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    <div class="Delete-clients remove-Delete">
        <div class="Delete-clients-question">
            <h4>Are You Sure To Delete This ?</h4>
            <button class="btn btn-danger"> Yes   </button>
            <button class="btn btn-dark No-clients cancel-Dashbored">  NO  </button>
        </div>
    </div>

    <div class="View-clients remove-Delete">
        <div class="View-clients-Details">
            <div class="View-cancel cancel-Dashbored"> <i class="fas fa-times"></i> </div>
            <div class="Image-View">
                <img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" />
            </div>
            <div class="Deatils-View">
                    <ul>
                        <li>Name          : <span>Ashton Cox</span></li>
                        <li>Postion       : <span>Junior Technical Author</span></li>
                        <li>Office        : <span>San Francisco</span></li>
                        <li>Age           : <span>23</span></li>
                        <li>Start date    : <span>2009/01/12</span></li>
                        <li>Salary        : <span>$86,000</span></li>
                    </ul>
            </div>
        </div>
    </div>

    <div class="Edit-clients remove-Delete">
        <form class="Edit-clients" action="" method="POST">
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
            <button type="submit" name="BTN_Register" class="btn form-control Edit-Prfile-clients">Edit</button>
        </form>
     </div>
</div>
<div class="right-All-Employeres Dasbored-content none-Dashbored">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Start Of Date</th>
      <th scope="col">Poistion</th>
    </tr>
  </thead>
  <tbody>
    <tr class="t-body">
      <th scope="row"><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr class="t-body">
      <th scope="row"><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr class="t-body">
      <th scope="row"><img src ="IMG/emp_default.jpg" alt="IMG/emp_default.jpg" /></th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

</div>
