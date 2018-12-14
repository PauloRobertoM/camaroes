<?php include 'components/header.php'; ?>

	<section class="restaurante">
		<div class="container">
			<h2 class="titulo-geral">Nossos Restaurantes</h2>

			<h5>Selecione um de nossos restaurantes para mais informações sobre serviços, localização e contato.</h5>

			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<a href="restaurante-potiguar.php">
						<img src="../assets/images/potiguar.jpg" alt="">
						<p>Camarões</p>
						<h4>Potiguar</h4>
					</a>
				</div><!-- md-3 -->
				<div class="col-lg-3 col-md-3 col-sm-3">
					<a href="restaurante-restaurante.php">
						<img src="../assets/images/restaurante_1.jpg" alt="">
						<p>Camarões</p>
						<h4>Restaurante</h4>
					</a>
				</div><!-- md-3 -->
				<div class="col-lg-3 col-md-3 col-sm-3">
					<a href="restaurante-midway.php">
						<img src="../assets/images/midway.jpg" alt="">
						<p>Camarões</p>
						<h4>Midway Mall</h4>
					</a>
				</div><!-- md-3 -->
				<div class="col-lg-3 col-md-3 col-sm-3">
					<a href="restaurante-express.php">
						<img src="../assets/images/express.jpg" alt="">
						<p>Camarões</p>
						<h4>Natal Shopping</h4>
					</a>
				</div><!-- md-3 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- bem-vindo -->

	<section class="mapa map" id="overlay">
		<iframe id="map" src="https://www.google.com/maps/d/u/0/embed?mid=1OWFT2iWwiGtwn3ldmvNOMSaRhks" width="100%" scrollwheel="false" height="800" data-disable-scroll="1" data-disable-touch="1"></iframe>
	</section><!-- mapa -->

<?php include 'components/footer.php'; ?>