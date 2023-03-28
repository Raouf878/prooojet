<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkExia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../web_styles/recherche.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link rel="manifest" href="../manifest.json">
</head>
<body>
  <nav class="navbar navbar-expand-md bg-body-tertiary fixed-top" >
    <div class="container-fluid">
    <div class="navbar-brand mb-0 h1">
        <img
        class="d-inline-block align-top"
        src="../image/Linkexia.png" alt="" width="150px">
    </div>
    <button
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      class="navbar-toggler"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
      >
      <span class="navbar-toggler-icon"></span>
  </button>
    
    <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 20px;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-left:auto;">
            <li class="nav-item " style="padding-left:20px; padding-right: 20px;" >
                <a href="home.php" class="nav-link">
                    Acceuil
                </a>
            </li>
            <li class="nav-item "style="padding-left:20px; padding-right: 20px;">
                <a href="#" class="nav-link" >
                    Recherche
                </a>
            </li>
            <li class="nav-item dropdown"style="padding-left:20px">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Gestionne 
                </a>
                <ul class="dropdown-menu" style="color:gray">
                  <li><a class="dropdown-item"  href="../login_scripts/index.php">Gestionne étudiant</a></li>
                  <li><a class="dropdown-item" href="#">Gestionne pilote</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item"  href="../login_scripts/index_offre.php">>Gestionne d'offre</a></li>
                  <li><a class="dropdown-item" href="#">Gestionne d'entreprise</a></li>
                </ul>
              </li>

        </ul>  
        <div>
          <button class="btn btn-outline-primary" onclick="window.location.href='./login.php'">Log out</button>
        </div>
            
          
    </div>

</div>
</nav>
  <section  class="hero-area">
    <div class="container">
      <div class="row">
        <div  class="col-lg-8 offset-lg-2 text-center">
          <div class="hero-caption">
            <h2>rAOUF GAY</h2>
            <div class="search-form"> 
              <form autocomplete="off" action="" method='POST' class="search-barr"> 
                <input type="search" placeholder="search anything" name="search">
                <button type="submit" name='but'> <ion-icon class="bi bi-search" name="search-outline"></ion-icon></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    


        
  <div class="biga ">
    <div class="right">
      <section class="team">
        <div class="">

          
          <div class="hna row d-flex justify-content-center ">

            <!------------------------>
            <?php 
                            include "../login_scripts/recherche_control.php";
                            if(isset($_POST['but'])){
                             $displa=new recherche_control();
                             $searchTerm = $_POST['search'];
                             $resul=$displa->getdat($searchTerm);
                             
                             
                              
                            
                            
                            while($row = mysqli_fetch_assoc($resul)) { ?>
            <div class="cartes mt-4 col-sm-6 col-md-4 col-lg-3">
              <div class="member d-flex align-items-start " style=" height: 200px;">
                <div class="photo">
                  <img src="../image/1.png" class="img-fluid" alt="" width="180px">
                </div>
                <div class="member-info">
                  <p><?php echo $row['titre_offre'];?><p>
                  <span><?php echo $row['desc_offre'];?></span>
                  <p><?php echo $row['Promo_concernees'];?></p>
                  <p><?php echo $row['base_remuneration'];?></p>
                  
                  
                  
                  
                </div>
                <div id="product-1-rating" class="rating" >
                  <input type="radio" name="star-1" class="star-5" id="star-5-1" />
                  <label class="star-5" for="star-5-1"><i class="fa fa-star"></i></label>
                  <input type="radio" name="star-1" class="star-4" id="star-4-1" />
                  <label class="star-4" for="star-4-1"><i class="fa fa-star"></i></label>
                  <input type="radio" name="star-1" class="star-3" id="star-3-1" />
                  <label class="star-3" for="star-3-1"><i class="fa fa-star"></i></label>
                  <input type="radio" name="star-1" class="star-2" id="star-2-1" />
                  <label class="star-2" for="star-2-1"><i class="fa fa-star"></i></label>
                  <input type="radio" name="star-1" class="star-1" id="star-1-1" />
                  <label class="star-1" for="star-1-1"><i class="fa fa-star"></i></label>
                </div>
                
              </div>
            </div>
            <?php }}?>

            <!------------------------>
            

            
          </div>
        </div>
      </section>
    </div>
  
  </div>



  



  
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('../service-worker.js').then(function(registration) {
          console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
          console.log('ServiceWorker registration failed: ', err);
        });
      });
    }
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>