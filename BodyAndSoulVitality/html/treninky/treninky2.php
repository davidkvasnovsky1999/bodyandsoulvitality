<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/head.php';
?>

<body id="treninky2">

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/data.php';
?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="foto_popis_text">
					<strong><?php echo $treninky_data[1][0]; ?></strong><?php echo $treninky_data[1][3]; ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">					
                <img src="<?php echo $treninky_data[1][4][0]; ?>" alt="..." class="img-responsive">
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<img src="<?php echo $treninky_data[1][4][1]; ?>" alt="..." class="img-responsive">
			</div>
		</div>
		<img src="<?php echo $treninky_data[1][4][2]; ?>" alt="..." class="img-responsive">
	</div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/footer.php';
?>