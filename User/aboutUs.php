<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>About Us</title>
</head>
<body>

<div class="container-fluid  home1">

  <!--Nav--> 
    <div class="col-12 ">
      <div class="row" >
            <nav class="navbar navbar-expand-md -tertiary cnav " style="background-color: #ffffff;">
                <div class="container-fluid " >
                  <a class="navbar-brand" href="#"><h4 style="font-weight: bolder;"></h4>
                    <img  src="../Assets/Logo02.png" alt="" style=" height:3vw;margin-left:40px" >
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class=" navbar-collapse justify-content-center " id="navbarTogglerDemo02" >
                    <ul class="nav justify-content-center sm_navi">
                        <li class="nav-item">
                          <a class="nav-link " href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="aboutUs.php" >About Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="reviews.php">Reviews</a>
                        </li>
                      </ul>
                  </div>
                  <button class="btn02" type="submit" style="margin-right:40px"><a href="Login.php" >Profile</a></button>
                </div>
            </nav>
      </div>
    </div>  

  <!--Page Contents-->      
    <div class="row  ">
    <div class="container settopic">
            <div class="row " >
                <div class="row col-12 p-5 justify-content-center align-items-center " style=" height:max-content;">
                <div class="col-12 text-center">
                        <h1 class="mb-3 topic3">ABOUT US</h1>
                        <p>At Sahana Medical Center, we are dedicated to providing comprehensive and compassionate healthcare services to our community. With a team of highly skilled healthcare professionals and state-of-the-art facilities, we strive to deliver personalized care tailored to the unique needs of each patient. Our commitment to excellence extends beyond medical treatment; we prioritize patient comfort, safety, and well-being at every step. From preventive care and diagnostics to advanced treatments and rehabilitation, we are here to support our patients on their journey to better health. With a focus on innovation, integrity, and empathy, Sahana Medical Center is your trusted partner in healthcare.</p>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</div>
<div class="container-fluid  home2">
  
  <div class="container set1">
      <div class="row " >
          <div class="row p-5 justify-content-center align-items-center " style=" height:max-content;">
              <div class="col-12 col-lg-6">
              <img src="" class="rounded mx-auto d-block" alt="...">
              </div>
              <div class="col-12 col-lg-5">
                  <h2>DOCTOR</h2>
                  <h3>Dr. Name Here</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque posuere tellus, in vulputate odio blandit vitae. Aliquam vehicula risus ut ante rhoncus faucibus. Mauris massa metus, facilisis congue hendrerit et, vulputate id elit. Donec a turpis sit amet libero eleifend rhoncus. Aliquam mattis tincidunt nibh nec consectetur. Sed malesuada sodales felis, ut iaculis tortor finibus eget. Suspendisse auctor magna leo, vehicula ultrices lectus tincidunt et.</p>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid  home2">

  <div class="container set1">
      <div class="row " >
          <div class="row p-5 justify-content-center align-items-center " style=" height:max-content;">
          <div class="col-12 col-lg-5">
                  <h2>DOCTOR</h2>
                  <h3>Dr. Name Here</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque posuere tellus, in vulputate odio blandit vitae. Aliquam vehicula risus ut ante rhoncus faucibus. Mauris massa metus, facilisis congue hendrerit et, vulputate id elit. Donec a turpis sit amet libero eleifend rhoncus. Aliquam mattis tincidunt nibh nec consectetur. Sed malesuada sodales felis, ut iaculis tortor finibus eget. Suspendisse auctor magna leo, vehicula ultrices lectus tincidunt et.</p>
              </div>    
          <div class="col-12 col-lg-6">
              <img src="" class="rounded mx-auto d-block" alt="...">
              </div>
              
          </div>
      </div>
  </div>
</div>   
   

  <!--footer--> 
  <div class="col-12 mt-3 bg-success">
        <?php
        include "footer.php";
        ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>