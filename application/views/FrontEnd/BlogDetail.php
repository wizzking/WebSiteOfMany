<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet" type="text/css" href="../../assets/sources/css/pilu.css">
	<div class="header" id="blogDetail">
		<img src="../../assets/sources/img/imgHeaderBlogDetail4.jpg">
		<img src="../../assets/sources/img/niu.png" id="img">
	</div>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-1 image" >
				<img src="../../assets/sources/img/imgHeaderBlogDetail5.jpg">
				<div class="col-md-2 cuadro-naranja">
					<div>
						<span>08</span>
						<p>nov-06</p>
					</div>
				</div>
				<div class="col-md-10">
					<h3><strong>Aenca pharetra leetus utsto</strong></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="col-md-3">
				<section class="row">
					<h3><strong>Category</strong></h3>
					<ul class="category">
						<li><span>></span>ALL FOOD</li>
						<li><span>></span>VEGETABLES</li>
						<li><span>></span>DELICIOUS FOOD</li>
						<li><span>></span>SPECIAL DISHES</li>
						<li><span>></span>JUICES</li>	
					</ul>
				</section>
				<section class="row">
					<h3><strong>Recent Post</strong></h3>
					
					<div class="row lista">
						<img src="../../assets/sources/img/img70.jpg">
						<span>08-Nov-2016</span><br>
						<strong>Suspendisse eu dui libero malesuada</strong>
					</div>

					<div class="row lista">
						<img src="../../assets/sources/img/img70.jpg">
						<span>13-Nov-2016</span><br>
						<strong>Quisque pellentes turpis si amet</strong>
					</div>
					
					<div class="row lista">
						<img src="../../assets/sources/img/img70.jpg">
						<span>20-Nov-2016</span><br>
						<strong>Suspendisse eu dui libero malesuada</strong>
					</div>
				</section>
			</div>
		</div>

		<div class="row"><br><br><br>
			<div class="col-sm-6 col-sm-offset-3">
				<?php $this->load->view('FrontEnd/Global/prev-next'); ?>
			</div>
		</div>
	</div>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>