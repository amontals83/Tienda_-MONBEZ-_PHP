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
        <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">
        <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
    </head>
    <body class="">
        <header class="main-header">
            <ul>
                <li><a class="dropdown-item" href="<?= base_url(); ?>/micuenta"><i class=""></i>MI CUENTA</a></li>
                <li><a class="dropdown-item" href="<?= base_url(); ?>/perfil"><i class="fa fa-user fa-lg"></i></a></li>
            </ul>
            <a class="" href="<?= base_url(); ?>/home">MonBez</a>
        </header>


<?php //footer($data); ?>