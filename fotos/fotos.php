<html>
<head>
  <?php
  	// para receber mensagens de erro, descomente as linhas abaixo
 	//error_reporting(E_ALL);
	// ini_set('display_errors', '1');

   include("../cabeca.php"); ?>
</head>
<body>
<div class="container-fluid principal">
  <div class="row">
  	<div class="col-md-3"></div>
  	<div class="col-sm-12 col-md-6">
		<!-- Page Content -->
		<div class="container">
		  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Galeria de fotos</h1>
		  <hr class="mt-2 mb-5">
		  <div class="row text-center text-lg-left">
	  		<?php 
				$path    = './';
				$files = scandir($path);
				$files = array_diff(scandir($path), array('.', '..'));
				foreach ($files as $file => $value) :?>
					<?php if(!strpos($value, "php") && !strpos($value, "gitignore") ):?>
					<div class="col-lg-3 col-md-4 col-6">
				      <a href="<?php echo $value?>" class="d-block mb-4 h-100">
				            <img class="img-fluid img-thumbnail" src="<?php echo $value?>" alt="">
				          </a>
				    </div>
					<?php endif;?>
				<?php endforeach; ?>
		  </div>
		</div>
		<!-- /.container -->
	<div class="col-md-3"></div>
	</div>
  </div>
</body>
</html>
