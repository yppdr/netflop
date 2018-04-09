   
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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
$(document).ready(function () {
    $.ajax({
        url: "http://deeveadee.janus-developpement.com/films",
        success : function(data){
            loadPage(data);
        }
    }); 
        
});

function loadPage(listeDeFilm){
    for(var i = 0 ; i < listeDeFilm.length ; i++){
        let film = listeDeFilm[i];
        $("#lolmdr").append(
            $('<div class="col-md-4">')
            .append($("<div>").addClass("card mb-4 box-shadow"))
            .append($("<h4>").addClass("card-title").text(film.titre))
            .append($("<img />").addClass("card-img-top").attr("src",film.jaquette))
            .append($("<p>").text(film.description).addClass("text-centered")) 
            );
    }
}

    


    </script>
  </body>
</html>
