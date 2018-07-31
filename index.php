
<?php
/*
Autor : Michel Deziderio e Silva
Descrção : Aqui está uma ferramenta extremamente forte e com vários fins de uso.
Autor URL : www.micheldeziderio.com.br
*/
?>

<?php include('includes/api_conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Exibindo fotos do instagram com Modal Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
</head>
<body>
 
<div class="container">
    <div class="row">

        <!-- Instagram feed fotos -->
        <h2>Feed Instagram com Modal Bootstrap</h2>

      <?php include('includes/feed_modal.php'); ?>

    </div>
</div>

<div class="container">
    <div class="row">

        <!-- Slick Slider -->
        <h2>Feed Instagram com Slick</h2>

        <div class="md-slider">

            <?php include('includes/slick_slider.php'); ?>

        </div>

    </div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="slick/slick.js" type="text/javascript" charset="utf-8"></script> 
 
<script>
$(document).ready(function(){
    $('.md-slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0px'
    });
});
</script>

</body>
</html>
