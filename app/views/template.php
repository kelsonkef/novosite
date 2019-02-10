<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal CBPMBM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="icon" href="<?php echo URL_BASE ?>assets/img/favicon.ico" type="image/x-icon"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/semantic.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/estilo.css" />
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/font-awesome.css" />
</head>
<body>
    <header>
        <?php include 'cabecalho.php'; ?>      
    </header>
    <main>    
        <?php $this->load($view, $viewData); ?>
    </main>
    <footer>
         <?php include 'rodape.php'; ?>        
    </footer>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/materialize.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.tooltipped').tooltip();
        });
    </script>
    
    <script type="text/javascript">		
            $(".button-collapse").sideNav();
            $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 525,				
                belowOrigin: true,
                hover: true,
                constrainWidth: false				
            }
            );

            var offset = $('.menu-principal').offset().top;
            var $meuMenu = $('.menu-principal'); // guardar o elemento na memoria para melhorar performance
            $(document).on('scroll', function () {
                    if (offset <= $(window).scrollTop()) {
                            $meuMenu.addClass('navbar-fixed');
                    } else {
                            $meuMenu.removeClass('navbar-fixed');
                    }
            });		
            
            $(document).ready(function(){
              $('.menu-principal').pushpin({
                    top:220,
                    offset: 15
              });
            });
            
            $('.slider').slider({
                height: 430,
                transition: 800,
                interval: 6000
            });
    </script>
    <script src="<?php echo URL_BASE ?>assets/js/semantic.min.js"></script>
    <script type="text/javascript">
            $('.special.cards .image').dimmer({
              on: 'hover'
            });
    </script>    
</body>
</html>