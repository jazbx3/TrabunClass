<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './__frg/Head.php'; ?>
    <title>TrabünClass</title>
</head>
<body>
  <?php
    if(isset($_GET["P"])){
      echo "<script>alert('".$_GET["P"]."')</script>";
    }
  ?>
  <!-- Barra de navegación -->
  <section id="NAV">
    <nav class="navbar navbar-light bg-light">
      <div class="container">
          <a class="navbar-brand font-weight-bold user-select-none cursor-pointer col text-dark" href="./">TrabünClass</a>
          <div class ="nav justify-content-end">
            <li class="nav-item">
              <a target="_blank" class=" text-primary nav-link active" href="https://www.facebook.com/trabunclasschile/"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
              <a target="_blank" class=" text-danger nav-link active" href="https://www.instagram.com/trabunclasschile/"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
              <a target="_blank" class="text-info nav-link active" href="https://twitter.com/TrabunClass"><i class="fab fa-twitter"></i></a>
            </li>
          </div>
      </div>
    </nav>
  </section>
  <!-- Panel Login -->
  <div id="loginpanel" class="container-fluid bg-actions vh-90 d-flex align-items-center">
    <div class="container">
      <div class="card">
          <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs nav-justified" id="myTab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="tutor-tab" data-toggle="tab" href="#Tutor" role="tab" aria-controls="Tutor" aria-selected="true">
                        Tutor
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="alumno-tab" data-toggle="tab" href="#Alumno" role="tab" aria-controls="Alumno" aria-selected="false">
                        Alumno
                      </a>
                  </li>
              </ul>
          </div>
          <div class="card-body">
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="Tutor" role="tabpanel" aria-labelledby="tutor-tab">
                      <form>
                          <div class="form-group text-secondary">
                            <h3>Entrar como Tutor</h3>
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email" required>
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Contraseña" required>
                          </div>
                          <button type="button" class="btn btn-success w-100" onclick="javascript:alert('noago nada jejejej');">Entrar como tutor</button>
                      </form>
                  </div>
                  <div class="tab-pane fade" id="Alumno" role="Aabpanel" aria-labelledby="alumno-tab">
                      <form>
                          <div class="form-group text-secondary">
                            <h3>Entrar como Alumno</h3>
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email" required>
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Contraseña" required>
                          </div>
                          <button type="button" class="btn btn-outline-success w-100" onclick="javascript:alert('tanpoko noago nada jejejej');">Entrar como alumno</button>
                      </form>
                  </div>
              </div>
        <h6 class="font-weight-light text-secondary text-center"><a href="./">Registrate</a></h6>
          </div>
      </div>
    </div>
  </div>
  <!-- INFO -->
  <div id="INFOPANEL" class="container mt-md-5 sektion">
    <div class="form-row">
      <div class="form-group col-md-6 testo">
        <h6 class="font-weight-light text-secondary">TRABUNCLASS TE VA A DAR INDEPENDENCIA.</h6>
        <h2 class="">
          Una plataforma colaborativa para clases particulares.
        </h2>
        <div class="font-weight-light">
          <p>
            En una sociedad cada vez más compleja sobrevivir en ella depende cada vez más de una inteligencia colectiva.
          </p>
          <p>
            El ser humano es social por naturaleza, por lo que ha de aprovechar las posibilidades abiertas de la sociedad digital.
          </p>
          <p>
            Unete a nuestra comunidad de tutores, accede a una independencia económica, compatibilizando tus estudios, tus tiempos y accediendo a beneficios increibles.
          </p>
        </div>
        <p>
        <a id="asd" href="#loginpanel" class="btn btn-info w-100">Mas Información <i class="fas fa-angle-right"></i></a>
        </p>
        
      </div>
      <div class="form-group col-md-6 d-flex align-items-center">
        <img class="img-fluid" src="./images/bg-image/imagen1.png">
      </div>
    </div>
  </div>
  <!-- SHARE -->
  <section class="bg-light container-fluid sektion">
        <div class="nav justify-content-around">
            
        <li class="nav-item p-4">
              <a class="list-group-item list-group-item-action bg-light border-0" href="https://www.facebook.com/sharer/sharer.php?u=https://www.trabunclass.cl/" target="_blank">  
                <div class="media">
                  <i class="fab fa-facebook-f text-primary siz-50 align-self-center mr-3"></i>
                  <div class="media-body">
                    <p>Compartir en Facebook.</p>
                  </div>
                </div>
              </a>
            </li>
            
            <li class="nav-item p-4">
                <a class="list-group-item list-group-item-action bg-light border-0" href="https://instagram.com/?url=https://www.trabunclass.cl/" target="_blank">
                  <div class="media">    
                    <i class="fab fa-instagram text-danger siz-50 align-self-center mr-3"></i>
                    <div class="media-body">
                      <p>Compartir en Instagram.</p>
                    </div>
                  </div>
                </a>
            </li>
            <li class="nav-item p-4">
                <a class="list-group-item list-group-item-action bg-light border-0" href="https://twitter.com/intent/tweet?text=Plataforma%20colaborativa%20de%20clases%20particulares.%0Ahttps://www.trabunclass.cl/"
                    target="_blank">
                    <div class="media"> 
                    <i class="fab fa-twitter text-info siz-50 align-self-center mr-3"></i>
                    <div class="media-body">
                      <p>Compartir en Twitter.</p>
                    </div>
                </div>
                </a>
            </li>
  </section>
  <!-- FOOTER -->
  <footer class="container sektion">
    <div class="form-row sektion-mejoraa border-bottom">
      <div class="form-group col-md-6">
        <a class="navbar-brand user-select-none cursor-pointer col text-dark testo" href="./"><h2>TrabünClass</h2></a>
      </div>
      <div class="form-group col-md-6 ">
        <p class="testo2">Potenciamos la inteligencia colectiva.</p>
      </div>
    </div>
    <div class="container text-center sektion-mejora2 testo-poyo text-secondary mt-3">
    <i class="far fa-copyright"></i> Dereshos recerbados a la ermana del pollo.
    </div>
  </footer>
</body>
</html>