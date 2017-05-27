<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- FancyBox 3 CSS  -->
		<link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css">

		<!-- Custom CSS Goes HERE -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- FancyBox 3 -->
		<script src="js/jquery.fancybox.min.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<title>FancyBox 3 Gallery Demo</title>
	</head>
	<body class="sfooter">

		<div class="sfooter-content">
			<header>
				<div class="container">
					<h1>FancyBox 3 Demo</h1>
				</div>
			</header>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="instructions">
								<h2>Instructions</h2>
								<p>Download the <a href="http://fancyapps.com/fancybox/3/" target="_blank">FancyBox 3</a> JavaScript and CSS files, and add them to your project. Link them in your HTML &lt;head&gt; tag. The JavaScript file must be added after your jQuery link, since it requires jQuery to run.</p>
								<p>Refer to the <a href="http://fancyapps.com/fancybox/3/docs/" target="_blank">FancyBox3 Documentation</a>, and view the HTML for the FancyBox Gallery items in this demo code. This demo features the simplest and fastest implementation.</p>
								<p>Pay close attention to the <strong>data-fancybox</strong> and <strong>data-caption</strong> attributes in the HTML.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Begin FancyBox 3 Gallery -->
			<main>
				<div class="container">
					<div class="row">

						<!-- Begin FancyBox Gallery Item -->
						<div class="col-xs-6 col-sm-3">
							<a href="img/cat-1.jpg" class="thumbnail" data-fancybox="gallery" data-caption="Meow!">
								<img src="img/cat-1.jpg" alt="Cat One" class="img-responsive">
							</a>
						</div>

						<!-- Begin FancyBox Gallery Item -->
						<div class="col-xs-6 col-sm-3">
							<a href="img/cat-2.jpg" class="thumbnail" data-fancybox="gallery" data-caption="Meow #2!">
								<img src="img/cat-2.jpg" alt="Cat Two" class="img-responsive">
							</a>
						</div>

						<!-- Begin FancyBox Gallery Item -->
						<div class="col-xs-6 col-sm-3">
							<a href="img/cat-3.jpg" class="thumbnail" data-fancybox="gallery" data-caption="Meow #3!">
								<img src="img/cat-3.jpg" alt="Cat Three" class="img-responsive">
							</a>
						</div>

						<!-- Begin FancyBox Gallery Item -->
						<div class="col-xs-6 col-sm-3">
							<a href="img/cat-4.jpg" class="thumbnail" data-fancybox="gallery" data-caption="Meow #4!">
								<img src="img/cat-4.jpg" alt="Cat Four" class="img-responsive">
							</a>
						</div>
					</div><!-- /.row-->

					<div class="row">

						<!-- Begin FancyBox Gallery Item -->
						<div class="col-xs-6 col-sm-3">
							<a href="img/cat-5.jpg" class="thumbnail" data-fancybox="gallery" data-caption="Meow #5!">
								<img src="img/cat-5.jpg" alt="Cat Five" class="img-responsive">
							</a>
						</div>

						<!-- Begin FancyBox Gallery Item -->
						<div class="col-xs-6 col-sm-3">
							<a href="img/cat-6.jpg" class="thumbnail" data-fancybox="gallery" data-caption="Meow #6!">
								<img src="img/cat-6.jpg" alt="Cat Six" class="img-responsive">
							</a>
						</div>

					</div><!--/.row-->
				</div><!-- /.container -->
			</main>
		</div><!--/.sfooter-content-->

		<footer>
			<div class="container text-center">
				View on <a href="https://github.com/rlewis2892/bootstrap-sandbox-3/tree/saru-fancybox3" target="_blank">GitHub</a>. Meow!
			</div>
		</footer>
	</body>
</html>