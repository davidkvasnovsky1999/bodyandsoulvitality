<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/head.php';
?>

<body id="treninky6">
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/data.php';
?>

<main>
	<div class="container">
        <div class="foto_popis">
            <strong><?php echo $treninky_data[5][0]; ?></strong><?php echo $treninky_data[5][3]; ?>
        </div>
		<div class="row">
            <div id="obrazek1" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img src="<?php echo $treninky_data[5][4][1]; ?>" alt="..." class="img-responsive">
                <img src="<?php echo $treninky_data[5][4][0]; ?>" alt="..." class="img-responsive">
            </div>
            <div id="obrazek2" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img src="<?php echo $treninky_data[5][4][2]; ?>" alt="..." class="img-responsive">
            </div>
		</div>
        <img src="<?php echo $treninky_data[5][4][3]; ?>" alt="..." class="img-responsive">
	</div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/footer.php';
?>