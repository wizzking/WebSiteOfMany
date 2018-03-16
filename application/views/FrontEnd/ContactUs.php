<?php $this->load->view('FrontEnd/Global/Header'); ?>
		<div class="row">
			<img src="<?php echo base_url('assets/sources/img/gris.jpg'); ?>" height="250px" width="1365px">
	</div>
	<div class="row" style="margin-top: 50px; margin-bottom: 30px">
		<div class="container">
			<h3>Contact Details</h3>
			<div class="col-sm-4">
				<div class="col-sm-8">
					<span class="glyphicon glyphicon-map-marker"></span>
					<h6><b>ADDRESS</b></h6>
					<h6 style="color: gray;">Luxury Restaurant</h6>
					<h6 style="color: gray;">California Second Street</h6>
					<h6 style="color: gray;">2nd floor</h6>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-sm-8">
					<span class="glyphicon glyphicon-earphone"></span>
					<h6><b>PHONE</b></h6>
					<h6 style="color: gray;">+91 855 558 659</h6>
					<h6 style="color: gray;"><b>EMAIL:</b>info@luxury.com</h6>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-sm-8">
					<span class="fa fa-share"></span>
					<h6><b>FOLLOW US</b></h6>
					<div class="social-networks">
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div> 
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="background-color: #e2f7e0;">
		<div class="container"  id="row2">
			<h3>Get in touch</h3>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group input-group-sm">
	                    <span class="input-group-addon form" id="sizing-addon3"><img src="<?= base_url('assets/sources/img/icon_user.png'); ?>" width="15px;"></span>
	                    <input type="text" class="form-control" placeholder="Name*" aria-describedby="sizing-addon3">
	                 </div>
	            </div>
	            <div class="form-group">
	                 <div class="input-group input-group-sm">
	                    <span class="input-group-addon form" id="sizing-addon3"><img src="<?= base_url('assets/sources/img/icon_msg.png'); ?>" width="15px;"></span>
	                    <input type="text" class="form-control" placeholder="Message*" aria-describedby="sizing-addon3">
	                 </div>
            	 </div>
            	 <div class="form-group">
            	 <button type="button" class="btn btn-warning" id="botonSend">SEND NOW</button>
            	 </div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group input-group-sm">
		                    <span class="input-group-addon form" id="sizing-addon3"><img src="<?= base_url('assets/sources/img/icon_carta.png'); ?>" width="15px;"></span>
		                    <input type="text" class="form-control" placeholder="Email*" aria-describedby="sizing-addon3">
		            </div>
		        </div>
			</div>
		</div>
	</div>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>