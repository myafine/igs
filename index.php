<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
   
    <link rel="stylesheet" href="./style.css" />
    <title>IGS Management</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top">

          <a class="navbar-brand" href="/">IGS Management</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon">
              <i class="fa fa-bars"></i>
            </span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
            <ul class="nav">
              <li class="nav-item active">
              <a class="nav-link" href="#">Lorem <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
              <a class="nav-link" href="#">Lorem</a>
              </li>

              <li class="nav-item">
              <a class="nav-link" href="#">Lorem</a>
              </li>

              <li class="nav-item">
              <a class="nav-link " href="./choix_user.php">Mon Compte</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>

      

      <section class="home container mb-5">
        <div class="row mt-5">
          <div class="col-lg-6 mt-5 py-5 pl-5">
          <img
            class="animated zoomIn img-fluid"
            src="./img/undraw_working_re_ddwy.svg"
            alt=""
          />
          </div>
          <div class="col-lg-6 my-auto">
          <div class="row">
            <div class="home-content offset-lg-1 col-lg-10">
            <h1 class=" delay-1s pb-3 ">
              IGS Management
            </h1>
            <p class="pb-3">
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus, repudiandae recusandae illo quos non dolor, asperiores veritatis, quae nostrum labore esse iusto quas praesentium magni.
            </p>
            <a href="#" target="_blank"><button class="btn btn-lg btn-outline-secondary">à propos de nous
            </button></a>
            
            </div>
          </div>
          </div>
        </div>
        </section>

        <section class="call-to-action py-2">
          <div class="container text-center w-20">

            
            <div class="text-center py-5 mr-5">
              <h2 class="py-3">Services</h2>
              <div class="mx-auto heading-line"></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-4 text-center">
                  <i class="fa fa-bullhorn"></i>
      
                  <h4 class="py-3  ml-10">Information</h4>
                  <p class="pb-5">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                </div>
                <div class="col-md-4 text-center">
                  <i class="fa-solid fa-search"></i>
                  <h4 class="py-3">Gestion 
                  </h4>
                  <p class="pb-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                </div>
                <div class="col-md-4 text-center">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <h4 class="py-3">Solution De Managaement</h4>
                  <p class="pb-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </p>
                </div>
              </div>
            </div>
          
            
          </div>
        </section>
        <section class="contact">
          <div class="container">
            <div class="text-center py-5">
              <h2 class="py-3">Contact</h2>
              <div class="mx-auto heading-line"></div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div
                  id="map-conatiner-google-1"
                  class="z-depth-1-half map-conatiner">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.6605669830215!2d3.1759264152485156!3d50.68912527802002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c32892b6b5ba5d%3A0x405e3dbac20f974c!2s14%20Rue%20du%20Coq%20Fran%C3%A7ais%2C%2059100%20Roubaix!5e0!3m2!1sfr!2sfr!4v1650477560085!5m2!1sfr!2sfr" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
              </div>
    
            <form action="#" method="POST" class="col-lg-6">
              
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input class="form-control" type="email" id="email" aria-describedby="emailHint" placeholder="Email" name="email"/>
                  
                </div>
                <div class="form-group">
                  <label for="name">Nom & Prénom</label>
                  <input class="form-control" type="text" id="name" name="name" aria-describedby="" placeholder="Name"/>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-outline-secondary">
                  Submit
                </button>
              </form>
            </div>
          </div>
          <br>
        </section>

        <footer class="bg-dark text-center text-white">
          <!-- Grid container -->
          <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fa fa-facebook"></i></a>
        
              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fa fa-twitter"></i
              ></a>
        
            
        
              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fa fa-instagram"></i
              ></a>
        
              <!-- Linkedin -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fa fa-linkedin"></i
              ></a>
        
              
            </section>
            <!-- Section: Social media -->
          </div>
          <!-- Grid container -->
        
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="#">igsmanagement.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        


       
     
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


