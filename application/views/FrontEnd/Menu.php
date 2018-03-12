<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet" type="text/css" href="../../assets/sources/css/TomEliezer.css">
	<script src="../../assets/sources/js/jquery.min.js" ></script>
	<script src="../../assets/sources/js/TomEliezer.js"></script>
	<div class=" container MenuOptions">
		<center>
			<div class="option" id="optionAll">
				<img src="../../assets/sources/img/icon_all.png">
				<h4>All</h4>
			</div>
			<div class="option" id="optionBreakfast">
				<img src="../../assets/sources/img/icon_breakfast.png">
				<h4>Breakfast</h4>
			</div>
			<div class="option" id="optionLunch">
				<img src="../../assets/sources/img/icon_lunch.png">
				<h4>Lunch</h4>
			</div>
			<div class="option" id="optionSnacks">
				<img src="../../assets/sources/img/icon_snacks.png">
				<h4>Snacks</h4>
			</div>
			<div class="option" id="optionPizza">
				<img src="../../assets/sources/img/icon_pizza.png">
				<h4>Pizza</h4>
			</div>
			<div class="option" id="optionSoups">
				<img src="../../assets/sources/img/icon_soups.png">
				<h4>Soups</h4>
			</div>
			<div class="option" id="optionDinner">
				<img src="../../assets/sources/img/icon_dinner.png">
				<h4>Dinner</h4>
			</div>
		</center>											
	</div>
	<div class="FoodOptions" id="FoodOptions">
		<div class="ourCooks-gallery pizza" id="pizza">
			<img src="../../assets/sources/img/prueba.png"  >
			<hr>
			<div class="ourCooks-desc ">Pizza con peperoni</div>
		</div>
			<div class="ourCooks-gallery soup" id="soup">
			<img src="../../assets/sources/img/prueba.png"  >
			<hr>
			<div class="ourCooks-desc ">caldo de pollo</div>
		</div>
			<div class="ourCooks-gallery snack" id="snack">
			<img src="../../assets/sources/img/prueba.png"  >
			<hr>
			<div class="ourCooks-desc ">sabritas</div>
		</div>
		<div class="ourCooks-gallery dinner" id="dinner">
			<img src="../../assets/sources/img/prueba.png"  >
			<hr>
			<div class="ourCooks-desc ">chilaquiles</div>
		</div>
		<div class="ourCooks-gallery breakfast" id="breakfast" >
			<img src="../../assets/sources/img/prueba.png"  >
			<hr>
			<div class="ourCooks-desc ">Huevo con jamon</div>
		</div>
	</div>

	<div class="container speciality grey">
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
<?php $this->load->view('FrontEnd/Global/Footer'); ?>