<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/head.php';
?>

<body id="treninky4">

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/data.php';
?>

<main>
	<div class="container">
		<div class="foto_popis">
			<strong><?php echo $treninky_data[3][0]; ?></strong><?php echo $treninky_data[3][3]; ?>
		</div>
		<img src="<?php echo $treninky_data[3][4][0]; ?>" class="img-responsive">
	</div>
</main>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/footer.php';
?>