
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color : #00ff5573"> 
        PHP Complete CRUD
    </nav>
    <div class="container">
        <a href="add_new_view.php" class="btn btn-dark mb-3"> Add New</a>
        <table class="table table-hover text-center ">
        <thead class="table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">role</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "db_conn.php";
                require_once 'Add_new_controller.php';
                $displa=new UserController;
                $resul=$displa->sh_user();
                while($row = mysqli_fetch_assoc($resul)){
                    ?>
                        <tr>
                            <td> <?php echo $row ['id_user']?></th>
                            <td> <?php echo $row ['nom']?></th>
                            <td> <?php echo $row ['prenom']?></th>
                            <td> <?php echo $row ['email']?></th>
                            <td> <?php echo $row ['role']?></th>
                            
                            
                            <td>
                                <a href="edit.view.php?id=<?php echo $row['id_user']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i> </a>
                                <a href="delete.php?id=<?php echo $row['id_user']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i> </a>
                            </td>
                        </tr>

                    <?php
                }
            ?>
        </tbody>
        </table>
    </div>
            

    <!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>