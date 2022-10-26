<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/output.css">
	<title><?= $data['judul']; ?></title>
</head>
<body>
	<!-- Header Section Start -->
	<header class="bg-tranparent absolute top-0 left-0 w-full flex items-center z-10">
		<div class="container">
			<div class="flex items-center justify-between relative">
				<div class="px-4">
					<a href="#home" class="font-bold text-lg text-primary block py-6">Storitour</a>
				</div>
				<div class="flex items-center px-4">
					<button id="hamburger" name="humberger" type="button" class="block absolute right-4 lg:hidden">
						<span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
						<span class="hamburger-line transition duration-300 ease-in-out"></span>
						<span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
					</button>

					<nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
						<ul class="block lg:flex">
							<li class="group">
								<a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
							</li>
							<li class="group">
								<a href="#porfolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
							</li>
							<li class="group">
								<a href="#layanan" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Layanan</a>
							</li>
							<li class="group">
								<a href="#hubungi" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Hubungi</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header Section End -->