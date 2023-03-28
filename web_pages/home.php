<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#4285f4">
    <link rel="apple-touch-icon" sizes="180x180" href="/image/1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkExia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../web_styles/home.css">
    <link rel="manifest" href="../manifest.json">

</head>
<body>
  
  <nav class="navbar navbar-expand-md bg-body-tertiary fixed-top" >
    <div class="container-fluid">
    <div class="navbar-brand mb-0 h1">
        <img
        class="d-inline-block align-top"
        src="../image/Linkexia.png" alt="image" width="150px" >
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
                <a href="#" class="nav-link">
                    Acceuil
                </a>
            </li>
            <li class="nav-item "style="padding-left:20px; padding-right: 20px;">
                <a href="recherche.php" class="nav-link" >
                    Recherche
                </a>
            </li>
            <li class="nav-item dropdown"style="padding-left:20px">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Gestionne 
                </a>
                <ul class="dropdown-menu" style="color:gray">
                  <li><a class="dropdown-item" href="../login_scripts/index.php">Gestionne étudiant</a></li>
                  <li><a class="dropdown-item" href="#">Gestionne pilote</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../login_scripts/index_offre.php">Gestionne d'offre</a></li>
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
<section class="main">
  <div>
      <h2><span style="color: #4e86ff;">Link</span><span>Exia</span> </h2>
      <h3>Votre carriére , notre mission</h3>
      <a href="#projects" class="main-btn">About us</a>
     
</section>

<section class="cards" id="services">
<h2 class="title" style="color:white">Services</h2>
<div class="content">
  <div class="card">
      <div class="icon">
          <i class="fa-solid fa-search"></i>
      </div>
      <div class="info">
          <h3>Job search</h3>
          <p>LinkExia also offers job search services, allowing users to search and apply for jobs posted by companies on the platform. Users can also set up job alerts and receive job recommendations based on their profile and preferences.</p>
      </div>
  </div>
  <div class="card">
      <div class="icon">
          <i class="fa-solid fa-laptop"></i>
      </div>
      <div class="info">
          <h3>Learning and dev</h3>
          <p>LinkExia Learning offers a wide range of courses and tutorials to help users develop their skills and advance their careers.</p>
      </div>
  </div>
  <div class="card">
    <div class="icon">
        <i class="fa-solid fa-globe"></i>
    </div>
    <div class="info">
        <h3>Professional Networking</h3>
        <p>LinkExia is primarily a professional networking platform, where users can connect with professionals in their industry, as well as potential employers, colleagues, and clients.</p>
    </div>
</div>
</div>
</section>

<section class="projects" id="projects">
<h2 class="title">About us</h2>
<div class="content">
  <p class="about">We're a professional networking platform connecting professionals worldwide. Our goal is to provide a space for individuals to build and grow their network, exchange ideas, and reach their full potential. Our team is committed to creating a safe and inclusive community for all members, regardless of their background or industry. Whether you're looking for a job or seeking professional development opportunities, we're here to support you. Thanks for choosing us!</p>
</div>
</section>

<section class="cards contact" id="contact">
<h2 class="title">Lest's work together</h2>
<div class="content">
  <div class="card">
      <div class="icon">
          <i class="fa-solid fa-phone"></i>
      </div>
      <div class="info">
          <h3>Phone</h3>
          <p>0542228931</p>
      </div>
  </div>
  <div class="card">
      <div class="icon">
          <i class="fa-solid fa-envelope"></i>
      </div>
      <div class="info">
          <h3>Email</h3>
          <p>Contact@LinkExia.com</p>
      </div>
      
  </div>
  
</div>
<div class="social-icons">
  <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
  <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
  <a href="https://discord.com/"><i class="fa-brands fa-discord"></i></a>
</div>
</section>

<footer class="footer">
<p class="footer-title">Copyrights @ <span>LinkExia</span></p>

</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</script>
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
  
  
</body>
</html>