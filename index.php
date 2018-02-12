<?php include 'myFunction.php' ?>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="librairies/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="librairies/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css">
 	</head>
 	<body>
 		<section class="container-fluid">
 			<div class="container">
 				<div class="row">
 					<h1 class="col-12 text-center">MY ARTICLE</h1>
	 			</div>
	 			<div class="row">
	 				<div class="col-12 text-center">BLOG D'ARTICLE</div>
	 			</div>
 			</div>
 			
 		</section>
 		<section class="container-fluid">
 			<div class="">
 				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#">New article <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
								<div class="dropdown-menu" aria-labelledby="dropdown08">
									<?php $bdd = mySqli(); 
										$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$grep = $bdd->query('SELECT * FROM Categorie');
    									while ($gdata = $grep->fetch()){ ?>
											<a class="dropdown-item" value="<php echo $gdata['id'] ?>" href=""><?php echo $gdata['nom']?></a>
									<?php } ?>
								</div>
							</li>
						</ul>
					</div>
				</nav>
 			</div>
 		</section>
 		<section class="container-fluid">
 			<div>
 				<form method="POST" action="requeteContact.php" class="col-6 offset-3">
 					<div class="row">
 						<span class="form-group col-6 text-left">
					    	<label>Nom</label>
					    	<input type="text" class="form-control" aria-describedby="emailHelp" name="nom">
						</span>
						<span class="form-group col-6 text-left">
					    	<label>Prénom</label>
					    	<input type="text" class="form-control" aria-describedby="emailHelp" name="telephone">
						</span>
 					</div>
 					<div class="row">
 						<span class="form-group col-6 text-left">
					    	<label>E-mail</label>
					    	<input type="email" class="form-control" aria-describedby="emailHelp" name="mail">
						</span>
						<span class="form-group col-6 text-left">
					    	<label>Titre</label>
					    	<input type="text" class="form-control" aria-describedby="emailHelp" name="titre">
						</span>
 					</div>
 					<div class="row">
 						<span class="form-group col-6">
 							<label>Catégorie</label>
 							<select  name="categorie" class="form-control">
								<?php $bdd = mySqli(); 
									$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$grep = $bdd->query('SELECT * FROM Categorie');
	    							while ($gdata = $grep->fetch()){ ?>
										<option class="text-center" value="<php echo $gdata['id'] ?>"><?php echo $gdata['nom']?></option>
								<?php } ?>
							</select>
 						</span>
 					</div>
 					<div class="row">
 						<span class="form-group col-12 text-left">
					    	<label>Texte </label>
					    	<textarea class="form-control" rows="25" name="texte"></textarea>
						</span>
 					</div>
 					<div class="row">
						<button type="submit" class="btn btn-primary col-2 offset-9">Enregistrer</button>
					</div>
 				</form>
 			</div>
 		</section>
 	</body>
</html>