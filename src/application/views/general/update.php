<!DOCTYPE html>
<html>
<head>
    <title>CalendLar - Atualização</title>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url ('assets/ext/jquery-ui/jquery-ui.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css') ?>">

    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        .header {
            background: #DAFFEB;
        }

        h3 {
            margin-bottom: 40px;
        }

        .content {
            margin-top: 30px;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #f5f5f5;
            padding: 15px 40px;
        }
    </style>
</head>
<body>
    <div class="container-fluid header">
        <div>
            <a href="https://github.com/fhfavaretto/CalendLar" target="_blank">
                <img src="<?= base_url('assets/img/installation-banner.png') ?>"
                     alt="CalendLar  Banner">
            </a>
        </div>
    </div>

    <div class="container content">
        <?php if ($success): ?>
            <h4>
                O banco de dados foi atualizado com sucesso!
            </h4>

            <p>
                Agora você pode usar a versão mais recente do CalendLar.
            </p>
        <?php else: ?>
            <h4>
                Ocorreu um erro durante o processo de atualização ...
            </h4>

            <p>
                Restaure o backup do seu banco de dados.
            </p>

            <div class="well text-left">
                Error Message: <?= $exception ?>
            </div>
        <?php endif; ?>

        <div>
            <a href="<?= site_url('backend') ?>" class="btn btn-default btn-large">
                <span class="glyphicon glyphicon-wrench"></span>
                <?= lang('backend_section') ?>
            </a>
        </div>
    </div>

    <footer>
        Desenvolvido em  <a href="http://www.franciscanosnaprovidencia.org.br/">Associação Lar são Francisco</a>
    </footer>
</body>
</html>
