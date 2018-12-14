<?php include 'components/header.php'; ?>
	
	<section class="vitrine-eventos"></section>

	<section class="eventos">
		<div class="container">
			<h2 class="titulo-geral">Seu Evento no Camarões</h2>

			<p>Dispomos de pacotes específicos para grupos entre 30 e 150 pessoas, ideais para casamentos, eventos corporativos,<br />confraternizações e encontros familiares. De acordo com as características do seu evento, buscaremos atendê-lo de<br />forma personalizada em alguma de nossas unidades.</p>
			<p>Para maiores informações, entre em contato conosco através do formulário abaixo.</p>

			<a href="#" data-toggle="modal" data-target="#myModalEvento">SOlicitar uma proposta para eventos</a>
		</div><!-- container -->
	</section><!-- "eventos -->

	<section class="instagram">
		<h3 class="titulo-geral">Siga as nossas Redes Sociais</h3>

		<script src="https://apps.elfsight.com/p/platform.js" defer=""></script>
        <div class="elfsight-app-d787e4bb-080a-4c19-be5a-f8b363ae4141"></div>
	</section><!-- intagram -->

	<!-- Modal EVENTOS -->
	<div class="form-reserva form-eventos">
		<div class="modal fade" id="myModalEvento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="fechar">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
						</div><!-- fechar -->

						<h2 class="titulo-geral">Reserva para eventos</h2>
						
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="item">
								<div class="icon">
									<img src="assets/images/reserva.png" class="img-icon" alt="">
								</div><!-- icon -->
								<p>Observe que o preenchimento não garante sua reserva. <span>Ela será feita mediante disponibilidade, a ser confirmada.</span></p>
							</div><!-- item -->
						</div><!-- md-6 -->
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="item">
								<div class="icon">
									<img src="assets/images/calendario.png" class="img-icon" alt="">
								</div><!-- icon -->
								<p>Caso deseje fazer uma reserva para as <span>próximas 48 horas,</span> favor entrar em contato por telefone com a unidade: <span>84 3209.2425</span></p>
							</div><!-- item -->
						</div><!-- md-6 -->
						
						<form>
							<div class="checkbox-princ">
								<label><input type="checkbox" value=""> Estou ciente sobre as observações mencionadas acima.</label>
							</div><!-- checkbox -->

							<p class="tit">Preencha os dados abaixo. Entraremos em contato para confirmação.</p>

							<div class="form-geral">
								<div class="radio">
									<p>Unidade de preferência (Disponibilidade será confirmada)*:</p>
									<div class="col-md-3 col-sm-3">
										<div class="item">
											<img src="assets/images/default.jpg" alt="">
											<label class="radio-inline"><input type="radio" name="optradio">Sem preferência</label>
										</div><!-- item -->
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="item">
											<img src="assets/images/ft_potiguar.jpg" alt="">
											<label class="radio-inline"><input type="radio" name="optradio">Potiguar</label>
										</div><!-- item -->
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="item">
											<img src="assets/images/ft_restaurante.jpg" alt="">
											<label class="radio-inline"><input type="radio" name="optradio">Restaurante</label>
										</div><!-- item -->
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="item">
											<img src="assets/images/ft_midway.jpg" alt="">
											<label class="radio-inline"><input type="radio" name="optradio">Midway</label>
										</div><!-- item -->
									</div>
								</div><!-- radio -->
							</div>

							<div class="form-geral">
								<div class="form-group">
									<label>Nome*:</label>
									<input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome" value="" required />
								</div><!-- .form-group -->

								<div class="form-group">
									<label>E-mail*:</label>
									<input type="text" name="email" id="email" class="form-control" placeholder="Digite seu e-mail" value="" required />
								</div><!-- .form-group -->

								<div class="form-group">
									<label>Telefone*:</label>
									<input type="text" name="telefone" id="telefone" class="form-control" placeholder="(00) 00000.0000" value="" required />
								</div><!-- .form-group -->

								<div class="form-group">
									<label>Data pretendida:</label>

									<div id="datepairExample4">
										<input type="text" class="date" placeholder="Selecione uma data" />
									</div><!-- #datepairExample -->
								</div><!-- .form-group -->

								<div class="radio">
									<p>Tipo da reserva:</p>
									<div class="col-md-6 col-sm-6">
										<label class="radio-inline"><input type="radio" name="optradio">Almoço</label>
									</div>
									<div class="col-md-6 col-sm-6">
										<label class="radio-inline"><input type="radio" name="optradio">Jantar</label>
									</div>
								</div><!-- radio -->

								<div class="form-group">
									<label>Número de pessoas estimado:</label>
									<input type="number" name="numero" id="numero" class="form-control" placeholder="Informe o número aproximado de pessoas" value="" required />
								</div><!-- .form-group -->

								<div class="form-group">
									<label>Comentários adicionais:</label>
									<textarea name="mensagem" id="mensagem" placeholder="Forneça mais detalhes sobre o seu evento" class="form-control"></textarea>
								</div><!-- .form-group -->
							</div><!-- form-geral -->

							<button class="enviar">Enviar</button>
						</form>
					</div><!-- modal-body -->
				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->
	</div><!-- form-eventos -->

<?php include 'components/footer.php'; ?>