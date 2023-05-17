<html>

<head>
    <title>CRUD application</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>

<body>





    <h1 style="text-align: center;">CRUD Demo</h1>



asdasdsadsadsadsa
        <?php
        
        $id = $_GET['id'];
        echo $id;

        //select where id = ? 
        $conn = mysqli_connect('localhost','root','123','cruddb');
        if(!$conn){
            die('Connection failed' . mysqli_connect_error());
        }
    
        $sql = "SELECT * FROM tbl_employee WHERE id = $id";
        $result = mysqli_query($conn,$sql);


        $first_name = "";
        $last_name = "";
        $nic = "";
        $tp = "";
        $created_user = "";
        $createddate_time = "";
        
        while($row = mysqli_fetch_assoc($result)){

            $first_name  = $row['first_name'];
            $last_name = $row['last_name'];

        }


        
        ?>









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
                                <input type="text" class="form-control" name="first_name" value="<?php echo $first_name ; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="<?= $last_name ?>">
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


            </div>
            <div class="col">
                Column
            </div>
        </div>
    </div>


</body>

</html>