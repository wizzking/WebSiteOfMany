<?php $this->load->view('FrontEnd/Global/Header'); ?>

	<link rel="stylesheet" href="<?php echo base_url('assets/sources/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/sources/css/kemish.css'); ?>">
  <div class="blog_bg">
  	<h1 class="blog_titulo"><img src="<?php echo base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?php echo base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha"> Blog</h1>
  </div>
  


  	<!-- contenido del blog-->

  	<!-- imagen-->

<div>
  <div class="blog_contenido" id="blog_contenido"><img src=""></div>
  	<div id="fecha" class="fecha">
  		<p id="dia" style="position: absolute; font-size: 40px; color: white;">08</p>
  		<p id="mes" style="position: absolute; color: white; margin-top: 40px; ">nov</p>
  		<p id="anio" style="position: absolute; color: white; margin-top: 40px; margin-left: 40px; ">06</p>
  	</div>
    <div class="titulo">
      <p style="font-size: 30px; position: relative; top: -60px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p style="position: relative; top: -60px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud.</p>
    </div>
    <button class="readmore">Read More</button>
    <img class="lineas" src="<?php echo base_url('assets/sources/img/lineas.png'); ?>">
    <img class="like" src="<?php echo base_url('assets/sources/img/like.png'); ?>">
    <img class="redes" src="<?php echo base_url('assets/sources/img/redes.png'); ?>">
</div>
<!-- sidebar -->
<div class="sidebar">
  <h3>Category</h4>
  <ol id="lista2">
    <li>ALL FOODS</li>
    <li>VEGETABLES</li>
    <li>DELICIOUS FOOD</li>
    <li>SPECIAL DISHES</li>
    <li>JUICES</li> 
  </ol>
</div>


<div class="sidebar">
  <h3>Recent Post</h4>
    <div class="post">
      <div style="background-color: gray; height: 70px; width: 70px;"><img src=""></div>
      <p id="dia" style="position: relative; left: 6%; top: -70px;">08-</p>
      <p id="mes" style="position: relative; left: 8%; top: -100px;">nov-</p>
      <p id="anio" style="position: relative; left: 11%; top: -130px;">06</p>
      <h4 style="font-weight: bold; position: relative; left: 6%; top: -130px;">Lorem ipsum dolor sit amet.</h2>
    </div>
</div>
<!-- termina sidebar -->


<!-- pestañas -->
<div class="pestanias">
  <button class="next_prev">< PREV</button>
  <button class="numeros">1-3</button>
  <button class="numeros">3-9</button>
  <button class="numeros">9-12</button>
  <button class="next_prev">NEXT ></button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/sources/js/bootstrap.min.js'); ?>"></script> 

<?php $this->load->view('FrontEnd/Global/Footer'); ?>