<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title><?= $data['judul']; ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	  <div class="container">
	    <a class="navbar-brand" href="<?= BASEURL; ?>">MVC</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>