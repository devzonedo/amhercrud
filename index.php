<html>

<head>
    <title>CRUD application</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>

<body>





    <h1 style="text-align: center;">CRUD Demo</h1>





    <div class="container">
        <div class="row">
            <div class="col">
                Column
            </div>
            <div class="col">




                <div class="card">
                    <div class="card-header">
                        Add Employee
                    </div>
                    <div class="card-body">



                        <form action="index.php" method="post">


                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Telephone</label>
                                <input type="text" class="form-control" name="tp">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NIC</label>
                                <input type="text" class="form-control" name="nic">
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <select class="form-control" name="department">
                                    <option value="">--select department--</option>
                                    <option value="1">Colombo</option>
                                    <option value="2">Negombo</option>
                                    <option value="3">Gampaha</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="pword">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"></label>
                                <input type="submit" class="btn btn-primary" name="btnAdd" value="Save" />
                            </div>

                        </form>






                    </div>
                </div>







                    <?php
                    
                    if(isset($_POST['btnAdd'])){

                            $first_name = $_POST['first_name'];
                            $last_name = $_POST['last_name'];
                            $tp = $_POST['tp'];
                            $nic = $_POST['nic'];
                            $department = $_POST['department'];
                            $pword = $_POST['pword'];


                           // echo 'Field values are collected';

                           //connect to database  'cruddb'

                            $conn = mysqli_connect('localhost','root','123','cruddb');
                            if(!$conn){
                                die('Connection failed' . mysqli_connect_error());
                            }


                            //create insert query 
                            $sql = " INSERT INTO tbl_employee (first_name,
                            last_name,
                            nic,
                            tp,
                            department_id,pword) VALUES ('$first_name', '$last_name',$tp,$nic,$department,'$pword') ";

//echo $sql;

                               if(mysqli_query($conn,$sql)) {

?>

<div class="alert alert-success" role="alert">
The record inserted successfully
</div>

<?php




                               }else{
                              
?>
<div class="alert alert-danger" role="alert">
  Something went wrong
</div>

<?php



                               }


                               mysqli_close($conn);




                    }
                    
                    
                    
                    
                    ?>










            </div>
            <div class="col">
                Column
            </div>
        </div>
    </div>


</body>

</html>