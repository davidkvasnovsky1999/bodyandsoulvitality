<?php
include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/head.php';
?>


<body id="fotogalerie">

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/header.php';

    function fotogalerie(){
        require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
        $fotogalerie='
    <main>   
            <div class="container">
                <div class="galery">
                    <div class="row">
        ';
        foreach ($fotogalerie_data as $value) {
            $fotogalerie.="
                        <div class='obrazky_v_galerii col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                            <a class='fancybox' rel='group' href='$value'><img src='$value' alt='...' class='img-responsive'></a>
                        </div>
            ";
                    }
        $fotogalerie.='
                    
                    </div>
                </div>
            </div>
    </main>
        ';
        echo $fotogalerie;
    }
    fotogalerie();
    include $_SERVER['DOCUMENT_ROOT'] . '/html/spolecny_kod/footer.php';
    ?>
