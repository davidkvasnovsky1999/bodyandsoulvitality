<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/head.php';
?>
<body id="uvod">


<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/header.php';
function main(){
    include $_SERVER['DOCUMENT_ROOT'] . '/data.php';

    $main = '
<main>
	<div class="container">
		<div class="row">

			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div id="carousel-example-generic" class="carousel slide" data-interval="5000" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="/img/thumbnails/fotoface_001.jpg" alt="...">
						</div>
						<div class="item">
							<img src="/img/thumbnails/fotoface_012.jpg" alt="...">

						</div>
						<div class="item">
							<img src="/img/thumbnails/fotoface_007.jpg" alt="...">

						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>


				<div class="row">
';
        foreach ($treninky_data as $value) {
            $main.= "
                <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>
						<div class='foto_cviceni'>
							<a href='$value[1]'>
								<div class='foto_cviceni_obsah'>
									$value[5]
								</div>
								<div class='foto_cviceni_popis'>
			                       $value[0]
								</div>
								<img src='$value[2]' alt='' class='foto_cviceni_img img-responsive'>
							</a>
						</div>
					</div>
            ";
        }
        $main.= '

				</div>

			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<a href="/html/hlavni_stranky/6_osalu.php"><img src="/img/loga/pronajem.png" class="img-responsive advert"></a>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-3 col-xs-3">
                            <a href="https://www.facebook.com/bsvitality" title="Body & Soul Vitality FACEBOOK">
                                <img src="/img/loga/facebook3.png" class="advert advert-border img-responsive" alt="advert">
                            </a>
						</div>
		';
                        foreach ($partneri_data as $value) {
                        $main.= "
                            <div class='col-lg-12 col-md-12 col-sm-3 col-xs-3'>
								<a href='$value[1]' title='$value[0]'>
									<img src='$value[2]' class='advert img-responsive' alt=''>
								</a>
							</div>
                            ";
                        }
        $main.='				
						</div>	
					</div>
					<div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
';
    echo $main;
}
main();

include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/footer.php';
?>