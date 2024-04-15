<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contala Vos</title>

		<link rel="shortcut icon" href="./favicon.png" type="image/x-icon" />

		<link rel="stylesheet" href="./main.css" />
	</head>
	<body>
<main class="publicar--empleo"> <section class="main__form"> 
<h2 class="main__form--title"><img src="contalo_.png" width="581" height="164"></h2>
<form action="upload.php" method="POST" enctype="multipart/form-data"/>
<div class="form-group"> 
  <label for="title">contanos tus experiencias</label>
  <input
							type="text"
							name="title"
							id="title"
							placeholder="Nombre del proyecto o activadad"
						/>
</div>
<div class="form-group"> 
  <label for="description">mas detalles</label>
  	<textarea
							name="description"
							id="description"
							placeholder="Describe tu objetivo"
	></textarea>
</div>
<div class="form-file"> 
  <div class="form-file__action"> 
    <label for="image" class="title">Foto de publicación</label>
    <input type="file" name="image" id="image" />
  </div>
  <div class="form-file__result" id="result-image"> <img id="img-result" alt="" /> 
  </div>
</div>
<input type="submit" name="subir" value="Subir imagen"/>
</section> </main> 
<script src="./main.js"></script>
	</body>
</html>
