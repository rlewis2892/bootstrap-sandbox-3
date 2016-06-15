<?php require_once("header.php"); ?>

<!--div class="container-fluid">
	<div class="txt-2">
		<h3 class="txt-2">redrovr</h3>
		<h3 class="txt-3">Images</h3>
	</div
</div-->

<div class="container-fluid">
	<div class="row heading-row">
		<div>
			<h1 class="col-sm-6 txt-2">redrovr</h1>
		</div>
		<div>
			<h2 class="col-sm-6 txt-3">Images</h2>
		</div>
		<hr style="clear:both;" id="heading-hr"/>
	</div>


	<div class="row carousel-row">
		<div id="imageCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<!--img src="../public_html/image/above-shot.jpg" alt="Above-Mars"-->
					<div style="background:url(../public_html/image/above-shot.jpg) center center;
          background-size:cover;" class="slider-size" title="my caption" onclick="slideBox('slide-1');" id="slide-1">
						<div class="carousel-caption">
							<h3>Orbit Shot</h3>
							<p>This picture was taken by an orbiting satellite around Mars.</p>
						</div>
					</div>
				</div>


				<div class="item">
					<div style="background:url(../public_html/image/mars-landscape.jpg) center center;
          background-size:cover;" class="slider-size" onclick="slideBox('slide-2');" id="slide-2">
						<div class="carousel-caption">
							<h3>Sand and Rock</h3>
							<p>Here you can see a wideshot picture of the landscape of Mars' surface, covered in sand dunes and
								bits of rock.</p>
						</div>
					</div>
				</div>

				<div class="item">
					<div style="background:url(../public_html/image/sunset.gif) center center;
          background-size:cover;" class="slider-size" onclick="slideBox('slide-3');" id="slide-3">
						<div class="carousel-caption">
							<h3>A Sunset On Mars</h3>
							<p>Due to atmospheric differences between Earth and Mars, sunsets look a bit more bland and
								unexciting on the Red Planet.</p>
						</div>
					</div>
				</div>


				<div class="item ng-click">
					<div style="background:url(../public_html/image/selfie-optimized.jpg) center center;
          background-size:cover;" class="slider-size" onclick="slideBox('slide-4');" id="slide-4">
						<div class="carousel-caption">
							<h3>Rover Selfie</h3>
							<p>The Curiosity Rover takes a full-shot selfie while traveling on the surface of Mars. I'd like to
								see 10 year olds with $700 iPhones compete with that.</p>
						</div>
					</div>
				</div>

			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="javascript:void(0)" role="button" data-slide="prev"
				data-target="#imageCarousel">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="javascript:void(0)" role="button" data-slide="next"
				data-target="#imageCarousel">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>


		</div>
	</div>

	<!--begin modal -->
	<div class="modal fade modal-fullscreen force-fullscreen" id="imgModal" tabindex="-1" role="dialog"
		  aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="imgModalImage">
					
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>