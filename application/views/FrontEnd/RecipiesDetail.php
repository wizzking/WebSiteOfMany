<?php $this->load->view('FrontEnd/Global/Header'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sources/css/Sheyla.css');?>">

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Recipie Details</h1>
</div>

<!--div class="header">
		<img src="<?php echo base_url('assets/sources/img/detalles.jpg'); ?>" width="400px" heigh="1000px">	
	</div>-->


<div class="container">
<section class="row">
	<div class="container">
		<div>
			<div class="recipie">
				<label id="nombreReceta"><strong>PAKODA CHATNY</strong></label><br>
				<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>" width="100px" heigh="100px">
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
			<div class="col-md-8 col-md-offset-2 ImgPrincipal">
				<img src="<?php echo base_url('assets/sources/img/platillo.jpg'); ?>">
					<div class="col-md-10 col-md-offset-1 datosImagen">
						<div class="col-md-4">
							<p>15 M<br>Tiempo de preparación</p>
						</div>

						<div class="col-md-3">
							<p>30 M<br>Tiempo de cocción</p> 
							
						</div>

						<div class="col-md-3 col-md-offset-2 download pull-right">
							<img src="<?php echo base_url('assets/sources/img/pdf.png'); ?>" width="40px" heigh="40px">
							<p>Download<br>Receta de comida</p>
						</div>
					</div>
			</div>
		</div>
</section>

<section class="row">
		<div class="col-md-8 col-md-offset-2 text-muted">
			<div class="col-md-11 col-md-offset-1 dateDe">
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>	
			</div>
			
		</div>
</section>

<section class="row">
	<div class="container">
			<div class="ingredients" >
				<p id="ingredientes">Ingredientes</p> <br>
				<p><b><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
			</div>
		</div>
</section>
</div>

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

<div class="container">
<section class="row">
		<h2>Featured Recipies</h2>
			<div class="container">
				<div class="container FoodOptions row">
					<div class="col-md-4">
						<div class="col-xs-12 div-reserv">
							<div class="menu-gallery pizza">
								<img src="../../assets/sources/img/plato1.png"  >
								<div class="menu-desc">
									<h5><b>Pakoda Chatny</b></h5>
									<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>">
									<p>Esto es un prueba de texto para ver si sale o no sale
									Esto es un prueba de texto para ver si sale o no sale</p>
									<button type="button" class="btn btn-warning borde">Detalle de la receta</button>
									</div>
							</div>
						</div>
					</div>

				<div class="col-md-4">
					<div class="col-xs-12 div-reserv">
						<div class="menu-gallery snack" id="snack">
							<img src="../../assets/sources/img/plato3.png"  >
							<div class="menu-desc ">
								<h5><b>Pakoda Chatny</b></h5>
								<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>">
								<p>Esto es un prueba de texto para ver si sale o no sale
								Esto es un prueba de texto para ver si sale o no sale</p>
								<button type="button" class="btn btn-warning borde">Detalle de la receta</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-xs-12 div-reserv">
						<div class="menu-gallery snack" id="snack">
							<img src="../../assets/sources/img/plato3.png"  >
							<div class="menu-desc ">
								<h5><b>Pakoda Chatny</b></h5>
								<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>">
								<p>Esto es un prueba de texto para ver si sale o no sale
								Esto es un prueba de texto para ver si sale o no sale</p>
								<button type="button" class="btn btn-warning borde">Detalle de la receta</button>
							</div>
						</div>
					</div>
				</div>
			</div>		
</section>
</div>

<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>