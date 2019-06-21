<?php

    $start_time = microtime(TRUE);

    include('head.php');
    include('nav.php');


?>

<div class = "container">
    <h1>Galeria 01</h1>
    <p>Catálogo de imagens gerado por PHP 7.</p>

    <div class = "row">
        <div class = "col-md-12">
            <div class = "row">
            <?php
                $start_image_time = microtime(TRUE);
                $dirname = "images/";
                $images = glob($dirname."*.jpg");

                foreach($images as $image)
                {
                    ?>
                    <?php list($width, $height, $type) = getimagesize($image);?>
                    <div class = "col-md-6"><img src="<?=$image?>" width="350px"></div>
                    <div class = "col-md-6"><p>A largura da imagem é: <?=$width?>px</p>
                    <p>A altura da imagem é: <?=$height?>px</p>
                    <p>O tipo da imagem é: <?=$type?></p>
                    <p>Seu tamanho em disco é: <?=filesize($image)?>bytes</p>
                    <?php 
                 $end_image = microtime(TRUE);
                 $time_image = ($end_image - $start_image_time)*1000;
                 $time_image = round($time_image, 4);
                    //echo 'O tempo de carregamento desta imagem foi: '.$time_image.'segundos'; }
                ?>
                     <p>O tempo de carregamento desta imagem foi de: <?=$time_image?>
                     </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<section class = "jumbotron bg-primary">
    <div class = "container text-white">
    <h3>Tempo de carregamento da página</h3>
    <?php
        $end = microtime(TRUE);
        $time = ($end - $start_time)*1000;
        $time = round($time, 4);

        echo 'O tempo de carregamento desta página foi: '.$time.'segundos'; 
     ?>
     </div>
</section>
<?php
    
    include 'pages/foo.php';
?>
