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
        <div class=" text-center mb-4">
            <h3>Edit user information</h3>  
            <p class="text-muted">click update after changing any information </p>
        </div>

    </div>
    <div class=" container d-flex justify-content-center"> 
        <form action="" method="post" style=" width: 50vw; min-width:300px" >
        <div class ="col">
                    <label class="form-label">titre offre</label>
                    <input type ="text" class ="form-control" name ="titre_offre" placeholder="Einstein">

                </div>
                <div class ="col">
                    <label class="form-label"  >description</label>
                    <input type ="text" class ="form-control" name ="description" placeholder="Einstein">

                </div>
                
            </div> 
            <div class ="mb-3">
                    <label class="form-label"  >promo</label>
                    <input type ="text" class ="form-control" name ="promo" placeholder="Einstein">
                    <label class="form-label"  >nombre de place</label>
                    <input type ="text" class ="form-control" name ="nombre de place" placeholder="Einstein">
                    <label class="form-label"  >base remuneration</label>
                    <input type ="text" class ="form-control" name ="base remuneration" placeholder="Einstein">
                    <label class="form-label"  >date offre</label>
                    <input type ="text" class ="form-control" name ="date offre" placeholder="Einstein">
                    <label class="form-label"  >duree stage</label>
                    <input type ="text" class ="form-control" name ="duree stage" placeholder="Einstein">

                </div>
            
                
            <div>
                <button type="submit" class="btn btn-success" name="submit"> save </button>
                <a href="index.php" class="btn btn-danger">Cancel </a>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php 
require_once 'Add_new_controller.php';

if(isset($_POST['submit'])) {
    $model_obj=new UserController();
    $titre_offre = $_POST['titre_offre'];
    $description = $_POST['description'];
    $promo = $_POST['promo'];
    $nombre_place = $_POST['nombre de place'];
    $base = $_POST['base remuneration'];
    $date = $_POST['date offre'];
    $duree = $_POST['duree stage'];
    $model_obj->update_offre($duree_stage, $base_remuneration, $date_d_offre, $Nombre_place_offertes,$promo_concernees,$titre_offre,$desc_offre);
}
?>