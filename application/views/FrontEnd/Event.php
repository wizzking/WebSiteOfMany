<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/sources/css/Ereo.css'); ?>">

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Event</h1>
</div>

<br>
<div class="container" style=" width: 100%;">
	<!-- ////////////////////	Contenedor de cada evento	//////////////////// -->
<?php foreach (array(1, 2, 3) as &$valor) {	?>
	<div class="row eventContainer">
		<div class="col-md-12">
			<div class="col-md-2 col-md-offset-1">
				<div id="fecha_eventdetail" class="pull-right text-center fechapost">
					<div>
						<strong>08</strong>
						<p>NOV<br>2016</p>	
					</div>			
				</div>
			</div>
			<div class="col-md-5">
				<img src="<?= base_url('assets/sources/img/post.jpg');?>" class="imgn" ></img>
			</div>
			<div class="col-md-3">
				<label id="eventhead">Event Heading Here</label>
				<p class="dateDe"><img src="<?= base_url('assets/sources/img/Deerek/reloj.jpg'); ?>" class="img-fluid" alt="Responsive image" width="25px" height="25px"><b>AQUI VA LA HORA DEL EVENTO</b></p>
				<p id="eventcontent">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud.
				</p>
				<button type="button" class="btn btn-lg btn-primary" id="botonview">VIEW EVENT DETAILS</button>
			</div>
		</div>
	</div>	
<?php } ?>
	<!-- ////////////////////	fin del contenedor	//////////////////// -->

</div>
<br>
<div class="container" id="pagination">
	<div class="row">




<div class="options col-xs-12">
	<div class="col-md-6 col-md-offset-3">
		<div class="pager">
			<button type="button" class="prev-next pull-left"><span>< Next</span></button>
			<button type="button" class="prev-next pull-left midle"><span>1 - 3</span></button>
			<button type="button" class="prev-next pull-left midle"><span>4 - 6</span></button>
			<button type="button" class="prev-next pull-left midle"><span>7 - 9</span></button>
			<button type="button" class="prev-next pull-left"><span>Prev ></span></button>
		</div>
	</div>
</div>













		
	</div>
</div>
<div class="opening">
	<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
</div>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>