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
				<img width="800" height="400" src="{{ asset('assets/img/toposite_baixa_corte.jpg') }}">
			</div>
		</div>
	</header>
	<section id="inscricao">
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
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class="contact-form col-md-6">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-9 col-xs-11">
							<form action="{{ route('leads.save') }}" method="POST">
								{{ csrf_field() }}
								<div class="row pt-3">
									<div class="col-md-12 col-xs-12">
										<div class="form-group">
											<input type="text" placeholder="Name" name="name" class="form-control">
										</div>
									</div>
									<div class="col-md-12 col-xs-12">
										<div class="form-group">
											<input type="email" placeholder="E-mail" name="email" class="form-control">
										</div>
									</div>
									<div class="col-md-12 col-xs-12">
										<div class="form-group">
											<input type="text" placeholder="Telefone" name="phone" class="form-control">
										</div>
									</div>
									<div class="col-md-12 col-xs-12">
										<div class="form-group" >
											<select name="branch" class="form-control">
												<option value="Full Stack"> Full Stack</option>
                    							<option value="Backend">Back-end</option>
                    							<option value="Frontend"> Front-end</option>
											</select>
										</div>
									</div>
									<div class="col-md-12 col-xs-12">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">
												<i class="ion-paper-airplane"></i>
												Enviar
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
	<section id="depoimentos">
		<div class="container py-5 text-center">
			<h2 class="title">
				Depoimentos
			</h2>
			<hr class="c-hr">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<img width="100" src="{{ asset('assets/img/menina.jpg') }}" class="img-fluid" alt="Responsive image">
						</div>
						<div class="col-md-6">
							<blockquote class="blockquote">
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<img width="100" src="{{ asset('assets/img/menino.jpg')}}" class="img-fluid" alt="Responsive image">
						</div>
						<div class="col-md-6">
							<blockquote class="blockquote">
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
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