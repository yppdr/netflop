<?php
$url = "http://deeveadees.loc/";

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>NetFlop - Un site qui fait pas de flop en vrai !</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="<?= $url ?>css/style.css" rel="stylesheet">
  </head>

  <body>

 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?= $url ?>">
        <img src="<?= $url ?>img/logo.png" width="auto" height="30" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= $url ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#flemme">Contact</a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégorie
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Animation</a>
          <a class="dropdown-item" href="#">Fantastique</a>
          <a class="dropdown-item" href="#">Comédie dramatique</a>
          <a class="dropdown-item" href="#">Romance</a>
          <a class="dropdown-item" href="#">Policier</a>
          <a class="dropdown-item" href="#">Animation</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">P0rn</a>
        </div>
      </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Recherche" aria-label="Recherche">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
        </form>
      </div>
    </nav>

      <!--<header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="http://lorempicsum.com/futurama/1900/1080/2" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                              <h3>Second Slide</h3>
                              <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://lorempicsum.com/futurama/1900/1080/5" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                              <h3>Second Slide</h3>
                              <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="http://lorempicsum.com/futurama/1900/1080/3" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                              <h3>Second Slide</h3>
                              <p>This is a description for the second slide.</p>
                    </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
      </div>
  </header>-->


    <main role="main">



      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row" id="movieslist">






          </div>
        </div>
      </div>

        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Le p0rn ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       C'est pas bien ! 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">-18 ?</button>
        <a type="button" class="btn btn-success" href="http://youpomm.com/">+18 ?</a>
      </div>
    </div>
  </div>
</div>
        
    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>N'est pas un Copyright de Yannis ou de Loic ! Peut etre de be<span class="bwb-color">W</span>eb !   &copy; beWeb 2018 </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?= $url ?>js/netflop.js"></script>
    <script type="text/javascript">

window.onload = function() {

  (function() {
  var movieslist;

  movieslist = document.getElementById('movieslist');

  listeDeFilms.forEach(function(film) {
    var mdescription, mdes, mimg, mlien, mtitle;
    mimg = film.jaquette;
    mtitle = film.titre;
    mdes = film.description_compl;
    mdescription = film.description_compl.substr(0, 90);
    mlien = film.lien;
    movieslist.innerHTML += '<div class="col-md-4"><div class="card mb-4 box-shadow"><img class="card-img-top" src="' + mimg + '" alt="Card image cap"><div class="card-body"><h4 class="card-title">' + mtitle + '</h4><p class="card-text">' + mdescription + ' ...</p><div class="d-flex justify-content-between align-items-center"><button class="btn btn-outline-info btn-block" data-toggle="modal" data-target="#' + mimg + '">Voir plus</button></div></div></div></div><div class="modal fade" id="' + mimg + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="myModalLabel">' + mtitle + '</h4></div><div class="modal-body">' + mdes + '</div><div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button><a href="' + mlien + '" class="btn btn-info">Voir le film</a></div></div></div></div>';
  });

}).call(this);
}
</script>

  </body>
</html>
