<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet" type="text/css" href="../../assets/sources/css/TomEliezer.css">
	<div class="container headerr" id="header-aboutUs">
		<span>
			<img src="../../assets/sources/img/florderecha.png" class="florderecha">
			<h1 class="AboutUs">About Us</h1>
			<img src="../../assets/sources/img/florizquierda.png" class="florizquierda">
		</span>
	</div>
	<div class="container ourHistory">
			<h2><strong>Our History</strong></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="container ourHotel" id="ourHotel">
		<video src="../../assets/sources/video/ourHotel.mp4" loop controls>
		</video>
		<p>OUR HOTEL VIDEO</p>
	</div>
	<div class="container ourCooks" id="ourCooks">
		<h3>Our Cooks</h3>
		<div id="myCarousel" class=" container-gallery carousel slide" data-ride="carousel">
	
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		      <div class="item active">
		      	<div class="ourCooks-gallery">
					<img src="../../assets/sources/img/prueba.png"  >
					<hr>
					<div class="ourCooks-desc ">Chef.JONH CLIFE</div>
				</div>
				 <div class="ourCooks-gallery">
					<img src="../../assets/sources/img/prueba.png"  >
					<hr>
					<div class="ourCooks-desc ">Chef.JONH CLIFE</div>
				</div>
				 <div class="ourCooks-gallery">
					<img src="../../assets/sources/img/prueba.png"  >
					<hr>
					<div class="ourCooks-desc ">Chef.JONH CLIFE</div>
				</div>
				 <div class="ourCooks-gallery">
					<img src="../../assets/sources/img/prueba.png"  >
					<hr>
					<div class="ourCooks-desc ">Chef.JONH CLIFE</div>
				</div>
		      </div>
		      <div class="item">
		        <div class="ourCooks-gallery">
					<img src="../../assets/sources/img/prueba.png"  >
					<hr>
					<div class="ourCooks-desc ">Chef.JONH CLIFE</div>
				</div>
		      </div>
		      <div class="item">
		        <div class="ourCooks-gallery">
					<img src="../../assets/sources/img/prueba.png"  >
					<hr>
					<div class="ourCooks-desc ">Chef.JONH CLIFE</div>
				</div>
		        <div class="ourCooks-gallery">
					<img src="../../assets/sources/img/prueba.png"  >
					<hr>
					<div class="ourCooks-desc ">Chef.JONH CLIFE</div>
				</div>
		      </div>
		    </div>
		    		    <!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

	  	</div>
	</div>

	<div class="container speciality">
		<div class="imgSpeciality">
			<img src="../../assets/sources/img/prueba.png">
		</div>
		<div class="textSpeciality" >
			<h3 class="titleSpeciality" id="titleSpeciality">Speciality</h3>
			<p class="pointSpeciality" id="point1Speciality">Excelent Service</p>
			<p  id="description1Speciality">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<p class="pointSpeciality" id="point3Speciality">FREE HOME DELIVERY</p>
			<p id="description2Speciality">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<p class="pointSpeciality" id="point3Speciality">FREE HOME DELIVERY</p>
			<p id="description3Speciality">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
	</div>
	<hr>
	<div class="container openingHours">
			<h3 >Opening Hourss</h3>
			<p><small>Monday to Friday</small><br/>10am-10pm</p>
			<p><small>Saturday to Sunday</small><br/>9am-11pm</p>
	</div>



<?php $this->load->view('FrontEnd/Global/Footer'); ?>