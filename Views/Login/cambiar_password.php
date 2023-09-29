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
            <div id="divLoading">
                <div>
                    <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
                </div>
            </div>
            <div class="title_content_reset" >
                <span class="title_pag"><?= $data['page_title']; ?></span>
                <div class="login">
                    <form class="form_login" id="formCambiarPass" name="formCambiarPass" action="">      
                        <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $data['idpersona']; ?>" required >
                        <input type="hidden" id="txtEmail" name="txtEmail" value="<?= $data['email']; ?>" required >
                        <input type="hidden" id="txtToken" name="txtToken" value="<?= $data['token']; ?>" required >
                        <input class="valores" id="txtPassword" name="txtPassword" type="password" placeholder="Nueva contraseña" required>                            
                        <input class="valores" id="txtPasswordConfirm" name="txtPasswordConfirm" type="password" placeholder="Confirmar contraseña" required>                            
                        <button class="btn_form" type="submit">Reiniciar</button> 
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