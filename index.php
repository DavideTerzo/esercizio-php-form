
<?php
    
     $nome = (isset($_POST['Nome'])) ?
   $_POST['Nome'] : '';
     print $nome;

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sass</title>
  </head>
  <body>
    <div class="container">
	 <form action="index.php" method="post">

	   <div class="form-group">
	     <label for="Nome">Nome</label>
	     <input type="text" name="Nome" class="form-control" id="Nome" placeholder="Inserisci il tuo nome">
	   </div>

	    <div class="form-group">
	     <label for="Cognome">Cognome</label>
	     <input type="text" name="Cognome" class="form-control" id="Cognome" placeholder="Inserisci il tuo cognome">
	   </div>

	   <div class="form-group">
	     <label for="Indirizzo">Indirizzo</label>
	     <textarea name="Indirizzo" class="form-control" id="Indirizzo" placeholder="Inserisci anche cap. e provincia" rows="3"></textarea>
	     <small id="emailhelp" class="form-text text-muted">Inserire via, numero civico, cap e provincia.</small>
	   </div>

	   <button type="submit" class="btn btn-primary">Entra</button>

	 </form>
	 
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
