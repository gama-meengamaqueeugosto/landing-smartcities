<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!-- build:css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- <link rel="stylesheet" href="/assets/css/app.css"> -->
	<!-- endbuild -->
</head>
<body>
<header id="header">
	<div class="container container-header">
		<div class="row">
			<img  height="400" width="800" src="{{ asset('assets/img/toposite_baixa_corte.jpg')}}">
		</div>
	</div>
</header>
<section id="confirmacao">
	<div class="container py-5 text-center	">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="my-5">
					<h1>HACATHON SMART CITIES</h1>
					<h4>Cidades, Negocios e Educaçao do Futuro</h4>
					<h4>08 e 09 Junho/17</h4>
				</div>
			</div>
		</div>
		<hr class="c-hr">
		<div class="row">
			<div class="col-md-6">
				<h1>Sua inscrição foi realizada com sucesso!</h1>
				<br>Você receberá um e-mail com mais instruções em breve.
			</div>
			<div class="contact-form col-md-6">
				<img src="{{ asset('assets/img/sucesso.jpg')}}">
			</div>
		</div>
	</div>
</section>
<section id="programas">
	<div class="container py-5 text-center">
		<h2 class="title">
			Conheça nossos programas
		</h2>
		<hr class="c-hr">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<img width="150" src="{{ asset('assets/img/gama-sem-fundo.jpg')}}" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-md-6">
						<a href="http://gama.academy/pt/programas/experience" target="_blank">Gama Experience</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<img width="150" src="{{ asset('assets/img/le-wagon-sem-fundo.jpg')}}" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-md-6">
						<a href="https://www.lewagon.com/pt-BR" target="_blank">Coding Bootcamp</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<footer id="footer">
	<div class="text-center">
		<img width="200" src="{{ asset('assets/img/gama-sem-fundo.jpg')}}" class="img-fluid" alt="Responsive image">
		<img width="250" src="{{ asset('assets/img/le-wagon-sem-fundo.jpg')}}" class="img-fluid" alt="Responsive image">
	</div>
</footer>

<!-- build:js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<!-- endbuild -->
</body>
</html>