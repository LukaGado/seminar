<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RIBARICA - Mjesto za guštanje</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	    <!-- Custom CSS -->
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    
	<div class="navbar navbar-inverse nabvar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Ribarica</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" data-toggle="modal">Početna</a></li>
					<li><a href="#hrana">Jela</a></li>
					<li><a href="#pica">Pića</a></li>
					<li><a href="#onama">O nama</a></li>
					<li><a href="#contact" data-toggle="modal">Kontakt</a></li>
				</ul>
			</div> <!--/.nav-collapse -->
		</div>
	</div>
	
	<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo.png" alt="">
                    <div class="intro-text">
                        <span class="name">Restoran Ribarica</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	<section id="jela">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2>Dodaj jelo u bazu<i class="glyphicon glyphicon-hand-down"></i></h2> 
						<a id="hrana"></a>
						<hr class="crta">
					</div>
				</div>
				<div class="row">
					<section id="data">
						<fieldset > 
						<legend>Unos podataka u bazu</legend>
						<form action="upis.php" method="post" enctype="multipart/form-data">
						<label for="Naziv" id="Naziv" name="Naziv">Naziv:</label>
						<input type="text" id="Naziv" name="Naziv" required placeholder="Naziv proizvoda"></br></br>
						<label for="Tip" id="Tip" name="Tip">Hrana ili Piće?:</label>
							<select  id="Tip" name="Tip">
											<option value="Hrana" name="Hrana">Hrana</option>
											<option value="Pice" name="Pice">Piće</option>
							</select></br></br>
						
						<label for="Cijena" id="Cijena" name="Cijena">Cijena: </label>
							<input type="text" name="Cijena" id="Cijena" required placeholder="Cijena - 12.35">kn</br></br>
						
						
						<input style="margin: 0 auto;" type="file" name="slika" id="slika">
							</br> 
							</br>
						<input type="submit" name="submit" value="Upiši" /></br>
							</br>
						</form>
			 
						</fieldset>	
					</section>
				</div>
			</div>
    </section>
	
	</br></br></br></br></br>
	
	<!-- footer -->
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
		<div class="container">
		
			<div class="navbar-text pull-left">
				<p>&copy 2015 Ribarica d.o.o.</p>
			</div>
			<div class="navbar-text pull-right">
				<a href="#"><i style="color:grey;" class="fa fa-facebook-square fa-2x"></i></a>
				<a href="#"><i style="color:grey;" class="fa fa-twitter-square fa-2x"></i></a>
				<a href="#"><i style="color:grey;" class="fa fa-google-plus fa-2x"></i></a>
			</div>
		
		</div>
	</div>
	
	<!-- Bootstrap core JS
	********************************************************* -->
	<div class="modal fade" id="contact" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form-horizontal" role="form" action="output.php" method="post">
					<div class="modal-header">
						<h4 class="text-center">Kontakt</h4>
					</div>
					<div class="modal-body">
							<div class="form-group">
						
								<label for="kontakt_ime" class="col-sm-2 control-label">Ime:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="kontakt_ime" name="kontakt_ime" placeholder="Ime ili Nadimak">
								</div>
							</div>
							<div class="form-group">
								<label for="kontakt_email" class="col-sm-2 control-label">E-mail:</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="kontakt_email" name="kontakt_email" placeholder="Vaša E-mail adresa">
								</div>
							</div>
							<div class="form-group">
								<label for="kontakt_rijedlog" class="col-sm-2 control-label">Prijedlog:</label>
								<div class="col-sm-10">
									<textarea class="form-control" id="kontakt_prijedlog" name="kontakt_prijedlog" rows="4" placeholder="Kako bi Vi unaprijedili stranicu?"></textarea>
								</div>
							</div>
					</div>
							<div class="modal-footer">
								<button type="submit" name="submit" id="submit" name="submit" class="btn btn-primary">Pošalji!</button></input>
								<a class="btn btn-default" data-dismiss="modal">Zatvori</a>
							</div>
						</form>
			</div>
		</div>
	</div>
	
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>