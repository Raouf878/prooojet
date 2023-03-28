<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../web_styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="manifest" href="../manifest.json">
</head>
<body class="moo">
    <!------------Main Container------------->

    <div class="container ">
        <!------------Login Coàntainer-------------->

        <div class="kahloch2 row border   bg-white shadow box">

            <!---------------Left------------------------->

            <div class=" col-md-6  left">
                <div class=" mb-3 vid">
                    <img src="../image/f.gif" alt="" width="300px">
                </div>
                <p class="text-white fs-2 desc1 text-center">New Scheduling And Routing Options</p>
                <small class="text-white text-wrap text-center desc2">We also updated the format of podcasts and rewards.</small>
            </div>

            <!---------------Right-------------------->

            <div class="col-md-6 right">
                <div class="row align-items-center" style="margin-top: 100px; margin-left: 50px ; margin-right: 50px ;">
                    <div class="header-text mb-4 text-center">
                        <h2>Welcome !</h2>
                      
                        
                    </div>
                    <form class="input" action="../login_scripts/login.control.php" method="post" style="display:grid; grid-row-gap:5px;">
                   
                      <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" id="username"  name="username" >
                      
                  
                      <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" id="password" name="password">
                  
                      <div class="checklabel">
                          <input type="checkbox" class="form-check-input" id="formCheck">
                          <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                      </div>
                      
                  
                      <input type="submit" name="submit" value="Login"class="btn btn-lg btn-primary w-100 fs-6" style="margin-top:25px;">
                  </form>
                    
                    
                </div>
            </div>

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