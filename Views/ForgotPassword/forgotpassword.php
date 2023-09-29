<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Tienda de muebles modernos y dinamicos.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Alejandro Montals Pozzoli">
        <meta name="theme-color" content="#fac800">
        <link rel="shortcut icon" href="<?= media();?>/images/favicon.png">
        <title><?= $data['page_tag'] ?></title>
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">
        <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style2.css">
    </head>
    <body class="">
        <header class="header-superior">
            <ul class="header-lista">
                <li><a class="header-lista-boton" href="<?= base_url(); ?>/micuenta"><i class=""></i>MI CUENTA</a></li>
                <li><a class="header-lista-boton" href="<?= base_url(); ?>/carrito"><i class=""></i>CARRITO</a></li>
            </ul>
        </header>
        <div class="subheader">
            <a class="subheader-logo" href="<?= base_url(); ?>/home">MonBez</a>
            <ul class="subheader-lista">
                <li><a class="subheader-lista-boton" href="<?= base_url(); ?>/micuenta"><i class=""></i>Salón</a></li>
                <li><a class="subheader-lista-boton" href="<?= base_url(); ?>/carrito"><i class=""></i>Comedor</a></li>
                <li><a class="subheader-lista-boton" href="<?= base_url(); ?>/carrito"><i class=""></i>Oficina</a></li>
                <li><a class="subheader-lista-boton" href="<?= base_url(); ?>/carrito"><i class=""></i>Dormitorio</a></li>
            </ul>
        </div>
        <main>
            <div class="title_content">
                <span class="title_pag">¿Olvidaste tu contraseña?</span>
                <div class="login">
                    <form class="form_login" name="form_login" id="formularioLogin" action="" method="POST">      
                        <input class="valores" type="email" name="txtEmailReset" id="txtEmailReset" placeholder="Correo electrónico">                            
                        <button class="btn_form" type="submit">Reset</button>                                                                      
                    </form>
                </div>
            </div>    
        </main>