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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">


    <link href="<?= $url ?>css/pages.css" rel="stylesheet">
    <link href="<?= $url ?>css/btn.css" rel="stylesheet">
  </head>

  <body>

 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?= $url ?>">
        <img src="<?= $url ?>img/logo.svg" width="auto" height="30" alt="">
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

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" width="50%"src="https://www.youtube.com/embed/7jniyVsrfv8" allowfullscreen></iframe>
          </div>
        </div>

      </section>


       <div class="container">

<div class="text-center">
  <h1 >ALIBI.COM</h1>
  <small>De <span class="badge badge-secondary">Philippe Lacheau</span> dans le genres <span class="badge badge-secondary">Comédie</span></small>
  <p></p>
  <p>Greg a fondé une entreprise nommée Alibi.com qui crée tout type d'alibi. Avec Augustin son associé, et Medhi son nouvel employé, ils élaborent des stratagèmes et mises en scène imparables pour couvrir leurs clients. Mais la rencontre de Flo, une jolie blonde qui déteste les hommes qui mentent, va compliquer la vie de Greg, qui commence par lui cacher la vraie nature de son activité. Lors de la présentation aux parents, Greg comprend que Gérard, le père de Flo, est aussi un de leurs clients...</p>
</div>

<hr>
  <div class="card">

    <div class="card-body text-center">

      <section class='rating-widget'>
        <div class='rating-stars text-center'>
          <ul id='stars'>
            <li class='star' title='Poor' data-value='1'>
              <i class='fa fa-star fa-fw'></i>
            </li>
            <li class='star' title='Fair' data-value='2'>
              <i class='fa fa-star fa-fw'></i>
            </li>
            <li class='star' title='Good' data-value='3'>
              <i class='fa fa-star fa-fw'></i>
            </li>
            <li class='star' title='Excellent' data-value='4'>
              <i class='fa fa-star fa-fw'></i>
            </li>
            <li class='star' title='WOW!!!' data-value='5'>
              <i class='fa fa-star fa-fw'></i>
            </li>
          </ul>
        </div>

    </section>
        
        
                        <a class="btn btn-social-icon btn-twitter text-white">
                            <span class="fa fa-twitter"></span>
                        </a>
                        <a class="btn btn-social-icon btn-facebook text-white">
                            <span class="fa fa-facebook"></span>
                        </a>
                         <a class="btn btn-social-icon btn-instagram  text-white">
                            <span class="fa fa-instagram "></span>
                        </a>
                        <a class="btn btn-social-icon btn-google  text-white">
                            <span class="fa fa-youtube "></span>
                        </a>
                        <a class="btn btn-social-icon btn-vk  text-white">
                            <span class="fa fa-vk "></span>
                        </a>
                        <a class="btn btn-social-icon btn-google  text-white">
                            <span class="fa fa-google "></span>
                        </a>
    </div>
  </div>

<p></p>

  <div class="card">
  <div class="card-header">
    Commentaires :
  </div>
  <div class="card-body">
 Aucun commentaire n'a été publié <i class="em em-cry"></i> Soyez le premier! 
  <hr>
  <form method="post">

                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" name="email" id="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="comment">Commentaire</label>
                        <textarea name="comment" id="comment" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-outline-primary btn-block">
                            Commenter ce post
                        </button>
                    </div>

            </form>

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
        <p>N'est pas un Copyright de  Yannis ou de Loic ! Peut etre de be<span class="bwb-color">W</span>eb !   &copy; beWeb 2018 </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){

/* 1. Visualizing things on Hover - See next part for action on click */
$('#stars li').on('mouseover', function(){
  var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

  // Now highlight all the stars that's not after the current hovered star
  $(this).parent().children('li.star').each(function(e){
    if (e < onStar) {
      $(this).addClass('hover');
    }
    else {
      $(this).removeClass('hover');
    }
  });

}).on('mouseout', function(){
  $(this).parent().children('li.star').each(function(e){
    $(this).removeClass('hover');
  });
});


/* 2. Action to perform on click */
$('#stars li').on('click', function(){
  var onStar = parseInt($(this).data('value'), 10); // The star currently selected
  var stars = $(this).parent().children('li.star');

  for (i = 0; i < stars.length; i++) {
    $(stars[i]).removeClass('selected');
  }

  for (i = 0; i < onStar; i++) {
    $(stars[i]).addClass('selected');
  }

  // JUST RESPONSE (Not needed)
  var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
  var msg = "";
  if (ratingValue > 1) {
      msg = "Thanks! You rated this " + ratingValue + " stars.";
  }
  else {
      msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
  }
  responseMessage(msg);

});


});


function responseMessage(msg) {
$('.success-box').fadeIn(200);
$('.success-box div.text-message').html("<span>" + msg + "</span>");
}
    </script>
</html>
