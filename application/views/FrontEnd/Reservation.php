<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/sources/css/reservation.css'); ?>">
<div class="header">
	<img src="../../assets/sources/img/imgHeaderBlogDetail4.jpg">
	<span></span>
</div>

<div class="container">
	<section class="row text-center">
		<h2>Book a Table</h2>
		<p class="col-md-6 col-md-offset-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
	</section>

	<section class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="row form-group">
				<div class="col-md-4">
					<input type="text" class="inp" placeholder="Name*"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/user.png'); ?>"></input>
				</div>
				<div class="col-md-4">
					<input type="text" class="inp" placeholder="Email*"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/msg.png'); ?>"></input>
				</div>
				<div class="col-md-4">
					<input type="text" class="inp" placeholder="Phone*"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/cell.png'); ?>"></input>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<input type="text" class="inp" placeholder="Date*"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/calendar.png'); ?>"></input>
				</div>
				<div class="col-md-4">
					<input type="text" class="inp" placeholder="Time*"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/time.png'); ?>"></input>
				</div>
				<div class="col-md-4">
					<input type="text" class="inp" placeholder="Guests*"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/guests.png'); ?>"></input>
				</div>
			</div>
			<div class="row form-group">
				<textarea name="" placeholder="Special Requirements*"></textarea>
				<img src="<?= base_url('assets/sources/icons/chat.png'); ?>" alt="icon" class="icon-textarea">
			</div>
		</div>

	</section>
	<section class="row text-center">
		<button class="btn make">MAKE RESERVATION</button>
	</section>
</div>

<div class="circles">
	<div class="container">
		<div class="row">
			<h3 class="text-center">Special Reservation</h3>
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-4 img-reserv">
					<img src="../../assets/sources/img/imgHeaderBlogDetail4.jpg" alt="">
					<div class="col-xs-12 div-reserv">
						<h4>Private Dinning</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad numquam illo consectetur aut maiores na</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="col-xs-12 reserv text-center">
						<img src="<?= base_url('assets/sources/icons/phone.png'); ?>" alt="telefono">
						<p class="first">1-007 000 005</p>
						<p>Call us for a Special reservation</p>
						<img src="<?= base_url('assets/sources/icons/msg-white.png'); ?>" alt="mensaje">
						<p class="first">info@luxury.com</p>
						<p>mail us for a Special reservation</p>
					</div>
				</div>
				<div class="col-md-4 img-reserv">
					<img src="../../assets/sources/img/imgHeaderBlogDetail4.jpg" alt="">
					<div class="col-xs-12 div-reserv">
						<h4>Private Dinning</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repellendus neque nesciuntdio ea.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>