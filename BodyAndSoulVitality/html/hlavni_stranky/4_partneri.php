<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/head.php';
?>

<body id="partneri">

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/header.php';

function partneri(){
    include $_SERVER['DOCUMENT_ROOT'] . '/data.php';
    $partneri= '
    
    
<main>
    <div class="container">
        <div class="row">
    ';
    foreach ($partneri_data as $value) {
        $partneri.= "
            <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>
                <div class='row'>
                    <div class='col-md-12 col-sm-4 col-xs-12'>
                        <a title='$value[0]' href='$value[1]'>
                            <img src='$value[2]' class='img-responsive' alt=''>
                        </a>
                    </div>
                    <div class='col-md-12 col-sm-8 col-xs-12 partneri-popis'>
                        <a href='$value[1]'><p>$value[3]</p></a>
                        <p>$value[4]</p>
                    </div>
                </div>
            </div>
            ";
    }

    $partneri.= '
        </div>
    </div>
</main>
    ';
    echo $partneri;
}
partneri();

include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/footer.php';
?>