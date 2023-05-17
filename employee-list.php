<html>

<head>
    <title>CRUD application</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>

<body>

    <h1 style="text-align: center;">CRUD Demo</h1>


<div class="container text-center">
  <div class="row">
    <div class="col">


    <?php
    
    
    $conn = mysqli_connect('localhost','root','123','cruddb');
    if(!$conn){
        die('Connection failed' . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tbl_employee";
    $result = mysqli_query($conn,$sql);
    
    ?>


    <table border="1" style="width: 100%;">
        <tr>
            <td>id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>nic</td>
            <td>Telephone</td>
            <td>Created User</td>
            <td>Created Date</td>
            <td>Department</td>
            <td>Action</td>
        </tr>

     <?php
     
     while($row = mysqli_fetch_assoc($result)){
            ?>


<tr>
            <td> <?php echo $row['id']?></td>
            <td> <?php echo $row['first_name']?></td>
            <td> <?php echo $row['last_name']?></td>
            <td> <?php echo $row['nic']?></td>
            <td> <?php echo $row['tp']?></td>
            <td> <?php echo $row['created_datetime']?></td>
            <td> <?php echo $row['department_id']?></td>
            <td> <?php echo $row['created_user']?></td>
            <td> 

            <a href="employee-update.php?id=<?php echo $row['id']?>" >Update</a>
                <button type="button" class="btn btn-success">Update</button>
                <button type="button" class="btn btn-danger">Delete</button>  </td>
        </tr>

<?php
     }
     
     ?>






    </table>



    </div>
  </div>
</div>


</body>

</html>