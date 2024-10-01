<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/head.php';
?>

<body id="treninky5">
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/data.php';
?>

<main>
	<div class="container">
		<div class="foto_popis">
			<strong><?php echo $treninky_data[4][0]; ?></strong><?php echo $treninky_data[4][3]; ?>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<img src="<?php echo $treninky_data[4][4][0]; ?>" class="img-responsive">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<img src="<?php echo $treninky_data[4][4][0]; ?>" class="img-responsive">
			</div>
		</div>
		
	</div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/footer.php';
?>