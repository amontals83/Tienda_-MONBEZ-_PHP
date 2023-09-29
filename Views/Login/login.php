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
        <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
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
            <div id="divLoading">
                <div>
                    <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
                </div>
            </div>
            <input type="checkbox" id="chk" checked>
            <div class="title_content" id="no-ocultar">
                <span class="title_pag"><?= $data['page_title']; ?></span>
                <div class="login">
                    <form class="form_login" name="formLogin" id="formLogin" action="">      
                        <input class="valores" type="email" id="txtEmail" name="txtEmail" placeholder="Correo electrónico">                            
                        <input class="valores" type="password" id="txtPassword" name="txtPassword" placeholder="Contraseña">                            
                        <div class="text-center" id="alertLogin"></div>
                        <div>       
                            <button class="btn_form" type="submit">Entrar</button>
                            <a class="btn_form" href="<?= base_url(); ?>/home">Cancelar</a>
                        </div>
                        <a class="txt_form" href="<?= base_url(); ?>/nuevoperfil">Crear nuevo perfil</a>
                        <a class="txt_form"><label for="chk">¿Olvidaste tu contraseña?</label></a>
                    </form>
                </div>
            </div>  
            <div class="title_content_reset" id="ocultar">
                <span class="title_pag"><?= $data['page_title2']; ?></span>
                <div class="login">
                    <form class="form_login" id="formResetPass" name="formResetPass" action="">      
                        <input class="valores" id="txtEmailReset" name="txtEmailReset" type="email" placeholder="Correo electrónico">                            
                        <button class="btn_form" type="submit">Reiniciar</button> 
                        <a class="txt_form"><label for="chk">Iniciar sesión</label></a>                                                                     
                    </form>
                </div>
            </div>  
        </main>
        <script>
            const base_url = "<?= BASE_URL(); ?>";
        </script>
        <!-- Essential javascripts for application to work-->
        <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?= media(); ?>/js/popper.min.js"></script>
        <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
        <script src="<?= media(); ?>/js/main.js"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
        <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert2.min.js"></script>
        <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
    </body>
</html>