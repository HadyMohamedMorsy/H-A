<div class="right-All-Clients Dasbored-content">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Img</th>
                <th>Category</th>
                <th>Parent Category</th>
                <th>Number of Product</th>
                <th>Quantity</th>
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