<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/sources/css/deerek.css'); ?>">

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Event Details</h1>
</div>

<div class="container">
	<section class="row">
		<div class="col-md-3">
			<div id="fecha_eventdetail" class="pull-right text-center">
				<div>
					<strong>08</strong>
					<p>NOV <br>2016</p>	
				</div>			
			</div>
		</div>
		<div class="col-md-8 firstImg">
			<img src="<?= base_url('assets/sources/img/Deerek/fondonegro.jpg'); ?>" alt="Responsive image">
		</div>
	</section>

	<section class="row">
		<div id="descripcion_evento" class="col-md-offset-3 col-md-8">
			<h2>Titulo del evento</h2>
			<p class="dateDe"><img src="<?= base_url('assets/sources/img/Deerek/reloj.jpg'); ?>" class="img-fluid" alt="Responsive image" width="30px" height="30px"><b>AQUI VA LA HORA DEL EVENTO</b></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
		</div>
	</section>
<br>
	<section class="row">
		<div class="col-md-8 col-md-offset-3">
			<div class="col-md-6 lista" >
				<ul>
					<li><span>></span>Pellentesque quis sem aliquet</li>
					<li><span>></span>Aliquam dictum erat faucibus magna</li>
					<li><span>></span>Nullam auctor ipsum a elit condimentum</li>
					<li><span>></span>Sed sed velit et ipsum faucibus</li>
					<li><span>></span>Aenean consequat velit in mollis</li>
				</ul>
			</div>
			<div class="col-md-6 secondImg" > 
				<img  src="<?= base_url('assets/sources/img/Deerek/fondonegro.jpg'); ?>" alt="Responsive image">
			</div>								
		</div >
	</section>
<br><br>
	<section class="row">
		<div id="textosecundario_eventdetail" class="col-md-8 col-md-offset-3">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</section>

	<section class="row">
		<div class="col-md-8 col-md-offset-3"><br><br>
			<?php $this->load->view('FrontEnd/Global/prev-next'); ?>
		</div>
	</section>
</div>

<section class="event-detail-img">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 container"><h3>Featured Events</h3></div>
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-4 img-reserv">
						<img src="../../assets/sources/img/imgHeaderBlogDetail4.jpg" alt="">
						<div class="dateRes">11-NOV-06</div>
						<div class="col-xs-12 div-reserv">
							<h4>Event deading here</h4>
							<strong class="time-yellow"><img src="<?= base_url('assets/sources/icons/time-yellow.png'); ?>" alt="icon">7:00 pm - 10:00 pm</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad numquam illo consectetur aut maiores na</p>
						</div>
					</div>
					<div class="col-md-4 img-reserv">
						<img src="../../assets/sources/img/imgHeaderBlogDetail4.jpg" alt="">
						<div class="dateRes">13-NOV-06</div>
						<div class="col-xs-12 div-reserv">
							<h4>Event deading here</h4>
							<strong class="time-yellow"><img src="<?= base_url('assets/sources/icons/time-yellow.png'); ?>" alt="icon">7:00 pm - 10:00 pm</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad numquam illo consectetur aut maiores na</p>
						</div>
					</div>
					<div class="col-md-4 img-reserv">
						<img src="../../assets/sources/img/imgHeaderBlogDetail4.jpg" alt="">
						<div class="dateRes">18-NOV-06</div>
						<div class="col-xs-12 div-reserv">
							<h4>Event deading here</h4>
							<strong class="time-yellow"><img src="<?= base_url('assets/sources/icons/time-yellow.png'); ?>" alt="icon">7:00 pm - 10:00 pm</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad numquam illo consectetur aut maiores na</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
	
<!--
<div class="panel-body">
	<div class="pane12">
		<div class="row">
			<div id="feature_evento" class="" style="background-color:#f0f0f5; width: 100%; height: 400px;">
				<div class="col-md-12 col-md-offset-2">
					<h2>Featured Event</h2>
				</div>
				
				<div class="col-md-2 col-md-offset-2" > 
					<div>
						<img  id="imagenprincipal_eventodail"  src="<?php echo base_url('assets/sources/img/Deerek/fondonegro.jpg'); ?>" class="img-fluid" alt="Responsive image" width="240" height="150px">
					</div>
					<div  style="background-color: white; width:240px; top:-18px; position: relative;">
						<h3>Event deading here</h3>
						<div class="col-md-1 ">
							<img class=" col-md-offset-0" id="imagenprincipal_eventodail" src="<?php echo base_url('assets/sources/img/Deerek/reloj.jpg'); ?>" class="img-fluid" alt="Responsive image" width="15px" height="15px">
						</div>
							<p> <b>La hora va aqui</b></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore  </p>						
					</div>
				</div>

				<div class="col-md-2 col-md-offset-1" > 
					<div>
						<img  id="imagenprincipal_eventodail"  src="<?php echo base_url('assets/sources/img/Deerek/fondonegro.jpg'); ?>" class="img-fluid" alt="Responsive image" width="240" height="150px">
					</div>
					<div  style="background-color: white; width:240px; top:-18px; position: relative;">
						<h3>Event deading here</h3>
						<div class="col-md-1 ">
							<img class=" col-md-offset-0" id="imagenprincipal_eventodail" src="<?php echo base_url('assets/sources/img/Deerek/reloj.jpg'); ?>" class="img-fluid" alt="Responsive image" width="15px" height="15px">
						</div>
							<p> <b>La hora va aqui</b></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore  </p>					
					</div>
				</div>

				<div class="col-md-2 col-md-offset-1" > 
					<div>
						<img  id="imagenprincipal_eventodail"  src="<?php echo base_url('assets/sources/img/Deerek/fondonegro.jpg'); ?>" class="img-fluid" alt="Responsive image" width="240" height="150px">
					</div>
					<div  style="background-color: white; width:240px; top:-18px; position: relative; ">
						<h3>Event deading here</h3>
						<div class="col-md-1 ">
							<img class=" col-md-offset-0" id="imagenprincipal_eventodail" src="<?php echo base_url('assets/sources/img/Deerek/reloj.jpg'); ?>" class="img-fluid" alt="Responsive image" width="15px" height="15px">
						</div>
							<p> <b>La hora va aqui</b></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore  </p>					
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>


-->
<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>