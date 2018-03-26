<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/sources/css/deerek.css'); ?>">
<?php $this->load->view('FrontEnd/Global/generales'); ?>

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Event Details</h1>
</div>

<div class="container">
	<section class="row">
		<div class="col-md-3">
			<div id="fecha_eventdetail" class="pull-right text-center">
				<div>
					<?= GetFechaV($event[0]->fecha); ?>	
				</div>			
			</div>
		</div>
		<div class="col-md-8 firstImg">
			<img src="<?= base_url().$event[0]->foto;?>" alt="Responsive image">
		</div>
	</section>

	<section class="row">
		<div id="descripcion_evento" class="col-md-offset-3 col-md-8">
			<h2><?= $event[0]->titulo; ?></h2>
			<p class="dateDe"><img src="<?= base_url('assets/sources/img/Deerek/reloj.jpg'); ?>" class="img-fluid" alt="Responsive image" width="30px" height="30px"><b><?= GetHora($event[0]->hora_in); ?> - <?= GetHora($event[0]->hora_fin); ?></b></p>
			<p><?= $event[0]->descripcion; ?></p>
		</div>
	</section>
<br>
	<section class="row">
		<div class="col-md-8 col-md-offset-3 contDetails">
			<div class="col-md-6 lista" >
				<ul>
				<?php 
				set_error_handler('exceptions_error_handler');
				function exceptions_error_handler($severity,$msg,$filename,$lineon){
					if(error_reporting()==0)
						return;
					if(error_reporting() && $severity)
						throw new ErrorException($msg,0,$severity,$filename,$lineon);
				}
				$pos=0; $arr = explode(",", $event[0]->cosas_relevantes)[(int)$pos];
					do{ 
						try{
							$arr = explode(",", $event[0]->cosas_relevantes)[(int)$pos];
							$pos++;
							?>
							<li><span>></span><?= $arr; ?></li>
							<?php	
						}catch(Exception $e){break;}
					}while($arr[$pos]);
				?>
				</ul>
			</div>
			<div class="col-md-6 secondImg" > 
				<img  src="<?= base_url().$event[0]->foto;?>" alt="Responsive image">
			</div>								
		</div >
	</section>
<br><br>
	<section class="row">
		<div id="textosecundario_eventdetail" class="col-md-8 col-md-offset-3">
			<p><?= $event[0]->extra_info; ?></p>
		</div>
	</section>

	<section class="row">
		<div class="col-md-8 col-md-offset-3"><br><br>
			
			<?php $this->load->view('FrontEnd/Global/prev-next',$idFind); ?>
		</div>
	</section>
</div>

<section class="event-detail-img">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 container"><h3>Featured Events</h3></div>
				<div class="col-md-10 col-md-offset-1">
					
				<?php foreach ($featuredEv as $fev) {	?>
					<div class="col-md-4 img-reserv">
						<img src="<?= base_url().$fev->foto; ?>" alt="">
						<div class="dateRes"><?= GetFechaH($fev->fecha); ?></div>
						<div class="col-xs-12 div-reserv">
							<h4><?= $fev->titulo ?></h4>
							<strong class="time-yellow"><img src="<?= base_url('assets/sources/icons/time-yellow.png'); ?>" alt="icon">
								<?= GetHora($fev->hora_in); ?> - <?= GetHora($fev->hora_fin); ?>
							</strong>
							<p><?= $fev->descripcion; ?></p>
						</div>
					</div>
				<?php } ?>

				</div>
			</div>
		</div>
</section>
<form method="post" action="<?= base_url('index.php/restaurant/Events/EvDetail'); ?>" id="sendToDetail">
	<input type="hidden" id="idToFind" name="idToFind">
</form>

<?php $this->load->view('FrontEnd/Global/horaApertura',$time); ?>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>
<script src="<?= base_url('assets/sources/js/restaurant/eventDetail.js'); ?>"></script>