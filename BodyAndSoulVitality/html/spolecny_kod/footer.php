<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/data.php';
 ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img src="/img/loga/logo.png" alt="" class="img-responsive">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h3>Tréninky</h3>
                <hr>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="<?php echo $treninky_data[0][1]; ?>"><p> <?php echo $treninky_data[0][0]; ?>    </p></a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="<?php echo $treninky_data[1][1]; ?>"><p> <?php echo $treninky_data[1][0]; ?>    </p></a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="<?php echo $treninky_data[2][1]; ?>"><p> <?php echo $treninky_data[2][0]; ?>    </p></a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="<?php echo $treninky_data[3][1]; ?>"><p> <?php echo $treninky_data[3][0]; ?>    </p></a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="<?php echo $treninky_data[4][1]; ?>"><p> <?php echo $treninky_data[4][0]; ?>    </p></a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="<?php echo $treninky_data[5][1]; ?>"><p> <?php echo $treninky_data[5][0]; ?>    </p></a>
                    </div>


                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h3>Kontakt</h3>
                <hr>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <p>Tel. na správce:</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <p>+420 602 546 184</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <p>Email:</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <p>info@aktivnisport.cz</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <p>Facebook:</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="https://www.facebook.com/bsvitality"><p>facebook.com/bsvitality</p></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <p>&copy; 2016 David Kvašnovský</p>
    </div>
</footer>
</body>
</html>