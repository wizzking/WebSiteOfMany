<?php $this->load->view('FrontEnd/Global/Header'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sources/css/Sheyla.css');?>">
	<div class="header">
		<img src="<?php echo base_url('assets/sources/img/detalles.png'); ?>" width="400px" heigh="1000px">	
	</div>

<section class="row">
	<div class="container">
		<div>
			<div class="recipie">
				<br>
				<label id="nombreReceta"><strong>PAKODA CHATNY</strong></label><br>
				<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>" width="100px" heigh="100px">
			</div>
		</div>
	</div>
</section>

<section class="row">
	<div class="container panel panel-default back">
			<div class="col-xs-6 col-xs-offset-3">
				<img src="<?php echo base_url('assets/sources/img/platillo.png'); ?>" width="500px" heigh="200px">
					<div class="row  panel panel-default datosImagen">
						<div class="col-md-4">
							<p><strong>15 M</strong></p> 
							<p>Tiempo de preparación</p>
						</div>

						<div class="col-md-4">
							<p><strong>30 M</strong></p> 
							<p>Tiempo de cocción</p>
						</div>

						<div class="col-md-4">
							<p>Download
							<img src="<?php echo base_url('assets/sources/img/pdf.png'); ?>" width="50px" heigh="50px"></p>
						</div>
					</div>
			</div>
		</div>
</section>

<section class="row">
	<div class="container">
		<div class="container text-muted">
		<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		</blockquote>
		</div>
	</div>
</section>

<section class="row">
	<div class="container">
		<div class="col-md-5 panel-body">
			<div class="col-xs-12" >
				<p id="ingredientes">Ingredientes</p> <br>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
			</div>
		</div>

		<div class="col-md-6 panel-body">
			<div class="col-xs-12 Nutrition" >
				<p id="ingredientes">Nutrición</p> <br>
				<div class="row">
					<div class="col-md-4">
						<p style="color: #F709AB; font-family: Georgia;"><strong>Nutriente</strong></p>
						<label>Proteinas</label><br><br>
						<label>Carbohidratos</label><br><br>
						<label>Calorias</label>
					</div>

					<div class="col-md-4">
						<p style="color: #F709AB; font-family: Georgia;""><strong>DV</strong></p>
						<label>3.2 GR</label><br><br>
						<label>4.5 GR</label><br><br>
						<label>6.7 GR</label>
					</div>

					<div class="col-md-4">
						<p style="color: #F709AB; font-family: Georgia;""><strong>DV%</strong></p>
						<label>5%</label><br><br>
						<label>7%</label><br><br>
						<label>10%</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="contenedor">
		<img src="<?php echo base_url('assets/sources/img/fondoReceta.png'); ?>" border="0" width="100%" heigh="100px">
		  <div class="texto">Pasos de preparación</div><br>
				<div class="cuadros">
	  				<label>1</label>
	  			</div>

		  		<div class="texto-cuadros">
			  		<p>Esto es un prueba de texto para ver si sale o no sale</p>
				</div>
	</div>
</section>

<section class="row">
	<div class="container">
		<h2>Recetas presentadas</h2>
			<div class="container panel panel-default">
				<div class="col-md-4 panel-body">
					<div class="col-xs-12 FeaturedRecipies " >
						<img src="<?php echo base_url('assets/sources/img/plato1.png'); ?>" width="100%" heigh="100px">
					</div> 
					<label><strong>Pakoda Chatny</strong></label> <br>
					<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>" width="100px" heigh="100px"><br><br>
					<p>Esto es un prueba de texto para ver si sale o no sale
					Esto es un prueba de texto para ver si sale o no sale
					Esto es un prueba de texto para ver si sale o no sale
					Esto es un prueba de texto para ver si sale o no sale</p>
					<button type="button" class="btn btn-warning btn-lg">Detalle de la receta</button>
				</div>
		
				<div class="col-md-4 panel-body">
					<div class="col-xs-12 FeaturedRecipies" >
						<img src="<?php echo base_url('assets/sources/img/plato2.png'); ?>" width="100%" heigh="100px">
					</div>
					<label><strong>Pakoda Chatny</strong></label> <br>
					<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>" width="100px" heigh="100px"><br><br>
					<p>Esto es un prueba de texto para ver si sale o no sale
					Esto es un prueba de texto para ver si sale o no sale
					Esto es un prueba de texto para ver si sale o no sale
					Esto es un prueba de texto para ver si sale o no sale</p>
					<button type="button" class="btn btn-warning btn-lg">Detalle de la receta</button>
				</div>

				<div class="col-md-4 panel-body ">
					<div class="col-xs-12 FeaturedRecipies" >
						<img src="<?php echo base_url('assets/sources/img/plato2.png'); ?>" width="100%" heigh="100px">
					</div>
					<label><strong>Pakoda Chatny</strong></label> <br>
					<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>" width="100px" heigh="100px"><br><br>
					<p>Esto es un prueba de texto para ver si sale o no sale
					Esto es un prueba de texto para ver si sale o no sale
					Esto es un prueba de texto para ver si sale o no sale
					Esto es un prueba de texto para ver si sale o no sale</p>
					<button type="button" class="btn btn-warning btn-lg">Detalle de la receta</button>
				</div>	
			</div>
	</div>		
</section>

<section>
	<div class="container openingHours">
			<h3 >Opening Hours</h3>
			<p><small>Monday to Friday</small><br/>10am-10pm</p>
			<p><small>Saturday to Sunday</small><br/>9am-11pm</p>
	</div>
</section>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>