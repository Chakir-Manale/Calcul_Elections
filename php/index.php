<!DOCTYPE html>
<html lang="en">
<?php include "Header.html"; ?>
<body>

  <header role="banner">
    <nav class="navbar navbar-expand-lg  bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " href="index.php">Elections2020</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
          aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

   
        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav pl-md-5 ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Calcul</a>
            </li>
          </ul>

          
        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->

  <div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url('../images/Bg.png');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">it's not the voting that's the democracy, it's the counting .</h1>
        </div>
      </div>
    </div>
  </div>



  <div class="section portfolio-section" id="calcul-section">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title"> Calcul Elections </h2>
        </div>


        <div class="container" id="Calclul">
          <div class="row justify-content-md-center ">

              <form id="form_elections" class="form-group " >
                    <p id="error" style="color: red "></p>
                <div class="form-group input-group-prepend">
                  <label class="input-group-text" for="grps">Nb de Groupes:</label>
                  <input type="number" id="grps" value="2"/>
                </div>

                <div class="form-group input-group-prepend">
                  <label class="input-group-text" for="votes" > Nb Votes:</label>
                  <input type="number"  id="votes" name="votes" value="2"/>
                </div>

                <div class="form-group input-group-prepend">
                  <label class="input-group-text" for="sieges"> Nb Sieges:</label>
                  <input type="number" id="sieges" value="2"/>
                </div>

                <div class="form-group input-group-prepend form-btn">
                  <a href="javascript:void(0);" class="Valider" ><i class="fa fa-plus"> Valider</i></a>
                </div>

              </form>


              <form id="form_groupes" method="post" >
              </form>
          </div>
        </div>

      </div>

    </div>
  </div>


  <?php

  ?>


  <footer class="site-footer" role="contentinfo">
      <div class="row">
        <div class="col-12 text-md-center text-left">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear() +"");</script> All rights reserved |  <i class="fa fa-edge" aria-hidden="true">Agency</i>
          </p>
        </div>
      </div>
  </footer>
  <!-- END footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#ffc107" /></svg></div>

  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/main.js"></script>
<script>


</script>

</body>

</html>