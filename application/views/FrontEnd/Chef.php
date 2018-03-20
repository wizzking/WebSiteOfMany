<?php $this->load->view('FrontEnd/Global/Header'); ?>

<div id="form1">
	<div class="row">
		<div class="container chefHead">
			<div class="form-group">
				<div class="col-md-offset-1">
					<h3><b>Head Chef</b></h3>
					<div class="headChef">
						<img src="<?= base_url('assets/sources/img/chefHead.jpg'); ?>" width="500px" heigh="300px">
						<div class="textSpeciality" style="background-image: url(../../assets/sources/img/fondo7.jpg);">
								<h3><b>Chef Benito</b></h3>
								<p><font color="gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</font></p>
								<div class="social-networks">
			                      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
			                      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
			                      <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
		                    	</div>
		                    	<div class="menu">
	                    		<h3>Expertise in</h3>
	                    		<div class="option" id="optionBreakfast">
									<a href=""><img src="../../assets/sources/img/icon_breakfast.png" width="18px" height="18px"> BREAKFAST</a>
								</div>
								<div class="option" id="optionStarter">
									<a href=""><img src="../../assets/sources/img/icon_pizza.png" width="18px" height="18px"> STARTER</a>
								</div>
								<div class="option" id="optionLunch">
									<a href=""><img src="../../assets/sources/img/icon_lunch.png" width="18px" height="18px"> LUNCH</a>
								</div>
			                  </div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>


<div class="row" style="background-color: #e2f7e0;">
	<div class="container chefOptions">
		<div class="form-group">
			<div class="col-md-offset-1">
				<h3><b>Chef Team</b></h3>
				<div class="menu-gallery chef1">
					<img src="<?= base_url('assets/sources/img/chefteam1.jpg'); ?>">
					<div class="menu-desc ">
					<h5><b><center>DOÑA CLARITA</center></b></h5>
					</div>
				</div>
				<div class="menu-gallery chef2">
					<img src="<?= base_url('assets/sources/img/chefteam2.jpg'); ?>">
					<div class="menu-desc ">
					<h5><b><center>BERTHA</center></b></h5>
					</div>
				</div>
				<div class="menu-gallery chef3">
					<img src="<?= base_url('assets/sources/img/chefteam3.jpg'); ?>">
					<div class="menu-desc ">
					<h5><b><center>BERTHA</center></b></h5>
					</div>
				</div>
				<div class="menu-gallery chef4">
					<img src="<?= base_url('assets/sources/img/chefteam4.jpg'); ?>">
					<div class="menu-desc ">
					<h5><b><center>BERTHA</center></b></h5>
					</div>
				</div>
				<div class="menu-gallery chef1">
					<img src="<?= base_url('assets/sources/img/chefteam1.jpg'); ?>" >
					<div class="menu-desc ">
					<h5><b><center>DOÑA CLARITA</center></b></h5>
					</div>
				</div>
				<div class="menu-gallery chef2">
					<img src="<?= base_url('assets/sources/img/chefteam2.jpg'); ?>" >
					<div class="menu-desc ">
					<h5><b><center>BERTHA</center></b></h5>
					</div>
				</div>
				<div class="menu-gallery chef2">
					<img src="<?= base_url('assets/sources/img/chefteam3.jpg'); ?>" >
					<div class="menu-desc ">
					<h5><b><center>BERTHA</center></b></h5>
					</div>
				</div>
				<div class="menu-gallery chef2">
					<img src="<?= base_url('assets/sources/img/chefteam4.jpg'); ?>" >
					<div class="menu-desc ">
					<h5><b><center>BERTHA</center></b></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>